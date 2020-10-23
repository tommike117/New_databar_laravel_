<!DOCTYPE html>
<html lang="en" itemtype="https://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    {{-- {{ dd($data) }} --}}
    @yield('canonical')
    @include('includes/header_new_website')
    @yield('link')

</head>

<body>

    @include('includes/nav-top')
    @include('includes/nav-left')

    <div id="loader" class="setting-loader">
        <div  class="la-line-scale la-dark la-2x ">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    @yield('content')

</body>

{{-- <footer>
    @yield('home-footer')
</footer> --}}




@yield('script')


{{--
<script>
    const observer = lozad();
    observer.observe();

    const Animated = lozad('.FadeInUp', {
        loaded: function(el) {
            el.classList.add("animated","fadeInUp","delay-0.5s");
        }
    });
    Animated.observe();
</script> --}}






<script>
    var str = document.location.pathname;
    var res = str.split("/");
    console.log(res);
    if(res[1] === "")
    {
        document.getElementById("home").classList.add("active");
    }
    else
    {
        var element = document.getElementById(res[1]);
        element ? element.classList.add("active") : '';
    }


    window.addEventListener("load", () =>{
        document.querySelector('#loader').className = 'hide-loader'
    });
</script>


</html>
