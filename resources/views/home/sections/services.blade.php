<section class="pb-0">
    <div class="container">
        <div class="row mb-7 sm-mb-50px">
            <div class="col-12">
                <span class="text-black fw-700 text-uppercase mb-10px d-block fs-30">
                    {{ app()->getLocale() == 'en' ? 'Services' : "Layanan" }}
                </span>
                <div class="position-relative">
                    <div class="separator-line-1px w-100 d-block bg-black"></div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 mb-7 justify-content-center"
            data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
        @foreach($services as $service)
            <div class="col icon-with-text-style-07 md-mb-30px mb-3">
                <div class="hover-box light-hover feature-box bg-cover bg-center h-100 overflow-hidden p-13 xxl-p-10 xl-p-8 text-start shadow"
                    style="background-image: url('{{ cockpitImage($service['image']) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <a href="#"
                        class="ms-0 text-white text-uppercase fw-800 mb-50 lg-mb-30 fs-40 d-inline-block">{{ $service['title'] }}</a>
                    <p class="d-block mb-0 w-90 md-w-100 mt-22 text-white fw-600">
                        {{ $service['description'] }}
                    </p>
                    <div class="box-overlay bg-base-color z-index-minus-2"></div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
