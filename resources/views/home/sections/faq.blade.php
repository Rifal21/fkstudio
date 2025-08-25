<section id="home-faq">
    <div class="container">
        <div class="row align-items-center sm-mt-40px"
            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-12">
                <div class="bg-linen md-p-6 xs-p-9 border-radius-6px position-relative overflow-hidden p-9">
                    <div
                        class="position-absolute right-70px lg-right-20px top-minus-20px w-250px sm-w-180px xs-w-150px opacity-1">
                        <img src="{{ asset('templates/crafto/images/faq-icon.webp') }}" alt="">
                    </div>
                    <div class="mb-10px">
                        <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">{{ $faq['faq_header'] }}</span>
                    </div>
                    <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px">{{ $faq['faq_title'] }}</h3>
                    {{-- <div class="accordion accordion-style-02" id="accordion-style-02"
                        data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                        @foreach ($faq['question'] as $index => $item)                       
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                    aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title position-relative text-dark-gray pe-30px mb-0">
                                        <i class="feather icon-feather-minus fs-20"></i><span class="fw-500">{{ $item }}</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse show collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p class="w-90 sm-w-95 xs-w-100">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing
                                        elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                                        minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title position-relative text-dark-gray pe-30px mb-0">
                                        <i class="feather icon-feather-plus fs-20"></i><span class="fw-500">What are
                                            the
                                            main stages of business plan consulting?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p class="w-90 sm-w-95 xs-w-100">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing
                                        elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                                        minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        @endforeach
                    </div> --}}
                    <div class="accordion accordion-style-02" id="accordion-style-02"
     data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">

    @foreach ($faq['question'] as $index => $item)
        @php
            $answer = $faq['Answer'][$index] ?? 'Belum ada jawaban.';
            $isActive = $index === 0 ? 'show' : '';
            $expanded = $index === 0 ? 'true' : 'false';
            $icon = $index === 0 ? 'icon-feather-minus' : 'icon-feather-plus';

        @endphp

        <div class="accordion-item {{ $index === 0 ? 'active-accordion' : '' }}">
            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-item-{{ $index }}"
                   aria-expanded="{{ $expanded }}" data-bs-parent="#accordion-style-02">
                    <div class="accordion-title position-relative text-dark-gray pe-30px mb-0">
                        <i class="feather {{ $icon }} fs-20"></i>
                        <span class="fw-500">{{ $item }}</span>
                    </div>
                </a>
            </div>

            <div id="accordion-item-{{ $index }}" class="accordion-collapse collapse {{ $isActive }}"
                 data-bs-parent="#accordion-style-02">
                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                    <p class="w-90 sm-w-95 xs-w-100">{!! $answer !!}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

                </div>
            </div>
        </div>
        {{-- <div class="row mt-5">
            <div class="col-12 text-center"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <i class="bi bi-envelope text-dark-gray d-inline-block icon-extra-medium me-5px align-middle"></i>
                <div class="fs-18 text-dark-gray d-inline-block fw-500 align-middle">Save your precious time and
                    effort
                    spent for finding a solution. <a href="#"
                        class="text-dark-gray text-decoration-line-bottom fw-600">Contact us now</a></div>
            </div>
        </div> --}}
    </div>
</section>
