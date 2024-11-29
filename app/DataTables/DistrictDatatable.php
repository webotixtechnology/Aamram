<?php

namespace App\DataTables;

use App\Models\District;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class DistrictDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('district_id')
            ->editColumn('date', function ($row) {
                return \Carbon\Carbon::parse($row->date)->format('d-m-Y'); // Example: formatting the date
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.district.edit',
                    'delete' => 'admin.district.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['action', 'date']); // Adjust rawColumns if you need to make other columns raw (e.g., action)
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(District $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('district-table')
            ->addColumn(['data' => 'district_name', 'title' => __('District Name'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'country_id', 'title' => __('Country'), 'orderable' => true, 'searchable' => true]) // You can join with country name here if needed
            ->addColumn(['data' => 'state_id', 'title' => __('State'), 'orderable' => true, 'searchable' => true]) // Similar as country_id
            ->addColumn(['data' => 'date', 'title' => __('Date'), 'orderable' => true, 'searchable' => false])
            ->addColumn(['data' => 'action', 'title' => __('Action'), 'orderable' => false, 'searchable' => false])
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters([
                'language' => [
                    'emptyTable' => 'No Records Found',
                    'infoEmpty' => '',
                    'zeroRecords' => 'No Records Found',
                ],
                'drawCallback' => 'function(settings) {
                    if (settings._iRecordsDisplay === 0) {
                        $(settings.nTableWrapper).find(".dataTables_paginate").hide();
                    } else {
                        $(settings.nTableWrapper).find(".dataTables_paginate").show();
                    }
                    feather.replace();
                }',
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'District_' . date('YmdHis');
    }
}
