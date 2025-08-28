       <x-main title="Services Detail">
           <!-- start page title -->
           <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0"
               style="background-image:url('{{ isset($item['bg_detail']) ? cockpitImage($item['bg_detail']) : 'https://fakeimg.movexa.id/1920x530/eeeeee/cccccc' }}');">
               <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
                   <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200"
                       fill="#ffffff">
                       <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                           <animate attributeName="d" dur="5s"
                               values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                               repeatCount="indefinite" />
                       </path>
                   </svg>
               </div>
               <div class="container">
                   <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                       <div class="col-12 col-lg-8 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center"
                           data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                           <span
                               class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i
                                   class="bi bi-megaphone text-white icon-small me-10px"></i>{{ $item['header_detail'] ?? '' }}</span>
                           <h1 class="mb-0 text-white fw-600 ls-minus-1px">{{ $item['title'] ?? '' }}</h1>
                       </div>
                   </div>
               </div>
           </section>
           <!-- end page title -->
           <!-- start section -->
           <section class="pt-3 sm-pt-50px">
               <div class="container">
                   <div class="row align-items-center justify-content-center" data-anime='{ " perspective": 1200 }'>
                       <div class="col-lg-6 md-mb-50px"
                           data-anime='{ "translateY": [0, 0], "zoom": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                           <figure class="position-relative m-0">
                               <img src="{{ isset($item['image']) ? cockpitImage($item['image']) : 'https://fakeimg.movexa.id/800x600/eeeeee/cccccc' }}"
                                   alt="" class="w-100 border-radius-5px"
                                   data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                               {{-- <figcaption
                                   class="w-190px sm-w-180px xs-w-140px bg-white p-30px xs-p-15px border-radius-6px position-absolute bottom-30px left-30px xs-bottom-20px xs-left-15px overflow-hidden box-shadow-medium animation-float text-center"
                                   data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1000, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                   <span
                                       class="fs-90 xs-fs-80 fw-700 text-white d-block position-relative z-index-1">15</span>
                                   <div
                                       class="fw-500 fs-20 xs-fs-18 d-block text-dark-gray lh-24 xs-lh-22 ls-minus-05px xs-mb-5px">
                                       Years of experience</div>
                                   <div
                                       class="h-160px w-160px border-radius-100 bg-base-color position-absolute left-minus-5px xs-left-minus-25px top-minus-60px sm-top-minus-80px xs-top-minus-100px z-index-0">
                                   </div>
                               </figcaption> --}}
                           </figure>
                       </div>
                       <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-md-start"
                           data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                           <span
                               class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex justify-content-center justify-content-md-start"><i
                                   class="bi bi-award fs-16 me-5px"></i>{{ $item['title'] ?? '' }}</span>
                           <h3 class="text-dark-gray fw-700 ls-minus-1px">{{ $item['title'] }}</h3>
                           <p class="w-95 md-w-100">{!! $item['long_desc'] !!}</p>
                           <div class="pt-20px pb-20px pe-30px xs-p-15px mb-15px icon-with-text-style-08 w-90 lg-w-100">
                               <a href="#bundle" target="blank"
                                   class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px ls-0px mt-15px">
                                   <span>
                                       <span class="btn-double-text"
                                           data-text="{{ session('locale') == 'id' ? 'Pilih Paket Bundle' : 'Choose a bundle' }}">{{ session('locale') == 'id' ? 'Pilih Paket Bundle' : 'Choose a bundle' }}</span>
                                       <span><i class="fa-solid fa-arrow-right"></i></span>
                                   </span>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- end section -->
           <!-- start section -->
           <section class="bg-very-light-gray" id="bundle">
               <div class="container">
                   <div class="row justify-content-center mb-3">
                       <div class="col-xl-8 col-lg-9 col-md-10 text-center">
                           <h3 class="text-dark-gray fw-700 ls-minus-1px"
                               data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                               {{ session('locale') == 'id' ? 'Paket Bundle' : 'Bundle Packages' }}
                           </h3>
                           <p class="text-light-opacity mt-2">
                               {{ session('locale') == 'id' ? 'Pilih paket bundle sesuai kebutuhan bisnis Anda' : 'Choose a bundle according to your business needs' }}
                           </p>
                       </div>
                   </div>

                   <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                       data-anime='{ "el": "childs", "willchange": "transform", "scale":[0.95,1], "opacity": [0, 1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                       @foreach ($item['bundling_name'] ?? [] as $index => $bundle)
                           @php
                               $price = $item['price'][$index] ?? 0;
                               $features = $item['feature'][$index] ?? '';
                           @endphp
                           <!-- start paket item -->
                           <div class="col md-mb-30px">
                               <div
                                   class="feature-box bg-white border-radius-6px pt-10 pb-10 ps-10 pe-10 box-shadow-quadruple-large hover-box transition text-center">
                                   <div class="feature-box-content">
                                       <h4 class="text-dark-gray fw-600 fs-22 mb-10px">{{ $bundle }}</h4>
                                       <h3 class="text-base-color fw-700 fs-20 mb-15px">
                                           @if ($price)
                                               Rp.{{ number_format($price, 0, ',', '.') }},-
                                           @else
                                               {{ session('locale') == 'id' ? 'Hubungi Kami' : 'Contact us' }}
                                           @endif
                                       </h3>
                                       <p class="list-unstyled mb-20px text-dark-gray">
                                           {!! $features !!}
                                       </p>
                                       <a href="#pesan"
                                           class="btn btn-base-color btn-small">{{ session('locale') == 'id' ? 'Pesan Sekarang' : 'Order Now' }}</a>
                                   </div>
                               </div>
                           </div>
                           <!-- end paket item -->
                       @endforeach
                   </div>

                   <!-- bagian highlight bawah -->
                   {{-- <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 align-items-center justify-content-center mt-5 xs-mt-7"
                       data-anime='{ "el": "childs", "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>

                       <div class="col border-end xs-border-end-0 border-color-transparent-dark-very-light md-mb-35px">
                           <div class="d-flex align-items-center justify-content-center">
                               <div class="flex-shrink-0 me-25px sm-me-15px">
                                   <h2 class="mb-0 text-dark-gray fw-700 ls-minus-2px">100+</h2>
                               </div>
                               <div class="text-dark-gray">
                                   <span class="fs-17 lh-26 d-block fw-500">Website berhasil dibuat</span>
                               </div>
                           </div>
                       </div>

                       <div class="col border-end md-border-end-0 border-color-transparent-dark-very-light md-mb-35px">
                           <div class="d-flex align-items-center justify-content-center">
                               <div class="flex-shrink-0 me-25px sm-me-15px">
                                   <h2 class="mb-0 text-dark-gray fw-700 ls-minus-2px">98<sup class="fs-30">%</sup>
                                   </h2>
                               </div>
                               <div class="text-dark-gray">
                                   <span class="fs-17 lh-26 d-block fw-500">Kepuasan pelanggan</span>
                               </div>
                           </div>
                       </div>

                       <div class="col">
                           <div class="d-flex align-items-center justify-content-center">
                               <div class="flex-shrink-0 me-25px sm-me-15px">
                                   <h2 class="mb-0 text-dark-gray fw-700 ls-minus-2px">24/7</h2>
                               </div>
                               <div class="text-dark-gray">
                                   <span class="fs-17 lh-26 d-block fw-500">Layanan support siap membantu</span>
                               </div>
                           </div>
                       </div>
                   </div> --}}
               </div>
           </section>
           <!-- end section -->

           <!-- start section -->
           <section>
               <div class="container">
                   <div class="row align-items-center justify-content-center mb-7 sm-mb-40px">
                       <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px"
                           data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                           <span
                               class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i
                                   class="bi bi-patch-check fs-16 me-5px"></i>{{ session('locale') == 'id' ? 'Manfaat Layanan' : 'Service Benefits' }}</span>
                           <h3 class="fw-700 text-dark-gray ls-minus-1px">{{ $item['title_benefit'] ?? '' }}</h3>
                           @foreach($item['point_benefit'] ?? [] as $benefit)
                           <!-- start features box item -->
                           <div class="icon-with-text-style-08 mb-10px">
                               <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                   <div
                                       class="feature-box-icon feature-box-icon-rounded w-35px h-35px bg-very-light-gray rounded-circle me-15px">
                                       <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                   </div>
                                   <div class="feature-box-content">
                                       <span class="text-dark-gray fw-500">{{ $benefit }}</span>
                                   </div>
                               </div>
                           </div>
                           <!-- end features box item -->
                           @endforeach
                       </div>
                       <div class="col-lg-6 offset-xl-1 position-relative z-index-1"
                           data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                           <div class="atropos" data-atropos data-atropos-perspective="2450">
                               <div class="atropos-scale">
                                   <div class="atropos-rotate">
                                       <div class="atropos-inner">
                                           <img src="{{ isset($item['image_benefit']) ? cockpitImage($item['image_benefit']) : 'https://fakeimg.movexa.id/800x600/eeeeee/cccccc' }}" alt=""
                                               class="border-radius-6px w-100" />
                                       </div>
                                   </div>
                               </div>
                           </div>
                           {{-- <div class="absolute-middle-center text-white-space-nowrap z-index-9">
                               <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                   class="btn btn-extra-large btn-white left-icon btn-box-shadow fw-600 btn-rounded popup-youtube ls-minus-05px"><i
                                       class="fa-brands fa-youtube icon-small"></i>How it works</a>
                           </div> --}}
                       </div>
                   </div>
               </div>
           </section>
           <!-- end section -->
           <!-- start section -->
           <section class="bg-very-light-gray overlap-height position-relative">
               <div class="container overlap-gap-section">
                   <div class="row justify-content-center mb-4">
                       <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                           <h3 class="text-dark-gray fw-700 ls-minus-2px"
                               data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                               Other business services</h3>
                       </div>
                   </div>
                   <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-8"
                       data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                       @foreach ($serviceitem as $item)
                           <!-- start services box style -->
                           <div class="col md-mb-30px">
                               <div
                                   class="services-box-style-03 box-shadow-extra-large last-paragraph-no-margin border-radius-6px overflow-hidden">
                                   <div class="position-relative">
                                       <a href="{{ route('service.show', $item['slug']) }}"><img
                                               src="{{ isset($item['image']) ? cockpitImage($item['image']) : 'https://fakeimg.movexa.id/800x600/eeeeee/cccccc' }}"
                                               alt=""></a>
                                       <a href="#"
                                           class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">{{ $item['category'] }}</a>
                                   </div>
                                   <div class="bg-white">
                                       <div class="ps-65px pe-65px lg-ps-30px lg-pe-30px pt-30px pb-30px text-center">
                                           <a href="{{ route('service.show', $item['slug']) }}"
                                               class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">{{ $item['title'] }}</a>
                                           <p>{!! $item['description'] !!}</p>
                                       </div>
                                       <div
                                           class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                           <a href="{{ route('service.show', $item['slug']) }}"
                                               class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                               <span>
                                                   <span class="btn-text">Explore services</span>
                                                   <span class="btn-icon"><i
                                                           class="fa-solid fa-arrow-right"></i></span>
                                                   <span class="btn-icon"><i
                                                           class="fa-solid fa-arrow-right"></i></span>
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
                   <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200"
                       fill="#ffffff">
                       <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                           <animate attributeName="d" dur="5s"
                               values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                               repeatCount="indefinite" />
                       </path>
                   </svg>
               </div>
           </section>
           <!-- end section -->
       </x-main>
