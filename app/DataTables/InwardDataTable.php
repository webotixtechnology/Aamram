<?php

namespace App\DataTables;

use App\Models\inward;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class InwardDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('ID')
            ->editColumn('PurchaseDate', function ($row) {
                return \Carbon\Carbon::parse($row->PurchaseDate)->format('d-m-Y'); // Example: formatting the Purchase Date
            })
            ->editColumn('billdate', function ($row) {
                return \Carbon\Carbon::parse($row->billdate)->format('d-m-Y'); // Formatting Bill Date
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.inward.edit',
                    'delete' => 'admin.inward.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['action', 'PurchaseDate', 'billdate']); // Mark these columns as raw for special formatting
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(inward $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('inward-table')
            ->columns($this->getColumns())
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
        return [
            Column::make('ID')->title(__('ID'))->orderable(true)->searchable(true),
            Column::make('Bill_No')->title(__('Bill No'))->orderable(true)->searchable(true),
            Column::make('PurchaseDate')->title(__('Purchase Date'))->orderable(true)->searchable(true),
            Column::make('billdate')->title(__('Bill Date'))->orderable(true)->searchable(false),
            Column::computed('action')
                ->title(__('Action'))
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Inward_' . date('YmdHis');
    }
}
