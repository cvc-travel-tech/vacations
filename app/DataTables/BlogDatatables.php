<?php

namespace App\DataTables;

use App\Blog;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class BlogDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->editColumn('title', '<a href="{{route("admin.Blog.edit" , $id)}}"> {{$title}}</a>')
            ->addColumn('action', '<a href="{{route("admin.Blog.delete",$id)}}"
                                                class="btn btn-danger">
                                                DELETE
                                                </a> ')
            ->rawColumns(['title', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Destination $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Blog $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('blog-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(2)

            ->parameters([
                'responsive' => true,
                'autoWidth' => false,
                // 'serverSide' =>  false

                // 'lengthMenu' => [
                //     [10, 25, 50, -1],
                //     ['10 rows', '25 rows', '50 rows', 'Show all']
                // ],

            ])
            ->lengthMenu([
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ])

            ->buttons(
                Button::make('create'),
                Button::make(['export']),

                Button::make('print'),
                Button::make('reload'),
                Button::make('pageLength')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::computed('action')
            //     ->exportable(false)
            //     ->printable(false)
            //     ->width(60)
            //     ->addClass('text-center'),
            Column::make('id'),
            Column::make('title'),
            // Column::make('description'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::make('action'),


        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'BlogDatatables_' . date('YmdHis');
    }
}
