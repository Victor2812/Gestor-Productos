<div class="d-flex justify-content-around align-item-center">
    <div>
        <a href="{{route('categorias.show',['categoria' => $model])}}">
            <i class="bi bi-eye"></i>
        </a>
    </div>
    <div>
        <a href="{{route('categorias.edit',['categoria' => $model])}}">
            <i class="bi bi-pencil"></i>
        </a>
    </div>
    <div>
        <a href="{{route('categorias.destroy',['categoria' => $model])}}">
            <i class="bi bi-trash3"></i>
        </a>
    </div>
</div>
