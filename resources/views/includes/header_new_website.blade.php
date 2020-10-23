        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="google-site-verification" content="n5vVdIyT4Qm3MLciXAPnaZLwGVS7YHDaVgg1zpgWKYc" />
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/LogoDatabar.ico')}}">
        <link rel="icon" href="{{ url('/images/LogoDatabar.ico')}}">
        <link rel="stylesheet" href="{{ url('/css/loader.css')}}">
        {{-- <link rel="stylesheet" href="{{ url('/css/loader_2.css')}}"> --}}

        <script src="{{ url('/js/jquery.js')}}"></script>
        {{-- Lozy load --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142535765-1"></script> --}}


        {{-- font --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

        {{-- Function send mail metaTag --}}
        {{-- {{ metaTag() }} --}}


        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-142535765-1');
        </script>

    <!-- Google Tag Manager -->
    <script>
        // (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        // new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        // j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        // 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        // })(window,document,'script','dataLayer','GTM-KFX4SLC');
    </script>
    <!-- End Google Tag Manager -->
