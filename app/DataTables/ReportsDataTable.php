<?php

namespace App\DataTables;

use App\Helpers\DTHelper;
use App\Models\Report;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReportsDataTable extends DataTable
{


    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($model) {
                return (!empty($model->created_at)) ? $model->created_at->format('d/m/Y') : '';
            })
            ->editColumn('zone_id', function ($model) {
                return (!empty($model->zone_id)) ? $model->zone->name : '';
            })
            ->editColumn('block_id', function ($model) {
                return (!empty($model->block_id)) ? $model->block->name : '';
            })
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                $actions = '';


                return $actions;
            })->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\UsersDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Unit $model, Request $request)
    {
        if ($request->status) {

            return $model->where('status', $request->status)->newQuery();

        } else {
            return $model->newQuery();
        }

    }

    public function count()
    {
        return Unit::all()->count();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('reports-table')
            ->columns($this->getColumns())
            // ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons(
                Button::make('excel')->text('<i class="fa fa-download"></i> ' . trans('site.excel')),
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

        $lan = app()->getLocale();
        if ($this->request()->has('status') && $this->request()->get('status') == 'Empty Unit') {
            return [
                Column::make('id')->data('DT_RowIndex')->name('id')->title('#'),
                Column::make('zone_id')->title(trans('site.zone_name')),
                Column::make('block_id')->title(trans('site.block_name')),

                Column::make('name_'.$lan)->title(trans('site.unit_name')),

            ];
        } elseif ($this->request()->has('status')) {




            return [

                Column::make('id')->data('DT_RowIndex')->name('id')->title('#'),
                Column::make('zone_id')->title(trans('site.zone_name')),
                Column::make('block_id')->title(trans('site.block_name')),

                Column::make('name_'.$lan)->title(trans('site.unit_name')),
                Column::make('created_at')->title(trans('site.date')),


            ];

        }else{
            return [
            Column::make('id')->data('DT_RowIndex')->name('id')->title('#'),
                Column::make('zone_id')->title(trans('site.zone_name')),
                Column::make('block_id')->title(trans('site.block_name')),

                Column::make('name_'.$lan)->title(trans('site.unit_name')),
                Column::make('status')->title(trans('site.status')),

                Column::make('created_at')->title(trans('site.date')),
            ];
        }
    }


/**
 * Get the filename for export.
 */
protected
function filename(): string
{
    return 'Reports_' . date('YmdHis');
}
}
