<section class="z-index-99 py-0">
    <div class="lg-pt-8 lg-pb-8 md-pb-0 bg-white">
        <div class="container-fluid">
            <div class="row align-items-center full-screen md-h-auto">
                <div
                    class="col-lg-6 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-30px sm-pe-30px position-relative align-self-center text-md-start pe-14 ps-12 text-center">
                    <div class="mb-15px">
                        <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">{{ $hero['home_vision_title']}}</span>
                    </div>
                    {{-- <h1 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Whiteline face beauty.</h1> --}}
                    <div class="w-95 md-w-100 mb-35px">{!! $hero['home_vision_text']!!}</div>
                    {{-- <a href="demo-branding-agency-single-project-slider.html"
                        class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow fw-400">
                        <span>
                            <span class="btn-double-text" data-text="Explore project">Explore project</span>
                            <span><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a> --}}
                </div>
                @if ($hero['home_vision_image'])
                <div class="col-lg-6 cover-background h-100 md-h-500px overflow-visible"
                    style="background-image: url({{ cockpitImage($hero['home_vision_image']) }})">
                </div>
                @else                    
                <div class="col-lg-6 cover-background h-100 md-h-500px overflow-visible"
                    style="background-image: url('https://fakeimg.movexa.id/960x1100/eeeeee/cccccc?text=image')">
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
