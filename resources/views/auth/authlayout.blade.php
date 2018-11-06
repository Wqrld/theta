<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Schooolname') }} - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#0e4688">

        @section('scripts')

            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/authpage.css') }}"


            <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                  page. However, you can choose any other skin. Make sure you
                  apply the skin class to the body tag so the changes take effect. -->
            <link rel="stylesheet" href="{{ asset('css/skins/skin-blue.min.css') }}">



            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        @show
    </head>
    <body id="particles-js" class="hold-transition login-page">
        <div class="container">
            <div id="login-position-elements">
                <div class="login-logo">
                    {{ config('app.name', 'Appname') }}
                </div>
                @yield('content')
                <p class="small login-copyright text-center">
                    Copyright &copy; 2015 - {{ date('Y') }} <a href="" target="_blank">yourschool</a>.<br />
                </p>
            </div>
        </div>
        <div class="login-corner-info small">
            <strong><i class="fa fa-fw fa-code-fork"></i></strong> {{ \Tremby\LaravelGitVersion\GitVersionHelper::getVersion() }}<br />
            <strong><i class="fa fa-fw fa-clock-o"></i></strong> {{ round(microtime(true) - LARAVEL_START, 3) }}s
        </div>

    {{--
        {!! Theme::js('js/autocomplete.js?t={cache-version}') !!}
        {!! Theme::js('vendor/particlesjs/particles.min.js?t={cache-version}') !!}
--}}
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>

        <script type="text/javascript">
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            $(function () {
                particlesJS.load('particles-js', '/particles.json', function() {});
            })
        </script>
{{--
        @if(config('theta.lang.in_context')) {!! Theme::js('vendor/phraseapp/phraseapp.js?t={cache-version}') !!} @endif

        --}}
    </body>
</html>
