<!DOCTYPE html>


<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <meta name="description" content="User profile view and edit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="/js/jquery-1.9.1.min.js"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/demo/demo12/base/style.bundle.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/demo/demo12/media/img/logo/favicon.ico') }}" />
    @yield('customCSS')


</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <div class="m-grid m-grid--hor m-grid--root m-page">

        <!-- begin:: Page -->

        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            @include('partials.navbar')
            @include('partials.aside_menu')
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content">

                    @yield('content')

                </div>
            </div>

        </div>

    </div>

    <!--end::Base Scripts -->

    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/demo12/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Vendors -->
    <script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
    <!--end::Page Vendors -->
    <!--begin::Page Snippets -->
    <script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>





    @yield('customJS')
    <!-- end::Body -->


</body>

</html>