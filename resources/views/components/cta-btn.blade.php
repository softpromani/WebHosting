<div>
    <div class="row d-flex justify-content-evenly">
        @forelse ($links as $key=>$link)  
            <div class="col-lg-3 col-md-4 col-6">
                <div class="cta-btn">
                    <a href="{{ url($link) }}" class="btn btn-parimary">{{(str_replace('_',' ',$key))}}</a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>