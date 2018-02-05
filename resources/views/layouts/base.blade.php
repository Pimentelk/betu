<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title or "Gym Autopilot CMS" }}</title>

        <!-- Bootstrap -->
        <link href="{{ asset("/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("/bower_components/gentelella/vendors/nprogress/nprogress.css") }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ asset("/bower_components/gentelella/vendors/animate.css/animate.min.css") }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset("/bower_components/gentelella/build/css/custom.min.css") }}" rel="stylesheet">
        
        @yield('style')
        
        <style>
            .login_content form div a {
                margin: 0 0 0 0 !important;
            }
        </style>
    </head>

    <body class="login">       
        <div class="login_wrapper">
            @yield('content')            
        </div>
        <center>                
            <h1><i class="fa fa-paper-plane"></i> Gym Autopilot</h1>
            <p>©{{ date("Y") }} All Rights Reserved. Gym Autopilot. <br><a href="#">Privacy</a> &amp; <a href="#">Terms</a></p>
        </center>
    </body>
</html>

