        <!-- start section -->
        <section class="overflow-hidden big-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <div class="outside-box-right-25 xs-outside-box-right-0">
                            <div class="swiper dark swiper-width-auto" data-slider-options='{ "slidesPerView": "auto", "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "spaceBetween": 80 }, "992": {"spaceBetween": 50 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    @forelse($slider['image'] as $index => $image)
                                    @php
                                        $index = $index % 2 == 0;
                                    @endphp
                                    @if($index)
                                        <div class="swiper-slide">
                                            <img src="{{ cockpitImage($image) ?? 'https://fakeimg.movexa.id/430x510/eeeeee/cccccc' }}" class="md-h-400px sm-h-250px" alt="" />
                                        </div>
                                    @else
                                        <div class="swiper-slide mt-60px sm-mt-0">
                                            <img src="{{ cockpitImage($image) ?? 'https://fakeimg.movexa.id/635x540/eeeeee/cccccc' }}" class="md-h-400px sm-h-250px" alt="" />
                                        </div>
                                    @endif
                                    @empty
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide"> 
                                        <img src="https://fakeimg.movexa.id/430x510/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" /> 
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide mt-60px sm-mt-0">
                                        <img src="https://fakeimg.movexa.id/635x540/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide">
                                        <img src="https://fakeimg.movexa.id/430x510/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide mt-60px sm-mt-0">
                                        <img src="https://fakeimg.movexa.id/635x540/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" />
                                    </div>
                                    <!-- end content carousal item --> 
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide"> 
                                        <img src="https://fakeimg.movexa.id/430x510/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" /> 
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item --> 
                                    <div class="swiper-slide mt-60px sm-mt-0">
                                        <img src="https://fakeimg.movexa.id/635x540/eeeeee/cccccc" class="md-h-400px sm-h-250px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->

                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- start slider pagination -->
                        <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                        <!-- end slider pagination --> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->