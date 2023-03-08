<div class="d-flex justify-content-start align-item-center">
    <div>
        <a href="{{route('personas.show',['persona' => $model])}}">Ver</a>
    </div>
    <div>
        <a href="{{route('personas.edit',['persona' => $model])}}">Editar</a>
    </div>
    <div>
        <a href="{{route('personas.destroy',['persona' => $model])}}">Borrar</a>
    </div>
</div>
