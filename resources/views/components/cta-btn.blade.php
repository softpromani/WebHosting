<div class="w-100">
    <div class="row d-flex justify-content-evenly">
        @php
            $colors = ['primary', 'success', 'info', 'warning', 'secondary', 'danger', 'dark', 'light'];
        @endphp
        <div class="col-md-12 d-flex gap-2">
            @foreach ($links as $key=>$link)
                @php
                    $colorClass = $colors[$loop->index % count($colors)];
                @endphp 
                <a href="{{ url($link) }}" class="btn btn-{{ $colorClass }}">{{ucfirst(str_replace('_',' ',$key))}}</a>
            @endforeach
        </div>
    </div>
</div>