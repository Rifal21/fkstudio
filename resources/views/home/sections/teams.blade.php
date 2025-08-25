<section class="pb-0 overflow-x-hidden position-relative">
    <!-- Background Grid -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-grid" style="z-index: 0;"></div>

    <div class="container-fluid p-0 position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-15px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">{{ $hero['home_jedis_header'] }}</span>
                    <h4 class="mt-1 text-black">{{ $hero['home_jedis_title'] }}</h4>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 g-4 justify-content-center mb-5"
            data-anime='{ "el": "childs", "translateY": [30, 0], "rotateX":[30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>

            @foreach ($hero['home_jedis_people'] as $index => $item)
                @php
                    $image = $hero['home_jedis_image'][$index] ?? 'https://fakeimg.movexa.id/480x605/eeeeee/cccccc?text=image';
                    $position = $hero['home_jedis_position'][$index] ?? '';
                    $sosmedia = $hero['home_jedis_social_media'][$index] ?? [];
                @endphp

                <div class="col team-style-10 md-ps-15px md-pe-15px md-mb-30px">
                    <figure class="position-relative mb-0 overflow-hidden">
                        <img src="{{ cockpitImage($image) }}" class="w-100" alt="" />
                        <img src="{{ cockpitImage($image) }}" class="hover-switch-image" alt="" />
                        <figcaption class="w-100 h-100 d-flex flex-wrap">
                            <div class="social-icon d-flex flex-column flex-shrink-1 p-30px mb-auto ms-auto">
                                <a href="{{ $sosmedia }}" target="_blank" class="bg-dark-gray text-white">
                                    <i class="fa-brands fa-instagram icon-small"></i>
                                </a>
                            </div>
                            <div class="team-member-strip w-100 d-flex align-items-center pt-15px pb-15px ps-30px pe-30px mt-auto bg-white">
                                <span class="team-member-name fw-600 alt-font text-dark-gray fs-18 ls-minus-05px">{{ $item }}</span>
                                <span class="member-designation fs-15 lh-20 alt-font ms-auto">{{ $position }}</span>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            @endforeach

        </div>
    </div>
</section>

<style>
.bg-grid {
    background-color: #f8f9fa;
    background-image: 
        linear-gradient(#e9ecef 1px, transparent 1px),
        linear-gradient(90deg, #e9ecef 1px, transparent 1px);
    background-size: 40px 40px;
}
</style>
