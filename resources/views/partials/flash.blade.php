@if(flash()->message)
    <div class="alert alert-{{ flash()->class }}">
        {{ flash()->message }}
    </div>
@endif
