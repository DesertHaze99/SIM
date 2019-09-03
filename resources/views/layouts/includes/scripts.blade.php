<script src="{{ asset('distribution/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('distribution/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('distribution/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('distribution/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('distribution/js/charts-home.js') }}"></script>

@yield('librariesJS')
<!-- Main File-->
<script src="{{ asset('distribution/js/front.js') }}"></script>
@yield('scripts')

@stack('scripts')
