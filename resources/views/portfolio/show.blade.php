<x-main title="Portfolio">
    <section class="text-center py-5 container-fluid p-0 overflow-hidden">
        <!-- Banner -->
        <img src="{{ cockpitImage($folio['banner_image']) }}" class="img-fluid mb-4 w-100" alt="Banner">

        <!-- Event Info -->
        <div class="row d-flex justify-content-center text-center mt-4">
            <div class="col-md-2 col-6 mb-3 border-end">
                <strong>Event Name</strong><br><span class="text-black fw-bold">{{ $folio['Name'] }}</span>
            </div>
            <div class="col-md-2 col-6 mb-3 border-end">
                <strong>Services Provided</strong><br><span class="text-black fw-bold">{{ $folio['service'] }}</span>
            </div>
            <div class="col-md-2 col-6 mb-3 border-end">
                <strong>Country / Event Location</strong><br><span class="text-black fw-bold">{{ $folio['place'] }}</span>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <strong>Client / Partner</strong><br><span class="text-black fw-bold">{{ $folio['client'] }}</span>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 p-5">
        <!-- Logo -->
        <div class="d-flex justify-content-center gap-4 mb-4">
            <img src="{{ cockpitImage($folio['logo']) }}" class="img-fluid" style="max-height: 500px;" alt="Logo">
        </div>

        <!-- Description -->
        <div class="row" style="text-align: justify;">
            {!! $folio['text'] !!}
        </div>

<div class="row mt-5">
    @if(!empty($folio['additional_text']) && count($folio['additional_text']) > 0)
        @foreach ($folio['additional_text'] as $item)
            <div class="col-lg-6 fw-bold text-black">
                {!! $item !!}
            </div>
        @endforeach
    @else
        <div class="col-12 text-muted">
            
        </div>
    @endif
</div>

        <!-- Gallery -->
        <div class="row mt-5 g-3">
            @if(!empty($folio['additional_image']) && count($folio['additional_image']) > 0)
                @foreach ($folio['additional_image'] as $image)
                    <div class="col-md-4 col-sm-6 col-lg-12" style="height: 500px; overflow: hidden; width: 100%;">
                        <img src="{{ cockpitImage($image) }}" class="img-fluid rounded shadow w-100 h-100"
                            style="object-fit: cover; object-position: center;" alt="Gallery Image">
                    </div>
                @endforeach
            @else
                <div class="col-12 text-muted">
                    
                </div>
            @endif
        </div>

        {{-- <div class="row mt-5 g-3">
            @foreach ($folio['additional_image'] as $image)
                <div class="col-md-4 col-sm-6 col-lg-12" style="height: 500px; overflow: hidden; width: 100%;">
                    <img src="{{ cockpitImage($image) }}" class="img-fluid rounded shadow w-100 h-100"
                        style="object-fit: cover; object-position: center;" alt="Gallery Image">
                </div>
            @endforeach
        </div> --}}
    </section>

<!-- SLIDER -->
<section class="py-5">
    <div class="container-fluid">
        <div class="swiper portfolio-slider"
            data-slider-options='{ 
                "slidesPerView": 2, 
                "spaceBetween": 20,
                "loop": true,
                "effect": "fade",
                "autoplay": { "delay": 3000, "disableOnInteraction": false },
                "pagination": { "el": ".swiper-pagination", "clickable": true },
                "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" },
                "breakpoints": { "0": { "slidesPerView": 1 }, "768": { "slidesPerView": 2 }, "1200": { "slidesPerView": 1 } }
            }'>
            
            <div class="swiper-wrapper">
                @if(!empty($folio['slider']) && count($folio['slider']) > 0)
                    @foreach ($folio['slider'] as $item)
                        <div class="swiper-slide">
                            <div style="background-image: url('{{ cockpitImage($item) }}');
                                        background-size: cover;
                                        background-position: center; width: 100%;
                                        height: 1000px;">
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div style="background-image: url('https://fakeimg.movexa.id/800x400/eeeeee/cccccc?text=Slider+Kosong');
                                    background-size: cover;
                                    background-position: center;
                                    height: 400px; border-radius:10px;">
                            <div class="d-flex align-items-center justify-content-center h-100 text-muted fw-bold">
                               
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Pagination & Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

</x-main>