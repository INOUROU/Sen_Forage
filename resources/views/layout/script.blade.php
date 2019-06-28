<script type="text/javascript" src="{{asset('assets/js/jquery.3.2.1.min.js')}}" ></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('assets/js/demo.js')}}"></script>

{{-- 	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script> --}}
	<script type="text/javascript" src="{{asset('assets/DataTables/DataTables/js/jquery.dataTables.min.js')}}"></script>

	<script type="text/javascript" src=	'https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js'></script>
	<script type="text/javascript" src=	'https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js'></script>
	<script type="text/javascript" src=	'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
	<script type="text/javascript" src=	'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js'></script>
	<script type="text/javascript" src=	'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'></script>
	<script type="text/javascript" src=	'https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js'></script>
	<script type="text/javascript" src=	'https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js'></script>
	<script type="text/javascript" src='https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js'></script>											
@stack('scripts')
