<div class="d-flex justify-content-around align-item-center">
    <div>
        <a href="{{route('personas.show',['persona' => $model])}}">
            <i class="bi bi-eye"></i>
        </a>
    </div>
    <div>
        <a href="{{route('personas.edit',['persona' => $model])}}">
            <i class="bi bi-pencil"></i>
        </a>
    </div>
    <div>
        <a href="{{route('personas.destroy',['persona' => $model])}}">
            <i class="bi bi-trash3"></i>
        </a>
    </div>
</div>
