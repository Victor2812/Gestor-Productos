<div class="d-flex justify-content-around align-item-center">
    <div>
        <a href="{{route('pedidos.show',$model)}}">
            <i class="bi bi-eye"></i>
        </a>
    </div>
    <div>
        <a href="{{route('pedidos.edit',$model)}}">
            <i class="bi bi-pencil"></i>
        </a>
    </div>
    <div>
        <a href="{{route('pedidos.destroy',$model)}}">
            <i class="bi bi-trash3"></i>
        </a>
    </div>
</div>
