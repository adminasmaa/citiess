<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\Section;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SectionsDataTable extends DataTable
{
    private $crudName = 'sections';

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
     * Get the query source of dataTable.
     */
    public function query(Section $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function count()
    {
        return Section::all()->count();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('sections-table')
            ->columns($this->getColumns())
            // ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons(
                Button::make('create')->text('<i class="fa fa-plus"></i> ' . trans('site.add')),
                Button::make('csv')->text('<i class="fa fa-download"></i> ' . trans('site.export')),
                Button::make('print')->text('<i class="fa fa-print"></i> ' . trans('site.print')),
                Button::make('reset')->text('<i class="fa fa-undo"></i> ' . trans('site.reset')),
                Button::make('reload')->text('<i class="fa fa-refresh"></i> ' . trans('site.reload')),

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

            Column::make('section')->title(trans('site.section')),
            Column::make('position')->title(trans('site.position')),
            Column::make('workplace')->title(trans('site.workplace')),
            Column::make('contract')->title(trans('site.contract')),
            Column::make('status')->title(trans('site.status')),


            Column::make('created_at')->title(trans('site.created_at')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)->trans(trans('site.actions'))->title(trans('site.actions'))
                ->addClass('text-center')
            ,
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Sections_' . date('YmdHis');
    }
}
