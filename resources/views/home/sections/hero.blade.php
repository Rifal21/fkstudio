        <!-- start hero section -->
        <section class="cover-background full-screen ipad-top-space-margin py-0 md-h-750px sm-h-650px" style="background-image:url('{{cockpitImage($hero['bg']) ?? 'https://fakeimg.movexa.id/1920x1200/eeeeee/cccccc'}}');">
            <div class="opacity-very-light bg-black"></div>
            <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block"> 
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
            <div class="container h-100"> 
                <div class="row align-items-center h-100">
                    <div class="col-xl-6 col-lg-8 col-md-10 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>   
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100"><i class="bi bi-megaphone text-white icon-small me-10px"></i>{{ $hero['header']}}</span>
                        <h1 class="text-white fw-600 ls-minus-2px mb-25px">{{ $hero['slogan']}}</h1> 
                        <div><p class="fw-300 fs-18 w-85 sm-w-95 text-white opacity-6">{{ $hero['desc']}}</p></div>
                        <a href="/services" target="blank" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="{{ session('locale') == 'id' ? 'Jelajahi FKStudio' : 'Explore FKStudio' }}">{{ session('locale') == 'id' ? 'Jelajahi FKStudio' : 'Explore FKStudio' }}</span>
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                        {{-- <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="{{ session('locale') == 'id' ? 'Hubungi Kami' : 'Contact us' }}">{{ session('locale') == 'id' ? 'Hubungi Kami' : 'Contact us' }}</span>
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </span>
                        </a> --}}
                    </div>  
                </div> 
            </div>
        </section>
        <!-- end hero section -->
