<!doctype html>

<html lang="id">

<head>
    <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
    @yield('title', 'SMK INFOKOM Kota Bogor')
</title>

<meta
    name="description"
    content="@yield('description', 'SMK INFOKOM Kota Bogor — Sekolah Menengah Kejuruan Pusat Keunggulan.')"
>

<meta name="theme-color" content="#000A1E">

<meta
    property="og:title"
    content="@yield('title', 'SMK INFOKOM Kota Bogor')"
>

<meta
    property="og:description"
    content="@yield('description', 'SMK INFOKOM Kota Bogor — Sekolah Menengah Kejuruan Pusat Keunggulan.')"
>

<meta property="og:type" content="website">


{{-- Google Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
    rel="stylesheet"
>


{{-- Bootstrap 5.3 --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


{{-- Bootstrap Icons --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    rel="stylesheet"
>


{{-- CSS Custom --}}
<link
    rel="stylesheet"
    href="{{ asset('CSS/style.css') }}"
>

@stack('styles')


</head>

<body data-page="@yield('page', '')">


{{-- Navbar --}}
@include('components.navbar')


{{-- Main Content --}}
<main id="main">

    @yield('content')

</main>


{{-- Footer --}}
@include('components.footer')


{{-- Bootstrap JavaScript --}}
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>


{{-- JavaScript Custom --}}
<script src="{{ asset('JS/script.js') }}"></script>

@stack('scripts')


</body>

</html>
