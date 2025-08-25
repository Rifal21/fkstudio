<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.templates.crafto.common.seo')
    @include('layouts.templates.crafto.common.css')
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840">
    {{-- <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
    </div> --}}
    @include('layouts.templates.crafto.navbar')
    {{ $slot }}
    @include('layouts.templates.crafto.footer')
    @include('layouts.templates.crafto.common.js')
</body>

</html>
