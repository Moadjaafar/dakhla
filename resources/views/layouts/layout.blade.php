<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dakhla Beyond Adventure offers exciting excursions, adventures, and travel experiences in Dakhla. Explore 4x4 trips, catamaran voyages, and more!">
        
       <meta name="keywords" content="Kitesurf à Dakhla, Kitesurf en Dajla, Surf à Dakhla, Surf en Dajla, Planche à voile à Dakhla, Windsurf en Dajla, Croisières en catamaran à Dakhla, Cruceros en catamarán en Dajla, Excursions en 4x4 à Dakhla, Excursiones en 4x4 en Dajla, Safari dans le désert de Dakhla, Safari en el desierto de Dajla, Balades à dos de chameau à Dakhla, Paseos en camello en Dajla, Randonnées équestres à Dakhla, Rutas a caballo en Dajla, Observation des oiseaux à Dakhla, Observación de aves en Dajla, Pêche sportive à Dakhla, Pesca deportiva en Dajla, Visite de l'île du Dragon à Dakhla, Visita a la Isla del Dragón en Dajla, Plage Porto Rico à Dakhla, Playa Puerto Rico en Dajla, Sources d'Imlili à Dakhla, Manantiales de Imlili en Dajla, Dune Blanche à Dakhla, Duna Blanca en Dajla, Bains thermaux à Dakhla, Baños termales en Dajla, Cours de cuisine marocaine à Dakhla, Clases de cocina marroquí en Dajla, Yoga et bien-être à Dakhla, Yoga y bienestar en Dajla, Culture sahraouie à Dakhla, Cultura saharaui en Dajla, Artisanat local de Dakhla, Artesanía local de Dajla, Gastronomie locale de Dakhla, Gastronomía local de Dajla, Quoi faire à Dakhla, Qué hacer en Dajla">


        <meta name="author" content="Dakhla Beyond Adventure">
        <meta name="robots" content="index, follow">
        <meta name="language" content="fr">
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Dakhla Beyond Adventure - Unforgettable Excursions">
        <meta property="og:description" content="Discover the best adventures in Dakhla with Dakhla Beyond Adventure. Excursions, tours, and experiences tailored to your needs.">
        <meta property="og:image" content="{{ asset('assets/images/favicon.svg') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ app()->getLocale() }}">

        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Dakhla Beyond Adventure - Explore Excursions">
        <meta name="twitter:description" content="Book your next adventure in Dakhla with us. 4x4 excursions, desert tours, and catamaran voyages.">
        <meta name="twitter:image" content="{{ asset('assets/images/favicon.svg') }}">

        <title>Dakhla Beyond Adventure</title>
        <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" >
<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YKLPZ4Z6X2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YKLPZ4Z6X2');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MK5QR7CW');</script>
<!-- End Google Tag Manager -->
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>

            </style>
        @endif
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MK5QR7CW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <x-header />
        <main>
            @yield('content')
            <x-mobile />
            <a href="https://wa.me/+212600127223" class="float" target="_blank">
            <img src="{{ asset('assets/images/whatsapp.png') }}" class="my-float" alt="">
            </a>
        </main>
        <x-footer />
        <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js"></script>

        <script src="{{ asset('assets/js/costum.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        @stack('scripts')
    </body>
</html>
