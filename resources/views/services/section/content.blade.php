        <!-- start section --> 
        <section class="py-0">
            <div class="container">
                @foreach($service as $index => $item)
                <div class="row mb-7 sm-mb-50px">
                    <div class="col-12">
                        <span class="text-black fw-700 text-uppercase mb-10px d-block fs-15">{{ $item['title']}}</span>
                        <div class="position-relative">
                            <h5 class="text-black fw-700 mb-0 me-25px absolute-middle-right ls-minus-2px">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</h5>
                            <div class="separator-line-1px w-100 d-block bg-black"></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-60px">
                    <div class="col-lg-4 md-mb-7 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <p>{{ $item['description'] }}</p>
                    </div>
                    <div class="col-xxl-2 offset-xxl-1 col-lg-3 md-mb-7">
                        <ul class="p-0 m-0 list-style-01" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            @foreach(($item['jobdesk'] ?? []) as $jobdesk)
                            <li class="border-color-black pb-10px fs-16 lh-28 fw-500 text-black">{{ $jobdesk }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xxl-4 offset-xxl-1 col-lg-5" data-anime='{ "effect": "slide", "color": "#ffea00", "direction":"rl", "easing": "easeOutQuad", "delay":50}'>
                        <img src="{{cockpitImage($item['image']) ?? 'https://fakeimg.movexa.id/635x413/eeeeee/cccccc'}}" style="width: 635px; height: 413px; object-fit: cover" alt="" /> 
                    </div>
                </div>
                @endforeach
                {{-- <div class="row mb-7 sm-mb-50px">
                    <div class="col-12">
                        <span class="text-black fw-700 text-uppercase mb-10px d-block fs-15">Web development</span>
                        <div class="position-relative">
                            <h5 class="text-black fw-700 mb-0 me-25px absolute-middle-right ls-minus-2px">02</h5>
                            <div class="separator-line-1px w-100 d-block bg-black"></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-60px">
                    <div class="col-lg-4 md-mb-7 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <p>We are excited for our work and how it positively impacts clients. With over 12 years of experience we have been constantly providing excellent web solutions services.</p>
                    </div>
                    <div class="col-xxl-2 offset-xxl-1 col-lg-3 md-mb-7">
                        <ul class="p-0 m-0 list-style-01" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <li class="border-color-black pb-10px fs-16 lh-28 fw-500 text-black">Web development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Website maintenance</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Mobile app development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Cloud app development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">VR app development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Theme development</li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 offset-xxl-1 col-lg-5" data-anime='{ "effect": "slide", "color": "#ffea00", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                        <img src="https://fakeimg.movexa.id/635x413/eeeeee/cccccc" alt="" /> 
                    </div>
                </div>
                <div class="row mb-7 sm-mb-50px">
                    <div class="col-12">
                        <span class="text-black fw-700 text-uppercase mb-10px d-block fs-15">eCommerce solutions</span>
                        <div class="position-relative">
                            <h5 class="text-black fw-700 mb-0 me-25px absolute-middle-right ls-minus-2px">03</h5>
                            <div class="separator-line-1px w-100 d-block bg-black"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 md-mb-7 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <p>We are excited for our work and how it positively impacts clients. With over 12 years of experience we have been constantly providing excellent web solutions services.</p>
                    </div>
                    <div class="col-xxl-2 offset-xxl-1 col-lg-3 md-mb-7">
                        <ul class="p-0 m-0 list-style-01" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <li class="border-color-black pb-10px fs-16 lh-28 fw-500 text-black">Custom development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">E-commerce migration</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Custom E-commerce</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">E-commerce integrations</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">Back-end development</li>
                            <li class="border-color-black pt-10px pb-10px fs-16 lh-28 fw-500 text-black">E-commerce applications</li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 offset-xxl-1 col-lg-5" data-anime='{ "effect": "slide", "color": "#ffea00", "direction":"rl", "easing": "easeOutQuad", "delay":50}'>
                        <img src="https://fakeimg.movexa.id/635x413/eeeeee/cccccc" alt="" /> 
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- end section --> 