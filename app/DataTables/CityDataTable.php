<?php

namespace App\DataTables;

use App\Models\City;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class CityDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('city_id')
            ->editColumn('date', function ($row) {
                return \Carbon\Carbon::parse($row->date)->format('d-m-Y'); // Example: formatting the date
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.city.edit',
                    'delete' => 'admin.city.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['action', 'date']); // Adjust rawColumns if needed
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(City $model): QueryBuilder
    {
        return $model->newQuery()->with(['country', 'state', 'district']); // Include relationships for country, state, and district
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('city-table')
            ->addColumn(['data' => 'name', 'title' => __('City'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'district_id', 'title' => __('District'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'state_id', 'title' => __('State'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'country_id', 'title' => __('Country'), 'orderable' => true, 'searchable' => true])
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
        return 'City_' . date('YmdHis');
    }
}
