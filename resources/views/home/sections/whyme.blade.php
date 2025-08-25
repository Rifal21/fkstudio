<section class="py-5 min-vh-100 d-flex align-items-center position-relative overflow-hidden">
    <div class="bg-grid position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container position-relative">
        <h4 class="text-center fw-bold mb-5 animate-fade-up">{{ $hero['home_why_title'] }}</h4>
        <div class="row g-4">
            @foreach ($hero['home_why_card_title'] as $index => $item)
                @php
                    $text = $hero['home_why_card_text'][$index] ?? '';
                    $icon = $hero['home_why_card_icon'][$index] ?? 'bi-info-circle';
                @endphp
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 p-4 animate-fade-up">
                        <div class="card-body text-start">
                            <div class="mb-3 text-danger" style="font-size: 3rem;">
                                <i class="bi {{ $icon }} mb-5"></i>
                            </div>
                            <h5 class="card-title fw-bold fs-5">{{ $item }}</h5>
                            <div class="card-text text-muted fs-6">{!! $text !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<style>
    /* Background grid */
    .bg-grid {
        background-color: #f8f9fa;
        background-image:
            linear-gradient(#e9ecef 1px, transparent 1px),
            linear-gradient(90deg, #e9ecef 1px, transparent 1px);
        background-size: 40px 40px;
        /* ukuran kotak */
        z-index: 0;
    }

    /* Animasi */
    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-up {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeUp 0.8s ease forwards;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".animate-fade-up").forEach((el, i) => {
            el.style.animationDelay = `${i * 0.2}s`;
        });
    });
</script>
