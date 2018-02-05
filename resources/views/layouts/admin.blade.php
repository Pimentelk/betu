<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>    
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ $page_title or "BetU" }}</title>

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap -->
            <link href="{{ asset('/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{ asset('/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
            <!-- NProgress -->
            <link href="{{ asset('/bower_components/gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
            
            <!-- FullCalendar -->
            <link href="{{ asset('/bower_components/gentelella/vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
            <link href="{{ asset('/bower_components/gentelella/vendors/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet" media="print">

            <!-- Custom styling plus plugins -->
            <link href="{{ asset('/bower_components/gentelella/build/css/custom.min.css') }}" rel="stylesheet">

            <style>
                .site_title i {
                    border: 0;
                }
                .loader_overlay {
                    position:fixed;
                    background:rgba(255,255,255,0.8);
                    width:100%;
                    height:100vh;
                    z-index:999;
                    display: none;
                }
                .loader_overlay .fa-spinner {
                    margin:25% 50%;
                }
                .full_col {
                    padding: 10px 20px 0;
                    margin-left: 0;
                    min-height: 100vh;
                }
                body .container.body .full_col {
                    background: #F7F7F7;
                }
                .fc-event {
                    background: #5da9e9;
                    border-color: #5da9e9;
                }
                .container {
                    padding:15px;
                }
            </style>

            @yield('styles')

    </head>
    <body>
        
        <div class="container body">
            <div class="main_container">                
                                
                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('content')
                </div>
                <!-- /page content -->

            </div>
        </div>
    
        <form id="logout-form" action="{{ url('/client/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        
        <!-- jQuery -->
        <script src="{{ asset('/bower_components/gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
        
        <!-- Bootstrap -->
        <script src="{{ asset('/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        
        <!-- FastClick -->
        <script src="{{ asset('/bower_components/gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
        
        <!-- NProgress -->
        <script src="{{ asset('/bower_components/gentelella/vendors/nprogress/nprogress.js') }}"></script>
        
        <!-- FullCalendar -->
        <script src="{{ asset('/bower_components/gentelella/vendors/moment/min/moment.min.js') }}"></script> 
        <script src="{{ asset('/bower_components/gentelella/vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	    
        <!-- Knockout -->
        <script type="text/javascript" src="{{ asset('/bower_components/knockout/dist/knockout.js') }}"></script>
    	    	
        @yield('scripts')

	<!-- Custom Theme Scripts -->
        <script src="{{ asset('/bower_components/gentelella/build/js/custom.min.js') }}"></script>
        
        <script>
            function loader(show) {
                if (show) {
                    $('.loader_overlay').show();
                } else {
                    $('.loader_overlay').hide();
                }                
            }
        </script>
    </body>
</html>
