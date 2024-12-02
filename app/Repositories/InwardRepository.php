<?php

namespace App\Repositories;

use App\Models\inward;
use App\Models\inward_details;
use app\Models\Product;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class InwardRepository extends BaseRepository
{
    /**
     * Define the model class for the repository.
     */
    public function model()
    {
        return inward::class;
    }

    /**
     * Store a new inward record along with its details in the database.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $inward = [
                'user_id'    => Auth::id(),
                'updateduser' => Auth::id(), // assuming it's the logged-in user
                'PurchaseDate' => $request->PurchaseDate,
                'billdate'    => $request->billdate,
                'batch_id'    => $request->batch_id,
                'Bill_No'     => $request->Bill_No,
                'update_id'   => Auth::id(),
                'created_at'  => now()->format('Y-m-d'),
                'updated_at'  => now()->format('Y-m-d'),
            ];

            // Insert inward record and get the inserted ID
            $inwardId = inward::insertGetId($inward);

            $cnt = $request->cnt; // Number of inward details
            for ($i = 1; $i <= $cnt; $i++) {
                $inwardDetailData = [
                    'pid'        => $inwardId, 
                    'types'      => $request->{"types{$i}"},
                    'services'   => $request->{"services{$i}"},
                    'size'       => $request->{"size{$i}"},
                    'stage'      => $request->{"stage{$i}"},
                    'Quantity'   => $request->{"Quantity{$i}"},
                    'update_id'  => Auth::id(),
                    'created_at' => now()->format('Y-m-d'),
                    'updated_at' => now()->format('Y-m-d'),
                ];

                // Insert inward detail record
                inward_details::create($inwardDetailData);
            }

            DB::commit();
            return redirect()->route('inward.index')->with('success', __('Inward Created Successfully'));
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Update an inward record and its details.
     */
    public function update(array $attributes, $id)
    {
        DB::beginTransaction();
        try {
            // Find the inward record
            $inward = $this->model->findOrFail($id);

            // Update inward record
            $inward->update($attributes);

            // Optionally handle inward details update (if needed)
            if (isset($attributes['details']) && is_array($attributes['details'])) {
                foreach ($attributes['details'] as $detail) {
                    if (isset($detail['id'])) {
                        // Update existing inward detail
                        $inwardDetail = $inward->details()->find($detail['id']);
                        if ($inwardDetail) {
                            $inwardDetail->update($detail);
                        }
                    } else {
                        // Create new inward detail
                        $inward->details()->create($detail);
                    }
                }
            }

            DB::commit();
            return redirect()->route('inward.index')->with('success', __('Inward Updated Successfully'));
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Delete an inward record and its associated inward details.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $inward = $this->model->findOrFail($id);

            // Delete associated inward details
            inward_details::where('pid', $inward->ID)->delete();

            // Delete the inward record
            $inward->delete();

            DB::commit();
            return redirect()->back()->with('success', __('Inward Deleted Successfully'));
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
