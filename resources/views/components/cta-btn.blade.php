<div class="w-100">
    <div class="row d-flex justify-content-evenly">
        <div class="col-md-12 d-flex gap-2">
            @foreach ($links as $key=>$link) 
                <a href="{{ url($link) }}" class="btn btn-primary">{{ucfirst(str_replace('_',' ',$key))}}</a>
            @endforeach
        </div>
    </div>
</div>