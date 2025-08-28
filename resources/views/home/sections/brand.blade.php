                <!-- start section -->
                <section class="pt-3 sm-pt-50px">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-7"
                            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            @foreach ($brand['icon'] as $index => $item)
                                @php
                                    $title = $brand['title_icon'][$index];
                                    $desc = $brand['desc_icon'][$index];
                                @endphp
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-01 md-mb-30px">
                                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                        <div class="feature-box-icon me-20px">
                                            <img src="{{ cockpitImage($item) ?? 'https://fakeimg.movexa.id/100x100/eeeeee/cccccc?text=icon' }}"
                                                alt="" style="max-width: 100px; height: 100px;" />
                                        </div>
                                        <div class="feature-box-content">
                                            <span
                                                class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">{{ $title }}</span>
                                            <p class="w-80 xl-w-90 lg-w-100">{{ $desc }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            @endforeach
                        </div>
                        <div class="row mb-10 align-items-center">
                            <div class="col-lg-5 position-relative md-mb-20">
                                @foreach ($brand['image'] as $index => $image)
                                    @if ($index === 0)
                                        <div class="w-70 xs-w-80" data-animation-delay="50"
                                            data-shadow-animation="true">
                                            <img src="{{ cockpitImage($image) ?? 'https://fakeimg.movexa.id/640x784/eeeeee/cccccc?text=profile' }}"
                                                alt="" class="border-radius-8px w-100"
                                                style="max-width: 640px; max-height: 784px;" />
                                        </div>
                                    @else
                                        <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px"
                                            data-shadow-animation="true" data-animation-delay="250"
                                            data-bottom-top="transform: translateY(50px)"
                                            data-top-bottom="transform: translateY(-50px)">
                                            <img src="{{ cockpitImage($image) ?? 'https://fakeimg.movexa.id/640x784/eeeeee/cccccc?text=profile' }}"
                                                alt=""
                                                class="border-radius-8px w-100 box-shadow-quadruple-large"
                                                style="max-width: 640px; max-height: 784px;" />
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-xl-5 col-lg-6 offset-lg-1"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span
                                    class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i
                                        class="bi bi-award fs-16 me-5px"></i>{{ $brand['header'] }}</span>
                                <h3 class="text-dark-gray fs-50 fw-700 ls-minus-2px">{{ $brand['title'] }}</h3>
                                <p class="mb-40px sm-mb-25px">{!! $brand['description'] !!}</p>
                                <div class="progress-bar-style-02">
                                    @foreach ($brand['text'] as $index => $text)
                                        @php
                                            $percent = $brand['percentage'][$index];
                                        @endphp
                                        @if ($index === 0)
                                            <!-- start progress bar item -->
                                            <div
                                                class="progress mb-15px border-radius-50px fw-700 fs-11 lh-11 text-white bg-white">
                                                <div class="progress-bar bg-gradient-flamingo-red-transparent m-0"
                                                    role="progressbar" aria-valuenow="{{ $percent }}"
                                                    aria-valuemin="0" aria-valuemax="100" aria-label="business">
                                                    <span
                                                        class="progress-bar-percent text-flamingo">{{ $percent }}%</span>
                                                </div>
                                                <div class="progress-bar-title text-uppercase">{{ $text }}</div>
                                            </div>
                                            <!-- end progress bar item -->
                                        @else
                                            <!-- start progress bar item -->
                                            <div
                                                class="progress border-radius-50px fw-700 fs-11 lh-11 text-white bg-white">
                                                <div class="progress-bar bg-gradient-base-color-transparent m-0"
                                                    role="progressbar" aria-valuenow="{{ $percent }}"
                                                    aria-valuemin="0" aria-valuemax="100" aria-label="technology">
                                                    <span
                                                        class="progress-bar-percent text-base-color">{{ $percent }}%</span>
                                                </div>
                                                <div class="progress-bar-title text-uppercase">{{ $text }}
                                                </div>
                                            </div>
                                            <!-- end progress bar item -->
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center mb-50px fw-bold text-dark-gray" data-anime='{ "el": "childs", "scale": [0.8,1], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>{{ session('locale') == 'id' ? 'Klien Kami' : 'Our Clients' }}</h4>
                        <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center ps-3 pe-3 xs-mt-40px"
                            data-anime='{ "el": "childs", "scale": [0.8,1], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            @foreach ($brand['client_logo'] as $index => $item)
                                <!-- start client item -->
                                <div class="col client-box text-center md-mb-40px">
                                    <a href="#"><img
                                            src="{{ cockpitImage($item) ?? 'https://fakeimg.movexa.id/100x100/eeeeee/cccccc?text=logo' }}"
                                            alt="" style="max-width: 100px; height: 100px;"></a>
                                </div>
                                <!-- end client item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- end section -->
