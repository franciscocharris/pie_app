{{-- <!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Title -->
        <title>@yield('title', 'Plazaganga')</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('vendor/electro/font-awesome/css/fontawesome-all.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/font-electro.css') }}">

        <!-- CSS Implementing Plugins -->
        @yield('plugins_css')

        <!-- CSS Electro Template -->
        <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles_propio.css') }}">
    </head>
    
<body>

    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
            <!-- Topbar -->
            <div class="u-header-topbar py-2 d-none d-xl-block">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="topbar-left">
                            <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to plazaganga</a>
                        </div>
                        <div class="topbar-right ml-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                </li>
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    <a href="../shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                </li>
                                
                                <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                    @guest
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    </li>
                                    <i class="ec ec-user mr-1"></i> 
                                    <a class="u-header-topbar__nav-link" href="{{ route('register') }}">Registrarse</a> 
                                    <span class="text-gray-50">or</span> 
                                    <a class="u-header-topbar__nav-link" href="{{ route('login') }}">Login</a>
                                        
                                    @else
                                        <div class="d-flex align-items-center">
                                            <!-- Language -->
                                            <div class="position-relative">
                                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                                    aria-controls="languageDropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="hover"
                                                    data-unfold-target="#languageDropdown"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-user mr-1"></i> {{ Auth::user()->name }}</span>
                                                </a>

                                                <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                                    <a class="dropdown-item active" href="{{ route('user.edit', Auth::user()->id) }}">cuenta</a>
                                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                                                    <div>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                    
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Language -->
                                        </div>
                                        
                                    @endguest
                                    
                                </li>
                                {{-- <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                    
                                    <!-- Account Sidebar Toggle Button -->
                                    <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                        aria-controls="sidebarContent"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarContent"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInRight"
                                        data-unfold-animation-out="fadeOutRight"
                                        data-unfold-duration="500">
                                        
                                    </a>
                                    <!-- End Account Sidebar Toggle Button -->
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar -->

            <!-- Logo-Search-header-icons -->
            <div class="py-2 py-xl-5 bg-primary-down-lg">
                <div class="container my-0dot5 my-xl-0">
                    <div class="row align-items-center">
                        <!-- Logo-offcanvas-menu -->
                        <div class="col-auto">
                            <!-- Nav -->
                            <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                <!-- Logo -->
                                <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{route('home')}}" aria-label="Electro">
                                    <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                        <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                        </path>
                                    </svg>
                                </a>
                                <!-- End Logo -->

                                <!-- Fullscreen Toggle Button -->
                                <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                    aria-controls="sidebarHeader"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarHeader1"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInLeft"
                                    data-unfold-animation-out="fadeOutLeft"
                                    data-unfold-duration="500">
                                    <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                                <!-- End Fullscreen Toggle Button -->
                            </nav>
                            <!-- End Nav -->

                            <!-- ========== HEADER SIDEBAR ========== -->
                            <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                <div class="u-sidebar__scroller">
                                    <div class="u-sidebar__container">
                                        <div class="u-header-sidebar__footer-offset pb-0">
                                            <!-- Toggle Button -->
                                            <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                <button type="button" class="close ml-auto"
                                                    aria-controls="sidebarHeader"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-hide-on-scroll="false"
                                                    data-unfold-target="#sidebarHeader1"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-animation-in="fadeInLeft"
                                                    data-unfold-animation-out="fadeOutLeft"
                                                    data-unfold-duration="500">
                                                    <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                </button>
                                            </div>
                                            <!-- End Toggle Button -->

                                            <!-- Content -->
                                            <div class="js-scrollbar u-sidebar__body">
                                                <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                    <!-- Logo -->
                                                    <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="../home/index.html" aria-label="Electro">
                                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                            <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <!-- End Logo -->

                                                    <!-- List -->
                                                    <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                        <!-- Home Section -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                                Home & Static Pages
                                                            </a>

                                                            <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Home - v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/index.html">Home v1</a></li>
                                                                    <!-- End Home - v1 -->
                                                                    <!-- Home - v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v2.html">Home v2</a></li>
                                                                    <!-- End Home - v2 -->
                                                                    <!-- Home - v3 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3.html">Home v3</a></li>
                                                                    <!-- End Home - v3 -->
                                                                    <!-- Home - v3-full-color-bg -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3-full-color-bg.html">Home v3.1</a></li>
                                                                    <!-- End Home - v3-full-color-bg -->
                                                                    <!-- Home - v4 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v4.html">Home v4</a></li>
                                                                    <!-- End Home - v4 -->
                                                                    <!-- Home - v5 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v5.html">Home v5</a></li>
                                                                    <!-- End Home - v5 -->
                                                                    <!-- Home - v6 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v6.html">Home v6</a></li>
                                                                    <!-- End Home - v6 -->
                                                                    <!-- Home - v7 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v7.html">Home v7</a></li>
                                                                    <!-- End Home - v7 -->
                                                                    <!-- About -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/about.html">About</a></li>
                                                                    <!-- End About -->
                                                                    <!-- Contact v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v1.html">Contact v1</a></li>
                                                                    <!-- End Contact v1 -->
                                                                    <!-- Contact v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v2.html">Contact v2</a></li>
                                                                    <!-- End Contact v2 -->
                                                                    <!-- FAQ -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/faq.html">FAQ</a></li>
                                                                    <!-- End FAQ -->
                                                                    <!-- Store Directory -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/store-directory.html">Store Directory</a></li>
                                                                    <!-- End Store Directory -->
                                                                    <!-- Terms and Conditions -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/terms-and-conditions.html">Terms and Conditions</a></li>
                                                                    <!-- End Terms and Conditions -->
                                                                    <!-- 404 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../home/404.html">404</a></li>
                                                                    <!-- End 404 -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Home Section -->

                                                        <!-- Shop Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                Shop Pages
                                                            </a>

                                                            <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Shop Grid -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid.html">Shop Grid</a></li>
                                                                    <!-- End Shop Grid -->

                                                                    <!-- Shop Grid Extended -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid-extended.html">Shop Grid Extended</a></li>
                                                                    <!-- End Shop Grid Extended -->

                                                                    <!-- Shop List View -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view.html">Shop List View</a></li>
                                                                    <!-- End Shop List View -->

                                                                    <!-- Shop List View Small -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view-small.html">Shop List View Small</a></li>
                                                                    <!-- End Shop List View Small -->

                                                                    <!-- Shop Left Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                                    <!-- End Shop Left Sidebar -->

                                                                    <!-- Shop Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-full-width.html">Shop Full width</a></li>
                                                                    <!-- End Shop Full width -->

                                                                    <!-- Shop Right Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                    <!-- End Shop Right Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Shop Pages -->

                                                        <!-- Product Categories -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                                Product Categories
                                                            </a>

                                                            <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                    <!-- 4 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-4-column-sidebar.html">4 Column Sidebar</a></li>
                                                                    <!-- End 4 Column Sidebar -->

                                                                    <!-- 5 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-5-column-sidebar.html">5 Column Sidebar</a></li>
                                                                    <!-- End 5 Column Sidebar -->

                                                                    <!-- 6 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-6-column-full-width.html">6 Column Full width</a></li>
                                                                    <!-- End 6 Column Full width -->

                                                                    <!-- 7 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-7-column-full-width.html">7 Column Full width</a></li>
                                                                    <!-- End 7 Column Full width -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Product Categories -->

                                                        <!-- Single Product Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                                Single Product Pages
                                                            </a>

                                                            <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Single Product Extended -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-extended.html">Single Product Extended</a></li>
                                                                    <!-- End Single Product Extended -->

                                                                    <!-- Single Product Fullwidth -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-fullwidth.html">Single Product Fullwidth</a></li>
                                                                    <!-- End Single Product Fullwidth -->

                                                                    <!-- Single Product Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                    <!-- End Single Product Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Single Product Pages -->

                                                        <!-- Ecommerce Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                                Ecommerce Pages
                                                            </a>

                                                            <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Shop -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop.html">Shop</a></li>
                                                                    <!-- End Shop -->

                                                                    <!-- Cart -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/cart.html">Cart</a></li>
                                                                    <!-- End Cart -->

                                                                    <!-- Checkout -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/checkout.html">Checkout</a></li>
                                                                    <!-- End Checkout -->

                                                                    <!-- My Account -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/my-account.html">My Account</a></li>
                                                                    <!-- End My Account -->

                                                                    <!-- Track your Order -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/track-your-order.html">Track your Order</a></li>
                                                                    <!-- End Track your Order -->

                                                                    <!-- Vender -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="{{route('seller.create')}}">Vender</a></li>
                                                                    <!-- End Vender -->

                                                                    <!-- wishlist -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/wishlist.html">wishlist</a></li>
                                                                    <!-- End wishlist -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Ecommerce Pages -->

                                                        <!-- Shop Columns -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                                Shop Columns
                                                            </a>

                                                            <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list">
                                                                    <!-- 7 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-7-columns-full-width.html">7 Column Full width</a></li>
                                                                    <!-- End 7 Column Full width -->

                                                                    <!-- 6 Column Full width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-6-columns-full-width.html">6 Column Full width</a></li>
                                                                    <!-- End 6 Column Full width -->

                                                                    <!-- 5 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-5-columns-sidebar.html">5 Column Sidebar</a></li>
                                                                    <!-- End 5 Column Sidebar -->

                                                                    <!-- 4 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-4-columns-sidebar.html">4 Column Sidebar</a></li>
                                                                    <!-- End 4 Column Sidebar -->

                                                                    <!-- 3 Column Sidebar -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-3-columns-sidebar.html">3 Column Sidebar</a></li>
                                                                    <!-- End 3 Column Sidebar -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Shop Columns -->

                                                        <!-- Blog Pages -->
                                                        <li class="u-has-submenu u-header-collapse__submenu">
                                                            <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                                Blog Pages
                                                            </a>

                                                            <div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                <ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
                                                                    <!-- Blog v1 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v1.html">Blog v1</a></li>
                                                                    <!-- End Blog v1 -->

                                                                    <!-- Blog v2 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v2.html">Blog v2</a></li>
                                                                    <!-- End Blog v2 -->

                                                                    <!-- Blog v3 -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v3.html">Blog v3</a></li>
                                                                    <!-- End Blog v3 -->

                                                                    <!-- Blog Full Width -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-full-width.html">Blog Full Width</a></li>
                                                                    <!-- End Blog Full Width -->

                                                                    <!-- Single Blog Post -->
                                                                    <li><a class="u-header-collapse__submenu-nav-link" href="../blog/single-blog-post.html">Single Blog Post</a></li>
                                                                    <!-- End Single Blog Post -->
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- End Blog Pages -->
                                                    </ul>
                                                    <!-- End List -->
                                                </div>
                                            </div>
                                            <!-- End Content -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- ========== END HEADER SIDEBAR ========== -->
                        </div>
                        <!-- End Logo-offcanvas-menu -->
                        <!-- Search Bar -->
                        <div class="col d-none d-xl-block">
                            <form class="js-focus-state">
                                <label class="sr-only" for="searchproduct">Search</label>
                                <div class="input-group">
                                    <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                    <div class="input-group-append">
                                        <!-- Select -->
                                        <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                            data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                            <option value="one" selected>Todas Las categorias</option>
                                            @foreach (\Helper::AllCategories() as $category)
                                                <option value="{{$category->name}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <!-- End Select -->
                                        <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                            <span class="ec ec-search font-size-24"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Search Bar -->
                        <!-- Header Icons -->
                        <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                            <div class="d-inline-flex">
                                <ul class="d-flex list-unstyled mb-0 align-items-center">
                                    <!-- Search -->
                                    <li class="col d-xl-none px-2 px-sm-3 position-static">
                                        <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Search"
                                            aria-controls="searchClassic"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-target="#searchClassic"
                                            data-unfold-type="css-animation"
                                            data-unfold-duration="300"
                                            data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true"
                                            data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">
                                            <span class="ec ec-search"></span>
                                        </a>

                                        <!-- Input -->
                                        <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                            <form class="js-focus-state input-group px-3">
                                                <input class="form-control" type="search" placeholder="Search Product">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Input -->
                                    </li>
                                    <!-- End Search -->
                                    <li class="col d-none d-xl-block text-dark"><a href="{{route('seller.create')}}" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover text-reset btn-vender"> Vender  <i class="text-reset fas fa-plus"></i></a></li>
                                    <li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                    <li class="col d-xl-none px-2 px-sm-3"><a href="{{ route('dashboard') }}" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                    <!-- car -->
                                    <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                        <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex" data-toggle="tooltip" data-placement="top" title="" aria-controls="basicDropdownHover" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#basicDropdownHover" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut" data-original-title="Cart">
                                            <i class="font-size-22 ec ec-shopping-bag"></i>
                                            <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                            <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                        </div>
                                        <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0 u-unfold--css-animation u-unfold--hidden" aria-labelledby="basicDropdownHoverInvoker" style="animation-duration: 300ms;">
                                            <ul class="list-unstyled px-3 pt-3">
                                                <li class="border-bottom pb-3 mb-3">
                                                    <div class="">
                                                        <ul class="list-unstyled row mx-n2">
                                                            <li class="px-2 col-auto">
                                                                <img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description">
                                                            </li>
                                                            <li class="px-2 col">
                                                                <h5 class="text-blue font-size-14 font-weight-bold">Ultra Wireless S50 Headphones S50 with Bluetooth</h5>
                                                                <span class="font-size-14">1 × $1,100.00</span>
                                                            </li>
                                                            <li class="px-2 col-auto">
                                                                <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="border-bottom pb-3 mb-3">
                                                    <div class="">
                                                        <ul class="list-unstyled row mx-n2">
                                                            <li class="px-2 col-auto">
                                                                <img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description">
                                                            </li>
                                                            <li class="px-2 col">
                                                                <h5 class="text-blue font-size-14 font-weight-bold">Widescreen NX Mini F1 SMART NX</h5>
                                                                <span class="font-size-14">1 × $685.00</span>
                                                            </li>
                                                            <li class="px-2 col-auto">
                                                                <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="flex-center-between px-4 pt-2">
                                                <a href="../shop/cart.html" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">View cart</a>
                                                <a href="../shop/checkout.html" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Icons -->
                    </div>
                </div>
            </div>
            <!-- End Logo-Search-header-icons -->

            <!-- Primary-menu-wide -->
            <div class="d-none d-xl-block bg-primary">
                <div class="container" style="max-width:95%">
                    <div class="min-height-45">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">
                                    <!-- Home -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut"
                                        data-position="left">
                                        <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                                        <!-- Home - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="index.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                        <li><a href="home-v2.html" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
                                                        <li><a href="home-v3.html" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
                                                        <li><a href="home-v3-full-color-bg.html" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
                                                        <li><a href="home-v4.html" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
                                                        <li><a href="home-v5.html" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
                                                        <li><a href="home-v6.html" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
                                                        <li><a href="home-v7.html" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
                                                        <li><a href="about.html" class="nav-link u-header__sub-menu-nav-link">About</a></li>
                                                        <li><a href="contact-v1.html" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
                                                        <li><a href="contact-v2.html" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
                                                        <li><a href="faq.html" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                        <li><a href="store-directory.html" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
                                                        <li><a href="terms-and-conditions.html" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
                                                        <li><a href="404.html" class="nav-link u-header__sub-menu-nav-link">404</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Shop Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="../shop/shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                        <li><a href="../shop/shop-grid-extended.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
                                                        <li><a href="../shop/shop-list-view.html" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
                                                        <li><a href="../shop/shop-list-view-small.html" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
                                                        <li><a href="../shop/shop-left-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
                                                        <li><a href="../shop/shop-full-width.html" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
                                                        <li><a href="../shop/shop-right-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Product Categories</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="../shop/product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                        <li><a href="../shop/product-categories-5-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                        <li><a href="../shop/product-categories-6-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                        <li><a href="../shop/product-categories-7-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="../shop/single-product-extended.html" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
                                                        <li><a href="../shop/single-product-fullwidth.html" class="nav-link u-header__sub-menu-nav-link">Single Product Fullwidth</a></li>
                                                        <li><a href="../shop/single-product-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Single Product Sidebar</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="../shop/shop.html" class="nav-link u-header__sub-menu-nav-link">Shop</a></li>
                                                        <li><a href="../shop/cart.html" class="nav-link u-header__sub-menu-nav-link">Cart</a></li>
                                                        <li><a href="../shop/checkout.html" class="nav-link u-header__sub-menu-nav-link">Checkout</a></li>
                                                        <li><a href="../shop/my-account.html" class="nav-link u-header__sub-menu-nav-link">My Account</a></li>
                                                        <li><a href="../shop/track-your-order.html" class="nav-link u-header__sub-menu-nav-link">Track your Order</a></li>
                                                        <li><a href="../shop/compare.html" class="nav-link u-header__sub-menu-nav-link">Compare</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Blog Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="../blog/blog-v1.html" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
                                                        <li><a href="../blog/blog-v2.html" class="nav-link u-header__sub-menu-nav-link">Blog v2</a></li>
                                                        <li><a href="../blog/blog-v3.html" class="nav-link u-header__sub-menu-nav-link">Blog v3</a></li>
                                                        <li><a href="../blog/blog-full-width.html" class="nav-link u-header__sub-menu-nav-link">Blog Full Width</a></li>
                                                        <li><a href="../blog/single-blog-post.html" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Shop Columns</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="../shop/shop-7-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                        <li><a href="../shop/shop-6-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                        <li><a href="../shop/shop-5-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                        <li><a href="../shop/shop-4-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                        <li><a href="../shop/shop-3-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">3 Column Sidebar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Home - Mega Menu -->
                                    </li>
                                    <!-- End Home -->

                                    @foreach (\Helper::AllCategories() as $category)
                                    
                                        <!-- Smart Phones -->
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                            <a id="{{$category->slug}}" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">{{$category->name}}</a>

                                            <!-- Smart Phones - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="{{$category->slug}}">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Accessories</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Headsets</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Cables &amp; Chargers</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Electronic Accessories</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Selfie Sticks</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Internal Batteries</a></li>
                                                                </ul>
                                                                <span class="u-header__sub-menu-title">Cases &amp; Covers</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone X<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Samsung S9</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below AED 59</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Xiaomi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone 7</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Tablets</span>
                                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">iPads</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Microsoft Surface</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Innjoo</a></li>
                                                                </ul>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <span class="u-header__sub-menu-title">Shop By Price</span>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone X<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Samsung S9</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Below AED 59</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For Xiaomi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">For iPhone 7</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">Mobiles</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motorola</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Oppo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic<br> </a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HTC</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blackberry</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">LG</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Micromax</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nokia</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Huawei</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="u-header__sub-menu-title">#Trending</span>
                                                                <ul class="u-header__sub-menu-nav-group">
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Oppo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Panasonic</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Samsung</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Lenovo</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Mi</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Motorola</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Nokia</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Huawei</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">HTC</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Blackberry</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">LG</a></li>
                                                                    <li><a href="#" class="nav-link u-header__sub-menu-nav-link">Micromax</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="d-block">
                                                            @if (isset($category->images[0]['image_path']))
                                                                <img class="img-fluid" alt="{{$category->name}}" src="{{ route('image.file', ['disk' => 'categories' , 'filename' => $category->images[0]['image_path'] ] ) }}">
                                                            @else
                                                                <p>{{$category->name}}</p>    
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Smart Phones - Mega Menu -->
                                        </li>
                                        <!-- End Blog -->
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>
                </div>
            </div>
            <!-- End Primary-menu-wide -->
        </div>
    {{-- </header> --}}
    <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        {{-- <main id="content" role="main">
            @yield('main')
        </main> --}}
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        {{-- <footer>
            <!-- Footer-top-widget -->
            <div class="container d-none d-lg-block mb-3">
                <div class="row">
                    <div class="col-wd-3 col-lg-4">
                        <div class="widget-column">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                            </div>
                            <ul class="list-unstyled products-group">
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$1149.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$210.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$180.00</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img5.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img6.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img7.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$725.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img8.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$2999.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="../../assets/img/75X75/img9.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$439.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 d-none d-wd-block">
                        <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="../../assets/img/330X360/img1.jpg" alt="Image Description"></a>
                    </div>
                </div>
            </div>
            <!-- End Footer-top-widget -->
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Email address</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-6">
                                <a href="#" class="d-inline-block">
                                    <svg version="1.1" x="0px" y="0px" width="156px" height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                        <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                        <a href="tel:+80080018588" class="font-size-20 text-gray-90">(800) 8001-8588, </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600) 874 548</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Contact info</h6>
                                <address class="">
                                    17 Princess Road, London, Greater London NW1 8JR, UK
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-github btn-icon__inner"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Laptops & Computers</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Cameras & Photography</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Smart Phones & Tablets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Video Games & Consoles</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">TV & Audio</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Car Electronic & GPS</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Printers & Ink</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Office Supplies</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Computer Components</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Accesories</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/my-account.html">My Account</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/track-your-order.html">Order Tracking</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/wishlist.html">Wish List</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Customer Service</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Returns / Exchange</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/faq.html">FAQs</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Product Support</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
            <!-- Footer-copy-right -->
            <div class="bg-gray-14 py-2">
                <div class="container">
                    <div class="flex-center-between d-block d-md-flex">
                        <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Electro</a> - All rights Reserved</div>
                        <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img1.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img2.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img3.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img4.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="../../assets/img/100X60/img5.jpg" alt="Image Description">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-copy-right -->
        </footer> --}}
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
        {{-- <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome Back!</h2>
                                        <p>Login to manage your account.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="signinPassword">Password</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Forgot Password?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Do not have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Signup
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                        <p>Fill out the form to get started.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                data-msg="Password does not match the confirm password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                                data-target="#login"
                                                data-link-group="idForm"
                                                data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;"
                                               data-target="#login"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside> --}}
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->
        <!-- Sidebar Navigation -->
        {{-- <aside id="sidebarContent1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarNavToggler1">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-3 px-4 bg-white">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent1"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span aria-hidden="true"><i class="ec ec-close-remove"></i></span>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content px-4">
                                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                                    <!-- List -->
                                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                                        <li><div class="dropdown-title">Browse Categories</div></li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                                                Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav2Collapse" data-target="#sidebarNav2Collapse">
                                                Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav2Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav2" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Cameras<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav3Collapse" data-target="#sidebarNav3Collapse">
                                                Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav3Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav3" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Computer Cases<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav4Collapse" data-target="#sidebarNav4Collapse">
                                                Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav4Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav4" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartwatches<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Wearables<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav5Collapse" data-target="#sidebarNav5Collapse">
                                                Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav5Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav5" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Tvs<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav6Collapse" data-target="#sidebarNav6Collapse">
                                                Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav6Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav6" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Accessories<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Cameras & Photography<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Computer Components<span class="text-gray-25 font-size-12 font-weight-normal"> (22)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Gadgets<span class="text-gray-25 font-size-12 font-weight-normal"> (5)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Home Entertainment<span class="text-gray-25 font-size-12 font-weight-normal"> (7)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Laptops & Computers<span class="text-gray-25 font-size-12 font-weight-normal"> (42)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (63)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (11)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (66)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (31)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav7Collapse" data-target="#sidebarNav7Collapse">
                                                Printers & Ink<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav7Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav7" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Printers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav8Collapse" data-target="#sidebarNav8Collapse">
                                                Smart Phones & Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav8Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav8" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Smartphones<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <li><a class="dropdown-item" href="#">Tablets<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav9Collapse" data-target="#sidebarNav9Collapse">
                                                TV & Audio<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav9Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav9" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Audio Speakers<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav10Collapse" data-target="#sidebarNav10Collapse">
                                                Video Games & Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                            </a>

                                            <div id="sidebarNav10Collapse" class="collapse" data-parent="#sidebarNav">
                                                <ul id="sidebarNav10" class="list-unstyled dropdown-list">
                                                    <!-- Menu List -->
                                                    <li><a class="dropdown-item" href="#">Game Consoles<span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></a></li>
                                                    <!-- End Menu List -->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <div class="mb-6">
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
                                    </div>
                                    <div class="border-bottom pb-4 mb-4">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

                                        <!-- Checkboxes -->
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                                <label class="custom-control-label" for="brandAdidas">Adidas
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                                <label class="custom-control-label" for="brandNewBalance">New Balance
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandNike">
                                                <label class="custom-control-label" for="brandNike">Nike
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                                <label class="custom-control-label" for="brandFredPerry">Fred Perry
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brandTnf">
                                                <label class="custom-control-label" for="brandTnf">The North Face
                                                    <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End Checkboxes -->

                                        <!-- View More - Collapse -->
                                        <div class="collapse" id="collapseBrand">
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brandGucci">
                                                    <label class="custom-control-label" for="brandGucci">Gucci
                                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="brandMango">
                                                    <label class="custom-control-label" for="brandMango">Mango
                                                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End View More - Collapse -->

                                        <!-- Link -->
                                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false" aria-controls="collapseBrand">
                                            <span class="link__icon text-gray-27 bg-white">
                                                <span class="link__icon-inner">+</span>
                                            </span>
                                            <span class="link-collapse__default">Show more</span>
                                            <span class="link-collapse__active">Show less</span>
                                        </a>
                                        <!-- End Link -->
                                    </div>
                                    <div class="border-bottom pb-4 mb-4">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>

                                        <!-- Checkboxes -->
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryTshirt">
                                                <label class="custom-control-label" for="categoryTshirt">Black <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryShoes">
                                                <label class="custom-control-label" for="categoryShoes">Black Leather <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryAccessories">
                                                <label class="custom-control-label" for="categoryAccessories">Black with Red <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryTops">
                                                <label class="custom-control-label" for="categoryTops">Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="categoryBottom">
                                                <label class="custom-control-label" for="categoryBottom">Spacegrey <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                            </div>
                                        </div>
                                        <!-- End Checkboxes -->

                                        <!-- View More - Collapse -->
                                        <div class="collapse" id="collapseColor">
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryShorts">
                                                    <label class="custom-control-label" for="categoryShorts">Turquoise <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryHats">
                                                    <label class="custom-control-label" for="categoryHats">White <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categorySocks">
                                                    <label class="custom-control-label" for="categorySocks">White with Gold <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End View More - Collapse -->

                                        <!-- Link -->
                                        <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2" data-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false" aria-controls="collapseColor">
                                            <span class="link__icon text-gray-27 bg-white">
                                                <span class="link__icon-inner">+</span>
                                            </span>
                                            <span class="link-collapse__default">Show more</span>
                                            <span class="link-collapse__active">Show less</span>
                                        </a>
                                        <!-- End Link -->
                                    </div>
                                    <div class="range-slider">
                                        <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
                                        <!-- Range Slider -->
                                        <input class="js-range-slider" type="text"
                                        data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                                        data-type="double"
                                        data-grid="false"
                                        data-hide-from-to="true"
                                        data-prefix="$"
                                        data-min="0"
                                        data-max="3456"
                                        data-from="0"
                                        data-to="3456"
                                        data-result-min="#rangeSliderExample3MinResult"
                                        data-result-max="#rangeSliderExample3MaxResult">
                                        <!-- End Range Slider -->
                                        <div class="mt-1 text-gray-111 d-flex mb-4">
                                            <span class="mr-0dot5">Price: </span>
                                            <span>$</span>
                                            <span id="rangeSliderExample3MinResult" class=""></span>
                                            <span class="mx-0dot5"> — </span>
                                            <span>$</span>
                                            <span id="rangeSliderExample3MaxResult" class=""></span>
                                        </div>
                                        <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="border-bottom border-color-1 mb-5">
                                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img1.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img3.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $499.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img5.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Tablet Thin EliteBook Revolve 810 G6</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $100.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img6.jpg" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Notebook Purple G952VX-T7008T</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold">
                                                        <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                        <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75">
                                                        <img class="img-fluid" src="../../assets/img/300X300/img10.png" alt="Image Description">
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="../shop/single-product-fullwidth.html">Laptop Yoga 21 80JH0035GE W8.1</a></h3>
                                                    <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star text-muted"></small>
                                                    </div>
                                                    <div class="font-weight-bold font-size-15">
                                                        $1200.00
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside> --}}
        <!-- End Sidebar Navigation -->


        <!-- JS Global Compulsory -->
        {{-- <script src=" {{ asset('vendor/electro/jquery/dist/jquery.min.js') }} " ></script>
        <script src=" {{ asset('vendor/electro/jquery-migrate/dist/jquery-migrate.min.js') }} " ></script>
        <script src=" {{ asset('vendor/electro/popper.js/dist/umd/popper.min.js') }} " ></script>
        <script src=" {{ asset('vendor/electro/bootstrap/bootstrap.min.js') }} " ></script> --}}

        <!-- JS Implementing Plugins -->
        {{-- @yield('plugins_js') --}}

        <!-- JS Electro -->
        {{-- <script src="{{ asset('js/hs.core.js') }}"></script>
        <script src="{{ asset('js/components/hs.countdown.js') }}"></script> --}}
        {{-- JS ELECTRO MORE --}}
        {{-- @yield('js_alectro') --}}

        <!-- JS Plugins Init. -->
        {{-- @yield('code_js') --}}
{{-- </body>
</html> --}} 

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title', 'PIE App')</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Teaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="{{ asset('css/styles_propio.css') }}">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<!-- //animation-effect -->
</head>

<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span>T</span>eaching</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--shylock">
							<div class="agileinfo_social_icons">
								<ul class="agileinfo_social_icons1">
									<li><a href="#" class="facebook"></a></li>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="google"></a></li>
									<li><a href="#" class="pinterest"></a></li>
								</ul>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="services.html" class="hvr-bounce-to-bottom">Services</a></li>
								<li><a href="portfolio.html" class="hvr-bounce-to-bottom">Portfolio</a></li>
								<li><a href="mail.html" class="hvr-bounce-to-bottom">Mail Us</a></li>
							</ul>
							<div class="clearfix"> </div>
						</nav>
					</div>
				</nav>	
			</div>
		</div>
		<div class="w3agile_banner_info">
			<div class="container">
				<h3>teaching</h3>
				<a href="http://w3layouts.com">powered by w3layouts.com</a>
			</div>
		</div>
		<div class="w3_scroll">
			<div class="scroll-down">
				<span class="dot"> </span>
			</div>
		</div>
		<div class="w3_banner_pos">
			<img src="images/1.png" alt=" " class="img-responsive animated wow slideInUp" data-wow-delay=".1ms" />
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div id="about" class="banner-bottom">
		<div class="container">
			<h3 class="head">A<span>brief description <i>about</i> teaching</span></h3>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<h4>Aliquam a nunc non erat lobortis</h4>
					<p><i>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo. 
					Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.</i>Nullam sodales rutrum nisl, gravida porttitor lectus porta et. 
					Duis purus arcu, semper at magna faucibus, elementum maximus ligula. 
					Etiam imperdiet posuere odio gravida vehicula. Nulla consectetur massa 
					eget tincidunt suscipit. Integer vitae ex eros. Cras ornare dignissim 
				scelerisque.</p>
			</div>
			<div class="col-md-6 agileits_banner_bottom_grid_r">
				<div class="agileits_banner_btm_grid_r">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
					<div class="agileits_banner_btm_grid_r_pos">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- banner-bottom1 -->
<div class="banner-bottom1">
	<div class="col-md-6 agile_banner_bottom1_left">
	</div>
	<div class="col-md-6 agile_banner_bottom1_right">
		<h4>Duis at enim sit amet velit mattis</h4>
		<p>Aliquam a tellus nec leo commodo imperdiet sit amet sit amet lacus. 
			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
		turpis egestas.</p>
		<ul>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Morbi eu velit eget libero pretium</li>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Pellentesque habitant morbi</li>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Senectus et netus et malesuada</li>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Fames ac turpis egestas</li>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Tellus nec leo commodo imperdiet</li>
			<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Habitant morbi tristique senectus</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- //banner-bottom1 -->
<!-- testimonials -->
<div class="testimonials">
	<div class="container">
		<h3 class="head head1">C<span>our <i>clients</i> says</span></h3>
		<ul id="flexiselDemo1">			
			<li>
				<div class="wthree_testimonials_grid_main">
					<div class="wthree_testimonials_grid">
						<h4>Suspendisse sagittis nibh sit amet nisi imperdiet</h4>
						<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
							eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
						convallis tortor a, ullamcorper magna.</p>
						<div class="wthree_testimonials_grid_pos">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="wthree_testimonials_grid1">
						<h5>Mark Henry</h5>
						<p>Teacher</p>
					</div>
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">
					<div class="wthree_testimonials_grid">
						<h4>Vestibulum sed convallis massa tincidunt</h4>
						<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
							eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
						convallis tortor a, ullamcorper magna.</p>
						<div class="wthree_testimonials_grid_pos">
							<img src="images/4.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="wthree_testimonials_grid1">
						<h5>Linda Carl</h5>
						<p>Teacher</p>
					</div>
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">
					<div class="wthree_testimonials_grid">
						<h4>Integer id erat porta convallis tortor</h4>
						<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
							eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
						convallis tortor a, ullamcorper magna.</p>
						<div class="wthree_testimonials_grid_pos">
							<img src="images/3.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="wthree_testimonials_grid1">
						<h5>Michael Paul</h5>
						<p>Teacher</p>
					</div>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:1
						},
						tablet: { 
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //testimonials -->
<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<div class="col-md-7 w3ls_newsletter_left">
			<h3>N<span>Subscribe to our newsletter</span></h3>
			<p>Suspendisse lacinia rutrum tincidunt.</p>
		</div>
		<div class="col-md-5 w3ls_newsletter_right">
			<form action="#" method="post">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 w3l_footer_grid">
			<h2><a href="index.html"><span>T</span>eaching</a></h2>
			<p>Vestibulum sed convallis massa, eu aliquet massa. Suspendisse 
				lacinia rutrum tincidunt. Integer id erat porta, convallis tortor a, 
			ullamcorper magna.</p>
		</div>
		<div class="col-md-3 w3l_footer_grid">
			<h3>Address</h3>
			<ul class="w3_address">
				<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
				<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
				<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
			</ul>
		</div>
		<div class="col-md-2 w3l_footer_grid">
			<h3>Navigation</h3>
			<ul class="agileinfo_footer_grid_nav">
				<li><a href="services.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Services</a></li>
				<li><a href="portfolio.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Portfolio</a></li>
				<li><a href="short-codes.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Short Codes</a></li>
				<li><a href="mail.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Mail Us</a></li>
			</ul>
		</div>
		<div class="col-md-3 w3l_footer_grid">
			<h3>Social Media</h3>
			<ul class="agileinfo_social_icons1 agileinfo_social">
				<li><a href="#" class="facebook"></a></li>
				<li><a href="#" class="twitter"></a></li>
				<li><a href="#" class="google"></a></li>
				<li><a href="#" class="pinterest"></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="w3agile_footer_copy">
			<p>© 2016 Teaching. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- //here ends scrolling icon -->
	</body>
	</html>