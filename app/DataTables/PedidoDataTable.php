<?php
namespace App\DataTables;

use App\Models\Pedidos;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PedidoDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
        ->eloquent($query)
        ->addColumn('acciones',function($model){
            return view('partials.acciones_pedidos',compact('model'));
        });
    }

    public function query(Pedidos $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('pedidos-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload'),
                    ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('estado'),
            Column::make('fecha_reserva'),
            Column::make('fecha_recogida'),
            Column::make('importe_total'),
            Column::make('persona_id'),
            Column::make('acciones'),
        ];
    }

    protected function filename(): string
    {
        return 'Pedidos_'.date('YmdHis');
    }
}
