        <!-- start page title -->
        <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0" style="background-image:url('{{ cockpitImage($service['background']) ?? 'https://fakeimg.movexa.id/1920x530/eeeeee/cccccc'}}');">
            <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block"> 
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#f0f2f8"> 
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
            <div class="container">
                <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                    <div class="col-12 col-xl-6 col-lg-8 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i class="bi bi-megaphone text-white icon-small me-10px"></i>{{ $service['header'] }}</span>
                        <h1 class="mb-20px text-white fw-600 ls-minus-1px">{{ $service['title'] }}</h1>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end page title -->