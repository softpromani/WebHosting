<div class="w-100">
    <div class="row d-flex justify-content-evenly">
        @foreach ($links as $key=>$link)  
            <div class="col-6 mb-2">
                    <a href="{{ url($link) }}" class="btn btn-primary">{{ucfirst(str_replace('_',' ',$key))}}</a>
            </div>
        @endforeach
    </div>
</div>