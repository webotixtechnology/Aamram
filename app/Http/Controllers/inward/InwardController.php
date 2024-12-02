<?php

namespace App\Http\Controllers\inward;

use App\Models\inward;
use App\Models\inward_details;
use app\Models\Product;
use Illuminate\Http\Request;
use App\DataTables\InwardDataTable;
use App\Http\Controllers\Controller;
use App\Repositories\InwardRepository;

class InwardController extends Controller
{
    protected $repository;

    public function __construct(InwardRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the inward records.
     *
     * @param InwardDataTable $dataTable
     * @return \Illuminate\View\View
     */
    public function index(InwardDataTable $dataTable)
    {
        return $dataTable->render('inward.index');
    }

    /**
     * Show the form for creating a new inward record.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('inward.create',[
        'products' => $this->getproducts(),
        ]);
    }

    public function getproducts()
    {
        return \App\Models\Product::all()->pluck('id', 'product_name');
    }

    /**
     * Store a newly created inward record and its details.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return $this->repository->store($request);
    }



    /**
     * Display the specified inward record along with its details.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $inward = inward::with('details')->findOrFail($id);
        return view('inward.show', compact('inward'));
    }

    /**
     * Show the form for editing the inward record.
     *
     * @param Inward $inward
     * @return \Illuminate\View\View
     */
    public function edit(inward $inward)
    {
        $inward->load('details');
        return view('inward.edit', compact('inward'));
    }

    /**
     * Update the specified inward record and its details.
     *
     * @param Request $request
     * @param Inward $inward
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, inward $inward)
    {
        return $this->repository->update($request->all(), $inward->ID);
    }

    /**
     * Remove the specified inward record and its details from storage.
     *
     * @param Request $request
     * @param Inward $inward
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, inward $inward)
    {
        return $this->repository->destroy($inward->ID);
    }
}
