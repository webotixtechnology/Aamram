<?php

namespace App\DataTables;

use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ProductDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->editColumn('created', function ($row) {
                return \Carbon\Carbon::parse($row->created)->format('d-m-Y'); // Example: formatting the created date
            })
            ->editColumn('action', function ($row) {
                return view('admin.inc.action', [
                    'edit'   => 'admin.product.edit',
                    'delete' => 'admin.product.destroy',
                    'data'   => $row
                ]);
            })
            ->rawColumns(['action', 'created']); // Adjust rawColumns if you need to make other columns raw
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('product-table')
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
            Column::make('id')->title(__('ID'))->orderable(true)->searchable(true),
            Column::make('product_name')->title(__('Product Name'))->orderable(true)->searchable(true),
            Column::make('product_code')->title(__('Product Code'))->orderable(true)->searchable(true),
            Column::make('hsn_no')->title(__('HSN No'))->orderable(true)->searchable(true),
            Column::make('cgst')->title(__('CGST'))->orderable(true)->searchable(false),
            Column::make('sgst')->title(__('SGST'))->orderable(true)->searchable(false),
            Column::make('igst')->title(__('IGST'))->orderable(true)->searchable(false),
            Column::make('created')->title(__('Created Date'))->orderable(true)->searchable(false),
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
        return 'Product_' . date('YmdHis');
    }
}






// <?php

// namespace App\DataTables;

// use App\Models\Product;
// use Yajra\DataTables\Html\Button;
// use Yajra\DataTables\Html\Column;
// use Yajra\DataTables\EloquentDataTable;
// use Yajra\DataTables\Services\DataTable;
// use Yajra\DataTables\Html\Builder as HtmlBuilder;
// use Illuminate\Database\Eloquent\Builder as QueryBuilder;

// class ProductDataTable extends DataTable
// {
//     /**
//      * Build the DataTable class.
//      *
//      * @param QueryBuilder $query Results from query() method.
//      */
//     public function dataTable(QueryBuilder $query): EloquentDataTable
//     {
//         return (new EloquentDataTable($query))
//             ->setRowId('id')
//             ->editColumn('created', function ($row) {
//                 return \Carbon\Carbon::parse($row->created)->format('d-m-Y'); // Example: formatting the created date
//             })
//             ->editColumn('dist_price', function ($row) {
//                 return '<span id="updateprice_'.$row->id.'">'.$row->dist_price.'</span>
//                         <span style="float:right" id="updatebtn1_'.$row->id.'">
//                             <i class="fa fa-pencil" onclick="getprice('.$row->id.', '.$row->dist_price.');"></i>
//                         </span>';
//             })
//             ->editColumn('bottom_price', function ($row) {
//                 return '<span id="updatebprice_'.$row->id.'">'.$row->bottom_price.'</span>
//                         <span style="float:right" id="updatebtn_'.$row->id.'">
//                             <i class="fa fa-pencil" onclick="getbottomprice('.$row->id.', '.$row->bottom_price.');"></i>
//                         </span>';
//             })
//             ->editColumn('stock', function ($row) {
//                 return '<span id="updatebst_'.$row->id.'">'.$row->stock.'</span>
//                         <span style="float:right" id="updatebtnst_'.$row->id.'">
//                             <i class="fa fa-pencil" onclick="getstock('.$row->id.', '.$row->stock.');"></i>
//                         </span>';
//             })
//             ->editColumn('action', function ($row) {
//                 return view('admin.inc.action', [
//                     'edit'   => 'admin.product.edit',
//                     'delete' => 'admin.product.destroy',
//                     'data'   => $row
//                 ]);
//             })
//             ->editColumn('img', function ($row) {
//                 return '<img class="thumb-image" src="'.asset('upload/temp/'.$row->img).'" width="50px;" />';
//             })
//             ->addColumn('checkbox', function ($row) {
//                 return '<input type="checkbox" class="checkboxes" name="check_list" value="'.$row->id.'" />';
//             })
//             ->rawColumns(['action', 'dist_price', 'bottom_price', 'stock', 'img', 'checkbox']); // Mark columns as raw for HTML content
//     }

//     /**
//      * Get the query source of dataTable.
//      */
//     public function query(Product $model): QueryBuilder
//     {
//         return $model->newQuery();
//     }

//     /**
//      * Optional method if you want to use the HTML builder.
//      */
//     public function html(): HtmlBuilder
//     {
//         return $this->builder()
//             ->setTableId('product-table')
//             ->columns($this->getColumns())
//             ->minifiedAjax()
//             ->orderBy(1)
//             ->selectStyleSingle()
//             ->parameters([
//                 'language' => [
//                     'emptyTable' => 'No Records Found',
//                     'infoEmpty' => '',
//                     'zeroRecords' => 'No Records Found',
//                 ],
//                 'drawCallback' => 'function(settings) {
//                     if (settings._iRecordsDisplay === 0) {
//                         $(settings.nTableWrapper).find(".dataTables_paginate").hide();
//                     } else {
//                         $(settings.nTableWrapper).find(".dataTables_paginate").show();
//                     }
//                     feather.replace();
//                 }',
//             ]);
//     }

//     /**
//      * Get the dataTable columns definition.
//      */
//     public function getColumns(): array
//     {
//         return [
//             Column::make('checkbox')->title('Select')->orderable(false)->searchable(false),
//             Column::make('id')->title(__('ID'))->orderable(true)->searchable(true),
//             Column::make('created')->title(__('Created Date'))->orderable(true)->searchable(false),
//             Column::make('product_name')->title(__('Product Name'))->orderable(true)->searchable(true),
//             Column::make('hsn_no')->title(__('HSN No'))->orderable(true)->searchable(true),
//            

//             Column::make('bottom_price')->title(__('Bottom Price'))->orderable(true)->searchable(false),
//             Column::make('stock')->title(__('Stock'))->orderable(true)->searchable(false),
//             Column::make('img')->title(__('Image'))->orderable(false)->searchable(false),
//             Column::computed('action')
//                 ->title(__('Action'))
//                 ->exportable(false)
//                 ->printable(false)
//                 ->orderable(false)
//                 ->searchable(false)
//                 ->addClass('text-center'),
//         ];
//     }

//     /**
//      * Get the filename for export.
//      */
//     protected function filename(): string
//     {
//         return 'Product_' . date('YmdHis');
//     }
// }

