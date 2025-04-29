<div>
    <div class="row d-flex justify-content-evenly">
        @foreach ($links as $key=>$link)  
            <div class="col-lg-6">
                    <a href="{{ url($link) }}" class="btn btn-primary">{{ucfirst(str_replace('_',' ',$key))}}</a>
            </div>
        @endforeach
    </div>
</div>