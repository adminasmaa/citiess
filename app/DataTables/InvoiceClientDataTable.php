<?php

namespace App\DataTables;
use App\Models\Client;

use App\Helpers\DTHelper;
use App\Models\BasicInvoice;
use App\Models\InvoiceClient;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InvoiceClientDataTable extends DataTable
{
    private $crudName = 'invoicesAll';

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

                $actions .= DTHelper::dtShowButton(route('dashboard.invoicesAll.show',$model->id), trans('site.edit'), $this->getPermissions()['update']);


                return $actions;
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Client $model): QueryBuilder
    {
        return $model->newQuery();
    }
    public function count()
    {
        return Client::all()->count();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('invoiceclient-table')
                    ->columns($this->getColumns())
                    // ->minifiedAjax()
                     ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
            ->buttons(
                // Button::make('create')->text('<a href="{{url("dashboard/invoicesbase/create")}}"> <i class="fa fa-plus"></i> ' . trans('site.add') . '</a>'),
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
            Column::make('name')->title(trans('site.client_name')),
            Column::computed('action')->title(trans('site.invoice_list')),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'InvoiceClient_' . date('YmdHis');
    }
}
