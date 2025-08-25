        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row">
                    @forelse($project as $index => $item)
                        @php
                            $imageUrl = !empty($item['image'])
                                ? cockpitImage($item['image'])
                                : 'https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project';
                        @endphp
                        @if ($index === 0)
                            <div class="col-xl-4 col-lg-5 filter-content">
                                <ul
                                    class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item grid-item-single transition-inner-all">
                                        <div class="portfolio-box"
                                            data-bottom-top="transform: translate3d(0px, 50px, 0px);"
                                            data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                                            <div class="portfolio-image bg-base-color">
                                                <a href="{{$item['link'] ?? '#'}}">
                                                    <img src="{{ $imageUrl }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                                <a href="{{$item['link'] ?? '#'}}"
                                                    class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">{{ $item['title'] }}</a>
                                                <span
                                                    class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                                <div class="d-inline-block">{{ $item['sort_desc'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                </ul>
                            </div>
                        @endif
                        @if ($index === 1)
                            <div class="col-xl-7 col-lg-7 filter-content offset-xl-1">
                                <ul
                                    class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item grid-item-single transition-inner-all">
                                        <div class="portfolio-box"
                                            data-bottom-top="transform: translate3d(0px, 100px, 0px)"
                                            data-top-bottom="transform: translate3d(0px, 180px, 0px);">
                                            <div class="portfolio-image bg-base-color">
                                                <a href="{{$item['link'] ?? '#'}}">
                                                    <img src="{{ $imageUrl }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                                <a href="{{$item['link'] ?? '#'}}"
                                                    class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">{{ $item['title'] }}</a>
                                                <span
                                                    class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                                <div class="d-inline-block">{{ $item['sort_desc'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                </ul>
                            </div>
                        @endif
                        @if ($index === 2)
                            <div class="col-12 filter-content mt-20 mb-5 lg-mt-0 lg-mb-0">
                                <ul
                                    class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item grid-item-single transition-inner-all">
                                        <div class="portfolio-box"
                                            data-bottom-top="transform: translate3d(0px, -80px, 0px);"
                                            data-top-bottom="transform: translate3d(0px, 80px, 0px);">
                                            <div class="portfolio-image bg-base-color">
                                                <a href="{{$item['link'] ?? '#'}}">
                                                    <img src="{{ $imageUrl }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                                <a href="{{$item['link'] ?? '#'}}"
                                                    class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">{{ $item['title'] }}</a>
                                                <span
                                                    class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                                <div class="d-inline-block">{{ $item['sort_desc'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                </ul>
                            </div>
                        @endif
                        @if ($index === 3)
                            <div class="col-xl-7 col-lg-7 filter-content xl-mt-5 lg-mt-0">
                                <ul
                                    class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item grid-item-single transition-inner-all">
                                        <div class="portfolio-box"
                                            data-bottom-top="transform: translate3d(0px, 50px, 0px);"
                                            data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                                            <div class="portfolio-image bg-base-color">
                                                <a href="{{$item['link'] ?? '#'}}">
                                                    <img src="{{ $imageUrl }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                                <a href="{{$item['link'] ?? '#'}}"
                                                    class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">{{ $item['title'] }}</a>
                                                <span
                                                    class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                                <div class="d-inline-block">{{ $item['sort_desc'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                </ul>
                            </div>
                        @endif
                        @if ($index === 4)
                            <div class="col-xl-4 col-lg-5 filter-content offset-xl-1 xl-mt-3 lg-mt-0">
                                <ul
                                    class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                    <li class="grid-sizer"></li>
                                    <!-- start portfolio item -->
                                    <li class="grid-item grid-item-single transition-inner-all">
                                        <div class="portfolio-box"
                                            data-bottom-top="transform: translate3d(0px, -50px, 0px);"
                                            data-top-bottom="transform: translate3d(0px, 50px, 0px);">
                                            <div class="portfolio-image bg-base-color">
                                                <a href="{{$item['link'] ?? '#'}}">
                                                    <img src="{{ $imageUrl }}"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                                <a href="{{$item['link'] ?? '#'}}"
                                                    class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">{{ $item['title'] }}</a>
                                                <span
                                                    class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                                <div class="d-inline-block">{{ $item['sort_desc'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end portfolio item -->
                                </ul>
                            </div>
                        @endif
                    @empty
                        <div class="col-xl-4 col-lg-5 filter-content">
                            <ul
                                class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item grid-item-single transition-inner-all">
                                    <div class="portfolio-box" data-bottom-top="transform: translate3d(0px, 50px, 0px);"
                                        data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                                        <div class="portfolio-image bg-base-color">
                                            <a href="demo-scattered-portfolio-single-project-creative.html">
                                                <img src="https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                            <a href="demo-scattered-portfolio-single-project-creative.html"
                                                class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">Tailoring</a>
                                            <span
                                                class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                            <div class="d-inline-block">Branding</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-7 filter-content offset-xl-1">
                            <ul
                                class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item grid-item-single transition-inner-all">
                                    <div class="portfolio-box"
                                        data-bottom-top="transform: translate3d(0px, 100px, 0px)"
                                        data-top-bottom="transform: translate3d(0px, 180px, 0px);">
                                        <div class="portfolio-image bg-base-color">
                                            <a href="demo-scattered-portfolio-single-project-creative.html">
                                                <img src="https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                            <a href="demo-scattered-portfolio-single-project-creative.html"
                                                class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">Designblast</a>
                                            <span
                                                class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                            <div class="d-inline-block">Photography</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                        <div class="col-12 filter-content mt-20 mb-5 lg-mt-0 lg-mb-0">
                            <ul
                                class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item grid-item-single transition-inner-all">
                                    <div class="portfolio-box"
                                        data-bottom-top="transform: translate3d(0px, -80px, 0px);"
                                        data-top-bottom="transform: translate3d(0px, 80px, 0px);">
                                        <div class="portfolio-image bg-base-color">
                                            <a href="demo-scattered-portfolio-single-project-creative.html">
                                                <img src="https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                            <a href="demo-scattered-portfolio-single-project-creative.html"
                                                class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">Outward</a>
                                            <span
                                                class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                            <div class="d-inline-block">Identity</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-7 filter-content xl-mt-5 lg-mt-0">
                            <ul
                                class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item grid-item-single transition-inner-all">
                                    <div class="portfolio-box"
                                        data-bottom-top="transform: translate3d(0px, 50px, 0px);"
                                        data-top-bottom="transform: translate3d(0px, -50px, 0px);">
                                        <div class="portfolio-image bg-base-color">
                                            <a href="demo-scattered-portfolio-single-project-creative.html">
                                                <img src="https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                            <a href="demo-scattered-portfolio-single-project-creative.html"
                                                class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">Violator</a>
                                            <span
                                                class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                            <div class="d-inline-block">Marketing</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-5 filter-content offset-xl-1 xl-mt-3 lg-mt-0">
                            <ul
                                class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item grid-item-single transition-inner-all">
                                    <div class="portfolio-box"
                                        data-bottom-top="transform: translate3d(0px, -50px, 0px);"
                                        data-top-bottom="transform: translate3d(0px, 50px, 0px);">
                                        <div class="portfolio-image bg-base-color">
                                            <a href="demo-scattered-portfolio-single-project-creative.html">
                                                <img src="https://fakeimg.movexa.id/750x635/eeeeee/cccccc?text=project"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px sm-pt-20px sm-pb-20px">
                                            <a href="demo-scattered-portfolio-single-project-creative.html"
                                                class="text-black text-black-hover fw-600 fs-24 alt-font font-style-italic">Potato</a>
                                            <span
                                                class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-5px me-5px"></span>
                                            <div class="d-inline-block">Branding</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- end section -->
