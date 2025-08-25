<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 position-relative">
                <div class="row align-items-center position-relative md-mb-15"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    @forelse ($hero['home_about_image'] as $index => $item)
                    @if ($index == 0)
                    <div class="col-md-5 sm-mb-30px" data-bottom-top="transform: translateY(50px)"
                        data-top-bottom="transform: translateY(-50px)">
                        <img class="w-100" src="{{ cockpitImage($item) }}"
                            alt="" />
                    </div>
                    @elseif ($index == 1)
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end" data-bottom-top="transform: translateY(-30px)"
                        data-top-bottom="transform: translateY(30px)">
                        <img src="{{ cockpitImage($item) }}" alt=""
                            class="box-shadow-quadruple-large md-w-100" />
                    </div>
                    @elseif ($index == 2)
                    <div class="w-50 sm-w-100 position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px sm-ps-15px sm-pe-15px overflow-hidden p-0"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{ cockpitImage($item) }}" alt=""
                            class="box-shadow-quadruple-large w-100" />
                    </div>
                    @endif
                    @empty                        
                    <div class="col-md-5 sm-mb-30px" data-bottom-top="transform: translateY(50px)"
                        data-top-bottom="transform: translateY(-50px)">
                        <img class="w-100" src="https://fakeimg.movexa.id/421x524/eeeeee/cccccc?text=image"
                            alt="" />
                    </div>
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end" data-bottom-top="transform: translateY(-30px)"
                        data-top-bottom="transform: translateY(30px)">
                        <img src="https://fakeimg.movexa.id/261x313/eeeeee/cccccc?text=image" alt=""
                            class="box-shadow-quadruple-large md-w-100" />
                    </div>
                    <div class="w-50 sm-w-100 position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px sm-ps-15px sm-pe-15px overflow-hidden p-0"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="https://fakeimg.movexa.id/500x614/eeeeee/cccccc?text=image" alt=""
                            class="box-shadow-quadruple-large w-100" />
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 md-mt-20 sm-mt-0"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span
                        class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">{{$hero['home_about_title']}}</span>
                </div>
                {{-- <h4 class="text-dark-gray alt-font fw-600 ls-minus-2px mb-20px">We provide brilliant ideas and adding
                    the world called success to your brand.</h4> --}}
                <p class="w-90 md-w-100 mb-35px sm-mb-20px">{!!$hero['home_about_description']!!}</p>
                <a href="/about-us"
                    class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow border-1 left-icon me-10px sm-mb-15px sm-mt-15px">
                    <span>
                        {{-- <span><i class="feather icon-feather-edit"></i></span> --}}
                        <span class="btn-extra-large" data-text="Explore details">{{$hero['home_about_button_text_1']}}</span>
                    </span>
                </a>
                <a href="/service"
                    class="btn btn-large btn-transparent-light-gray border-1 btn-switch-text left-icon sm-mb-15px sm-mt-15px">
                    <span>
                        {{-- <span><i class="feather icon-feather-briefcase"></i></span> --}}
                        <span class="btn-extra-large" data-text="More services">{{$hero['home_about_button_text_2']}}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
