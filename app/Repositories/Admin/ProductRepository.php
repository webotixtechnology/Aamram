<?php

namespace App\Repositories\Admin;

use App\Models\Product;
use App\Models\Product_details;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * Define the model class for the repository.
     */
    public function model()
    {
        return Product::class;
    }

    /**
     * Store a new product along with its details in the database.
     */

     public function store(Request $request)
{
    DB::beginTransaction(); // Start a transaction to ensure data consistency

    try {
        // Step 1: Insert the product into the first table (products)
        $product = [
            'user_id'      => Auth::id(),
            'update_id'    => $request->update_id,
            'product_name' => $request->product_name,
            'hsn_no'       => $request->hsn_no,
            'moq'          => $request->moq,
            'product_type' => $request->product_type,
            'description'  => $request->description,
            'cgst'         => $request->cgst,
            'sgst'         => $request->sgst,
            'igst'         => $request->igst,
            'created_at'   => now(),
            'updated_at'   => now(),
        ];

        // Insert the product into the products table using Eloquent and get the product model
        $product = $this->model->create($product); // This will return the product with the generated ID

        // Get the last inserted ID (product ID)
        $lastInsertedId = $product->id;

        // Step 2: Prepare product details data dynamically
        $productData = [];

        // Loop through product sizes, units, prices, and stock based on the request data
        $cnt = $request->cnt; // Number of sizes
        for ($i = 1; $i <= $cnt; $i++) {
            $productData[] = [
                'parentID'     =>  $lastInsertedId,  // Use the dynamically created product ID as parentID
                'product_size' => $request->{"product_size{$i}"},
                'unit'         => $request->{"unit{$i}"},
                'dist_price'   => $request->{"dist_price{$i}"},
                'bottom_price' => $request->{"bottom_price{$i}"},
                'stock'        => $request->{"stock{$i}"},
                'created_at'   => now(),
                'updated_at'   => now(),
                'update_id'    => Auth::id(),
            ];
            DB::table('product_details')->insert($productData);
        }

        // Step 3: Insert product details into the second table (product_details)
        

        // Commit the transaction if everything is successful
        DB::commit();

        // Return success response
        return to_route('admin.product.index')->with('success', __('Product Created Successfully'));

    } catch (\Exception $e) {
        // Rollback the transaction if something goes wrong
        DB::rollback();

        // Log the error for debugging
        // Log::error('Error in product creation: ' . $e->getMessage());

        // Optionally, you can return a failure response
        return back()->with('error', 'Failed to create product: ' . $e->getMessage());
    }
}

    /**
     * Update a product and its details in the database.
     */
    public function update(array $attributes, $id)
    {
        DB::beginTransaction();
        try {
            // Find the product
            $product = $this->model->findOrFail($id);
    
            // Update the product attributes
            $product->update($attributes);
    
            // Optionally handle related product details (if needed)
            if (isset($attributes['details']) && is_array($attributes['details'])) {
                foreach ($attributes['details'] as $detail) {
                    if (isset($detail['id'])) {
                        // Update existing detail
                        $productDetail = $product->details()->find($detail['id']);
                        if ($productDetail) {
                            $productDetail->update($detail);
                        }
                    } else {
                        // Create new detail
                        $product->details()->create($detail);
                    }
                }
            }
    
            DB::commit();
            return redirect()->route('admin.product.index')->with('success', __('Product Updated Successfully'));
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
    

    /**
     * Delete a product and its associated details from the database.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $product = $this->model->findOrFail($id);

            // Delete associated product details
            Product_details::where('parent_id', $product->id)->delete();

            // Delete the product
            $product->delete();

            DB::commit();

            return redirect()->back()->with('success', __('Product Deleted Successfully'));
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
