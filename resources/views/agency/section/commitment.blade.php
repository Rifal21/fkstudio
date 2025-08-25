<!-- start section -->
        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-lg-7" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="position-sticky top-100px">
                            <span class="fs-70 xl-fs-65 lg-fs-55 fw-700 mb-45px d-inline-block text-black ls-minus-3px xs-ls-minus-2px">{{$commitment['title']}} <span class="alt-font font-style-italic">{{$commitment['title_style']}}</span></span>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5 offset-xxl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        @forelse($commitment['title_commitment'] as $index => $commit)
                            @php
                                $desc = $commitment['description'][$index] ?? '';
                            @endphp
                            <div class="mb-30px sm-mb-30px last-paragraph-no-margin">
                                <span class="d-inline-block fs-15 text-uppercase fw-700 text-black">{{ $commit }}</span>
                                <p>{!! $desc !!}</p>
                            </div>
                        <div class="mb-60px sm-mb-30px last-paragraph-no-margin">
                        @empty
                        <div class="mb-60px sm-mb-30px last-paragraph-no-margin"> 
                            <span class="d-inline-block fs-15 text-uppercase fw-700 text-black mb-5px">We drive positive change.</span>
                            <p>We are excited for our work and how it positively impacts clients. With over 12 years of experience we have been constantly providing excellent web solutions services.</p>
                        </div>
                        <div class="mb-60px sm-mb-30px last-paragraph-no-margin">
                        @endforelse 
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->