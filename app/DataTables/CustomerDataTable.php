<?php

namespace App\DataTables;

use App\Models\Customer;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class CustomerDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('customer_id')
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.customer.edit',
                    'delete' => 'admin.customer.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['action']); // Add any additional columns requiring raw HTML processing
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Customer $model): QueryBuilder
    {
        return $model->newQuery()->with(['country', 'state', 'district']); // Include relationships for better display
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('customer-table')
            ->addColumn(['data' => 'customer_name', 'title' => __('Customer Name'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'company_name', 'title' => __('Company Name'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'mobile_no', 'title' => __('Mobile No'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'email_id', 'title' => __('Email'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'city_name', 'title' => __('City'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'state_id', 'title' => __('State'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'country_id', 'title' => __('Country'), 'orderable' => true, 'searchable' => true])
            ->addColumn(['data' => 'district_id', 'title' => __('District'), 'orderable' => true, 'searchable' => true])
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
        return 'Customer_' . date('YmdHis');
    }
}
