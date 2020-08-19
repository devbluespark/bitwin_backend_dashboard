

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script src="{{asset('assets/backend/js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/Chart.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/dashboard.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/widgets.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/backend/js/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/backend/js/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('assets/backend/js/chosen.jquery.js')}}" type="text/javascript"></script>





<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

<script>
    // In your Javascript (external .js resource or <script> tag)
    (function($) {
        $('.js-example-basic-single').select2()

    })(jQuery);


</script>

<script>
    (function($) {
        $('.js-example-basic-multiple').select2();

    })(jQuery);
</script>