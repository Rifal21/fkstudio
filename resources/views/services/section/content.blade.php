        <!-- start section -->
        <section class="pt-3 bg-very-light-gray sm-pt-50px position-relative">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-8" data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    @foreach($item as $item)
                    <!-- start services box style --> 
                    <div class="col mb-30px"> 
                        <div class="services-box-style-03 box-shadow-extra-large last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ route('service.show', $item['slug'])}}"><img src="{{ cockpitImage($item['image']) ?? 'https://fakeimg.movexa.id/600x440/eeeeee/cccccc?text=image'}}" alt=""></a>
                                <a href="#" class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">{{ $item['category']}}</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-65px pe-65px lg-ps-40px lg-pe-40px pt-30px pb-30px text-center progress-bar-style-01">
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
                    </div>
                    <!-- end services box style --> 
                    @endforeach
                </div>
            </div> 
            <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block"> 
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff"> 
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
        </section>
        <!-- end section --> 