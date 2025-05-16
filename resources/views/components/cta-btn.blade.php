<div class="w-100">
    <div class="row d-flex justify-content-evenly">
        @php
            $colors = ['light', 'warning', 'info', 'primary', 'secondary', 'danger', 'dark', 'success'];
        @endphp
        <div class="col-md-12 d-flex gap-2">
            @foreach ($links as $key=>$link)
                @php
                    $colorClass = $colors[$loop->index % count($colors)];
                @endphp 
                <a href="{{ url($link) }}" class="btn btn-outline-{{ $colorClass }}">{{ucfirst(str_replace('_',' ',$key))}}</a>
            @endforeach
        </div>
    </div>
</div>