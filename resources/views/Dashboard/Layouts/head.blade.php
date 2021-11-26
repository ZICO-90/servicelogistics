<title>@yield('title')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('Dashboard/img/favicon.png')}}">
<!-- Web Fonts -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
<link rel="stylesheet" href="{{asset('Dashboard/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/fonts/icofont/icofont.min.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}">
<!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

<!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
<link rel="stylesheet" href="{{asset('Dashboard/plugins/apex/apexcharts.css')}}">
<link rel="stylesheet" href="/dashboard/fonts/elegant_icons/elegant-icons.css">
<!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

@if(App::getLocale() =='ar')
   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="{{asset('Dashboard/ar/css/style.css')}}">
   <!-- ======= END MAIN STYLES ======= -->
@else
   <link rel="stylesheet" href="{{asset('Dashboard/en/css/style.css')}}">
@endif

@yield('css')
