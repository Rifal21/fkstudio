<section>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @forelse ($clients as $item)
            <div class="col client-box md-mb-35px text-center" title="{{ $item['name'] }}">
                <a href="{{ $item['url'] }}"><img src="{{ cockpitImage($item['logo']) }}" class="h-35px"
                        alt=""></a>
            </div>
            @empty
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-walmart.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-logitech.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-monday.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box sm-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-google.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-paypal.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            @endforelse
        </div>
    </div>
</section>
