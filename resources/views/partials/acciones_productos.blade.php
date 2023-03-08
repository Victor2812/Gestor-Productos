<div class="d-flex justify-content-start align-item-center">
    <div>
        <a href="{{route('productos.show',['producto' => $model])}}">Ver</a>
    </div>
    <div>
        <a href="{{route('productos.edit',['producto' => $model])}}">Editar</a>
    </div>
    <div>
        <a href="{{route('productos.destroy',['producto' => $model])}}">Borrar</a>
    </div>
</div>
