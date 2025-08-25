<section class="py-5 bg-light">
    <div class="container-fluid px-50px">
        <div class="row align-items-center g-4 full-screen md-h-auto">

            <!-- Kolom Kiri -->
            <div class="col-lg-5 offset-lg-1">
                <div class="mb-15px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span
                        class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">{{ $hero['home_contact_me_header'] }}</span>
                </div>
                <div class="mb-3">
                    {!! $hero['home_contact_me_text'] !!}
                </div>

                <div class="mb-2">
                    <i class="bi bi-telephone-fill text-danger me-2"></i> {{ $hero['home_contact_me_phone'] }}
                </div>
                <div class="mb-4">
                    <i class="bi bi-envelope-fill text-danger me-2"></i> {{ $hero['home_contact_me_email'] }}
                </div>

                <a href="#" class="btn btn-large btn-dark-gray  btn-box-shadow fw-400">
                    <span>
                        <span class="btn-double-text"
                            data-text="Explore project">{{ $hero['home_contact_me_header'] }}</span>
                        {{-- <span><i class="feather icon-feather-arrow-right"></i></span> --}}
                    </span>
                </a>
            </div>

            <!-- Kolom Kanan -->
            {{-- <div class="col-lg-6">
                <img src="{{ cockpitImage($hero['home_contact_me_image']) }}" alt="Contact Image" class="img-fluid rounded shadow">
            </div> --}}
            @if ($hero['home_contact_me_image'])
                <div class="col-lg-6 cover-background h-100 md-h-500px overflow-visible"
                    style="background-image: url({{ cockpitImage($hero['home_contact_me_image']) }})">
                </div>
            @else
                <div class="col-lg-4 cover-background h-100 md-h-500px overflow-visible"
                    style="background-image: url('https://fakeimg.movexa.id/960x1100/eeeeee/cccccc?text=image')">
                </div>
            @endif
        </div>
    </div>
</section>
