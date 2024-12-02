<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Product_details;
use Illuminate\Http\Request;
use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\ProductRepository;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the products.
     *
     * @param ProductDataTable $dataTable
     * @return \Illuminate\View\View
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */



     public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created product and its details.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return $this->repository->store($request);
    }
    

    /**
     * Display the specified product.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::with('details')->findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing a product.
     *
     * @param Product $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $pro_list = Product::pluck(id);
        //print_r($pro_list);
        
        return view('admin.product.edit', ['pro_list' => $pro_list],compact('pro_list'));

    }

   
    /**
     * Update the specified product and its details.
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        return $this->repository->update($$request, $product->id);
    }

    /**
     * Remove the specified product and its details from storage.
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, Product $product)
    {
        return $this->repository->destroy($product->id);
    }
}
