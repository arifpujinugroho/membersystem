<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') || APSPBI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Web Developer PKM UNY - Arif Puji Nugroho">
    <link rel="icon" href="{{url('favicon.ico')}}" sizes="32x32" />
    <link rel="apple-touch-icon-precomposed" href="{{url('favicon.ico')}}" />
    <meta property="og:url" content="http://member.apspbi.uny.ac.id">

    <!-- Google font
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet"-->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.mCustomScrollbar.css')}}">

    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/pnotify/css/pnotify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/pnotify/css/pnotify.brighttheme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/pnotify/css/pnotify.buttons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/pnotify/css/pnotify.history.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/pnotify/css/pnotify.mobile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/pnotify/notify.css')}}">


    <!-- weather-icons -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/weather-icons/css/weather-icons-wind.min.css')}}">
    <!--SVG Icons Animated-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/SVG-animated/svg-weather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/simple-line-icons.cs')}}s">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/ionicons.css')}}">

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/sweetalert/css/sweetalert.css')}}">

    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/component.css')}}">

    @yield('header')


</head>

<body>
<input type="hidden" id="token" value="{{ csrf_token() }}">
    <input type="hidden" id="thisurl" value="{{url('/')}}">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a href="javascript:location.reload(true)">
                            <h1 style="font-family:sans-serif;"><i class="fa fa-user" aria-hidden="true"></i> APSPBI</h1>
                        </a>
                        <a class="mobile-options">
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            {{--<li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>--}}
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                @if (Request::path() == 'register')
                                <a href="{{url('/')}}"><button class="btn btn-danger btn-mini"><i class="ti-home"></i>
                                        Back to home</button></a>
                                @endif
                                @auth
                                <a href="{{route('logout')}}"><button class="btn btn-danger btn-mini"><i class="fa fa-sign-out"></i>Logout</button></a>
                                @else
                                <a><button data-toggle="modal" data-target="#modalLogin" type="button" class="btn btn-primary">Login</button></a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')
                                </div>
                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{url('/masuk')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="emaillogin">Email</label>
                  <input type="email" class="form-control" name="emaillogin" id="emaillogin" aria-describedby="emailHelpId" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="passwordlogin">Password</label>
                  <input type="password" class="form-control" name="passwordlogin" id="passwordlogin" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm">Login</button></form>
            </div>
        </div>
    </div>
</div>


    @yield('end')


    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{url('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}">
    </script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{url('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}">
    </script>
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}">
    </script>

    <script src="{{url('assets/js/pcoded.min.js')}}"></script>

    <?php
    date_default_timezone_set("Asia/Jakarta");
    $b = time();
    $hour = date("G",$b);
    ?>
    @if ($hour >= 18 || $hour <= 6 ) <script src="{{asset('assets/js/darkhome.js')}}">
        </script>
        @else
        <script src="{{asset('assets/js/lighthome.js')}}"></script>
        @endif

        <script src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/script.js')}}"></script>
        {{--<script type="text/javascript" src="{{url('assets/js/plus.js')}}"></script>--}}

        <!-- pnotify js -->
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.desktop.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.buttons.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.confirm.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.callbacks.js')}}">
        </script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.history.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.mobile.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bower_components/pnotify/js/pnotify.nonblock.js')}}"></script>

        <!-- sweetalert -->
        <script type="text/javascript" src="{{url('assets/bower_components/sweetalert/js/sweetalert.min.js')}}">
        </script>


        <!-- modalEffects js nifty modal window effects -->
        <script type="text/javascript" src="{{url('assets/js/modalEffects.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/classie.js')}}"></script>

        <script type="text/javascript" src="{{url('assets/js/jquery.validationEngine-en.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/jquery.validationEngine.js')}}"></script>

        @include('layout.browser')

        @yield('footer')

        <script>
            $(document).ready(function () {
                jQuery('.form-validation').validationEngine();
            });

        </script>
        @include('layout.notification')

        {{--<div  style="text-align:center;font-size:24px;color:red; margin: 0px; padding: 0px; border: 0px; background: url(&quot;{{url('')}}&quot;)
        center center / 79px 23px no-repeat rgb(255, 255, 255); max-width: none; max-height: none; position: fixed;
        height: 36px !important; width: 256px !important; overflow: hidden !important; bottom: 0px !important; right:
        0px !important; z-index: 1000003 !important; cursor: pointer !important; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px
        5px 0px; border-top-left-radius: 2px;" id="time"></div>--}}
</body>

</html>
