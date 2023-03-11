<div class="d-flex justify-content-around align-item-center">
    <div>
        <a href="{{route('productos.show',['producto' => $model])}}">
            <i class="bi bi-eye"></i>
        </a>
    </div>
    <div>
        <a href="{{route('productos.edit',['producto' => $model])}}">
            <i class="bi bi-pencil"></i>
        </a>
    </div>
    <div>
        <a href="{{route('productos.destroy',['producto' => $model])}}">
            <i class="bi bi-trash3"></i>
        </a>
    </div>
</div>
