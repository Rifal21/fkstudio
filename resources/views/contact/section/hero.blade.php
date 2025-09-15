        <!-- start page title -->
        <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0"
            style="background-image:url('{{ isset($contact['bg']) ? cockpitImage($contact['bg']) : 'https://fakeimg.movexa.id/1920x530/eeeeee/cccccc' }}');">
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
                    <div class="col-12 col-md-6 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span
                            class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i
                                class="bi bi-megaphone text-white icon-small me-10px"></i>{{ $contact['header'] }}</span>
                        <h1 class="mb-20px text-white fw-600 ls-minus-1px">{{ $contact['title'] }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="position-relative">
            <div class="container">
                <div class="row mb-8">
                    <div class="col-lg-12  md-mb-50px sm-mb-0"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray ls-minus-2px fw-700">{{ $contact['subtitle'] }}</h3>
                        <form action="{{ route('contact.send') }}" method="post" class="contact-form-style-03">
                            @csrf
                            <label for="exampleInputEmail1"
                                class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Enter your
                                name*</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                <input
                                    class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                    id="exampleInputEmail1" type="text" name="name"
                                    placeholder="What's your good name" />
                            </div>
                            <label for="exampleInputEmail1"
                                class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Email
                                address*</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                <input
                                    class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                    id="exampleInputEmail2" type="email" name="email"
                                    placeholder="Enter your email address" />
                            </div>
                            <label for="exampleInputEmail1"
                                class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Your message</label>
                            <div class="position-relative form-group form-textarea mb-0">
                                <textarea class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="message"
                                    placeholder="Describe about your project" rows="3"></textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                            </div>
                            <div class="row mt-25px align-items-center">
                                {{-- <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">
                                    <p class="mb-0 fs-14 lh-22 text-center text-sm-start">We will never collect information about you without your explicit consent.</p>
                                </div> --}}
                                <div
                                    class="col-xl-12 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">
                                    {{-- <input id="exampleInputEmail3" type="hidden" name="redirect" value=""> --}}
                                    <button id="send-message-button"
                                        class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow submit"
                                        type="submit">Send message</button>
                                </div>
                                <div class="col-12 mt-20px mb-0 text-center text-md-start">
                                    <div class="form-results d-none"></div>
                                </div>
                            </div>
                        </form>
                    </div>
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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const sendMessageButton = document.getElementById('send-message-button');

            sendMessageButton.addEventListener('click', function() {
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: 'Pesan Anda berhasil dikirim!',
                    position: 'top-end', // bisa 'bottom-end', 'top-start', dll
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                }).then(() => {
                    location.reload();
                });
            });
        </script>
