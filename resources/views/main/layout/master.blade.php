<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('main/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
@include('main.partials.navbar')

@yield('content')

@include('main.partials.footer')
@include('sweetalert::alert')
<!-- jquery -->
<script src="{{asset('main/js/jquery-1.12.1.min.js')}}"></script>
<script src="{{asset('main/js/popper.min.js')}}"></script>
<script src="{{asset('main/js/bootstrap.min.js')}}"></script>
<script src="{{asset('main/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('main/js/swiper.min.js')}}"></script>
<script src="{{asset('main/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('main/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('main/js/slick.min.js')}}"></script>
<script src="{{asset('main/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('main/js/waypoints.min.js')}}"></script>
<script src="{{asset('main/js/custom.js')}}"></script>
</body>
</html>
