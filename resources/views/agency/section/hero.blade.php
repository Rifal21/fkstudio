        <!-- start page title -->
        <section class="ipad-top-space-margin page-title-big-typography position-relative md-p-0 overflow-hidden">
            <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true" data-particle-options='{"particles":{"number":{"value":5,"density":{"enable":true,"value_area":800}},"color":{"value":"#000000"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'></div>
            <div class="container">
                <div class="row align-items-lg-end align-items-center small-screen md-h-auto text-sm-start text-center">
                    <div class="col-12 position-relative page-title-extra-large md-mb-70px sm-mb-50px xs-mb-20px"> 
                        <div class="fw-800 text-black fs-160 md-fs-130 sm-fs-110 xs-fs-70 ls-minus-4px md-ls-minus-2px text-uppercase">
                            <div data-bottom-top="transform: translate3d(-50px, 0px, 0px);" data-top-bottom="transform: translate3d(50px, 0px, 0px);">{{ $heroAbout['title'] }}</div> 
                            <div class="ms-10 xs-ms-0" data-bottom-top="transform: translate3d(50px, 0px, 0px);" data-top-bottom="transform: translate3d(-50px, 0px, 0px);">{{ $heroAbout['subtitle'] }}</div> 
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- start page title -->
        <!-- start section -->
        <section class="p-0">
            <div class="container">
                <div class="row align-items-end text-center text-sm-start" data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-xl-4 col-lg-5 offset-xl-1 md-mb-15px">
                        <div class="fs-19 fw-600 text-black">{{ $heroAbout['first_hook']}}</div>
                        <span class="w-70 xl-w-100 sm-w-70 xs-w-80 d-block xs-mx-auto">{{$heroAbout['second_hook']}}</span>
                    </div>
                    <div class="col-lg-7">
                        <div class="fs-80 sm-fs-50 text-black fw-200">- <span class="fs-130 lg-fs-110 xs-fs-75 ls-minus-4px md-ls-minus-2px font-style-italic alt-font fw-500">{{$heroAbout['branding']}}</span></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden">
            <div class="one-third-screen md-h-600px sm-h-350px skrollr-parallax magic-cursor round-cursor mx-auto" data-bottom-top="width: 54%" data-center-top="width: 86%;" data-parallax-background-ratio="0.5" style="background-image: url('{{cockpitImage($heroAbout['image']) ?? 'https://fakeimg.movexa.id/1920x1080/eeeeee/cccccc'}}')"></div>
        </section>
        <!-- end section --> 