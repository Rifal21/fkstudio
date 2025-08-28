        <!-- start section -->
        <section class="overflow-hidden bg-very-light-gray position-relative">
            <div class="container">
                <div class="row align-items-center mb-5 sm-mb-30px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-lg-5 md-mb-30px"> 
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-0">{{ $servicehome['title'] }}</h3>
                    </div> 
                    <div class="col-lg-4 offset-xl-1 last-paragraph-no-margin md-mb-30px"> 
                        <p>{{ $servicehome['desc'] }}</p>
                    </div> 
                    <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right"></i></div> 
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="row align-items-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-12">
                        <div class="outside-box-right-20 sm-outside-box-right-0">
                            <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    @foreach($serviceitem as $item)
                                    <!-- start slider item --> 
                                    <div class="swiper-slide">
                                        <!-- start services box style --> 
                                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                            <div class="position-relative">
                                                <a href="{{ route('service.show', $item['slug'])}}"><img src="{{ cockpitImage($item['image']) ?? 'https://fakeimg.movexa.id/600x440/eeeeee/cccccc?text=image'}}" alt="" style="max-width: 600px; max-height: 350px; object-fit: cover;"></a>
                                                <a href="#" class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">{{ $item['category']}}</a>
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                                                    <a href="{{ route('service.show', $item['slug'])}}" class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">{{$item['title']}}</a>
                                                    <p>{{$item['description']}}</p> 
                                                </div> 
                                                <div class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                    <a href="{{ route('service.show', $item['slug'])}}" class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                        <span>
                                                            <span class="btn-text">Explore services</span>
                                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                        </span> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end services box style -->
                                    </div>
                                    @endforeach
                                    <!-- end slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </section>
        <!-- end section -->