<div class="d-flex justify-content-start align-item-center">
    <div>
        <a href="{{route('categorias.show',['categoria' => $model])}}">Ver</a>
    </div>
    <div>
        <a href="{{route('categorias.edit',['categoria' => $model])}}">Editar</a>
    </div>
    <div>
        <a href="{{route('categorias.destroy',['categoria' => $model])}}">Borrar</a>
    </div>
</div>
