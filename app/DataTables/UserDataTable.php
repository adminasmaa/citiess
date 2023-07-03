<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    private $crudName = 'users';

    private function getRoutes()
    {
        return [
            'show' => "dashboard.$this->crudName.show",

            'update' => "dashboard.$this->crudName.edit",
            'delete' => "dashboard.$this->crudName.destroy",
            'block' => "dashboard.$this->crudName.block",
        ];
    }

    private function getPermissions()
    {
        return [
            'update' => 'update_' . $this->crudName,
            'delete' => 'delete_' . $this->crudName,
            'create' => 'create_' . $this->crudName
        ];
    }

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
            ->editColumn('created_at', function ($model) {
                return (!empty($model->created_at)) ? $model->created_at->format('d/m/Y') : '';
            }) ->editColumn('address', function ($model) {
                return (!empty($model->roles)) ? $model->roles->first()->name ?? '' : '';
            })->editColumn('status', function ($model) {

                if($model->status==1){

                    return "Active";
                }else{
                    return "NOActive";

                }
            })
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                $actions = '';

                $actions .= DTHelper::dtEditButton(route($this->getRoutes()['update'], $model->id), trans('site.edit'), $this->getPermissions()['update']);
                $actions .= DTHelper::dtDeleteButton(route($this->getRoutes()['delete'], $model->id), trans('site.delete'), $this->getPermissions()['delete'], $model->id);


                return $actions;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UsersDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->where('id', '!=', 1)->newQuery();
    }

    public function count()
    {
        return User::all()->count();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('user-table')
            ->columns($this->getColumns())
            // ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons(
                Button::make('create')->text('<i class="fa fa-plus"></i> ' . trans('site.add'))->addClass('btn btn-primary'),
                Button::make('csv')->text('<i class="fa fa-download"></i> ' . trans('site.export'))->addClass('btn btn-danger'),
                Button::make('print')->text('<i class="fa fa-print"></i> ' . trans('site.print'))->addClass('btn btn-success'),
                Button::make('reset')->text('<i class="fa fa-undo"></i> ' . trans('site.reset'))->addClass('btn btn-warning'),
                Button::make('reload')->text('<i class="fa fa-refresh"></i> ' . trans('site.reload'))->addClass('btn btn-info'),

            )->language([
                "url" => app()->getLocale() == 'ar' ? "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json":"//cdn.datatables.net/plug-ins/1.13.4/i18n/en-GB.json"
                ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id')->data('DT_RowIndex')->name('id')->title('#'),
            Column::make('name')->title(trans('site.name')),

            Column::make('email')->title(trans('site.email')),
            Column::make('phone')->title(trans('site.phone')),
            Column::make('status')->title(trans('site.status')),
            Column::make('address')->title(trans('site.role')),
            Column::make('created_at')->title(trans('site.created_at')),
            Column::computed('action')
                ->width(60)->trans(trans('site.actions'))->title(trans('site.actions'))
                ->addClass('text-center')
                ->orderable(true)
                ->searchable(true)
                ->exportable(true)
                ->printable(true),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'User_' . date('YmdHis');
    }

    public function excel()
    {
        // TODO: Implement excel() method.
    }

    public function csv()
    {
        // TODO: Implement csv() method.
    }

    public function pdf()
    {
        // TODO: Implement pdf() method.
    }
}
