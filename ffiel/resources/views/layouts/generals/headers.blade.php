<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="FFIEL, ffiel, ffiel león, FFIEL LEON"/>
<meta name="author" content="FFIEL" />
<link rel="shortcut icon" href="{{ asset(env('FAVICO')) }}">
<link rel="apple-touch-icon" href="{{ asset(env('FAVICO')) }}">
<link rel="image_src" type="image/jpeg" href="{{ asset(env('FAVICO')) }}" />

<title>FFIEL - @yield('page_title')</title>

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

<!-- Styles -->
{{--
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
--}}
<link href="{{ asset('materialize/css/materialize.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/galleyIndex.css') }}" rel="stylesheet">

<link href="{{ asset('bower_components/angular-advanced-searchbox/dist/angular-advanced-searchbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/angular-ui-notification/dist/angular-ui-notification.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{ asset('css/modal_edit.css') }}" rel="stylesheet">

<style>
    main {
        flex: 1 0 auto;
    }
</style>
@yield('extra_css')