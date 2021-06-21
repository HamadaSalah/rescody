</body>
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{ asset('assets/js/plugins/chartist.min.js')}}"></script>
{{-- <script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script> --}}
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=2.0.0 ')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.initDashboardPageCharts();

        demo.showNotification();

    $('.alert-success').delay(500).fadeOut('slow');
    });
</script>
</html>
