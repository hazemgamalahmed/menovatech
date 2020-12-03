<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('myicon.ico') }}">
    
    <title>Venice Decor | Home Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    
    <!--end::Fonts -->
    
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />
    
    <!--end::Page Custom Styles -->
    
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    
    <!--end::Global Theme Styles -->
    
    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">

    <style>
        .ar-xl{
            font-weight: bold!important;
            font-size: 17px!important;
        }
        .ar-lg{
            font-weight: bold!important;
            font-size: 15px!important;
        }
        .ar-md{
            font-weight: bold!important;
            font-size: 13px!important;
        }
        .order-details-active{
            border: solid 1px;
            border-radius: 20px;
            border-bottom: 1px solid #636B99!important;
            /* background-image: linear-gradient(rgba(127, 255, 212), rgba(127, 255, 212, 0.6), rgba(127, 255, 212, 0.2)); */
            background-color: #526df633;
        }
        /* b{
            font-size: 18px!important;
        } */
        .size-20{
            font-size: 20px!important;
        }
        .size-15{
            font-weight: bold;
            font-size: 15px!important;
        }
        .size-10{
            font-weight: bold;
            font-size: 10px!important;
        }
        .size-13{
            font-weight: bold;
            font-size: 13px!important;
        }
    </style>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-footer--fixed kt-page--loading"  >
    <div id="app" style="font-family: 'Cairo', sans-serif;">
        <router-view></router-view>
    </div>
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                    ],
                    "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                    ]
                }
            }
        };
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script> --}}
    
    <!--begin::Page Vendors(used by this page) -->
    {{-- <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script> --}}
    
    {{-- <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.js" type="text/javascript"></script> --}}
    
    <!--end::Page Vendors -->
    
    <!--begin::Page Scripts(used by this page) -->
    {{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
