<!-- js -->
<script type="text/javascript" src="{{asset('web/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- stats -->
<script src="{{asset('web/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('web/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- Slider script -->
<script src="{{asset('web/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            manualControls: '#slider3-pager',
        });
    });
</script>

<!-- /nav -->
<!-- requried-jsfiles-for owl -->
<script src="{{asset('web/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            items: 1,
            lazyLoad: false,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->

<script src="{{asset('web/js/modernizr-2.6.2.min.js')}}"></script>
<!-- //nav -->
<!-- js for portfolio lightbox -->
<script src="{{asset('web/js/jquery.chocolat.js')}}"></script>
<link rel="stylesheet " href="{{asset('web/css/chocolat.css')}}" type="text/css" media="all" />
<!--light-box-files -->
<script type="text/javascript ">
    $(function () {
        $('.portfolio-grids a').Chocolat();
    });
</script>
<!-- /js for portfolio lightbox -->

<script type="text/javascript" src="{{asset('web/js/bootstrap-3.1.1.min.js')}}"></script>
</body>
</html>
