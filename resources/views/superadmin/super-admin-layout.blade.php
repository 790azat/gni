<!doctype html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/gni.png') }}"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Gni</title>
</head>
<body @if(session('alert')) onload="$('.toast').toast('show');" @endif class="sb-nav-fixed" style="background: white">
@include('components.alert')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a href="/" class="gap-2 ms-3 me-5">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/gni.png') }}" style="width: 40px;height: 40px" alt="">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <p class="fs-4 fw-bold text-light" style="line-height: inherit;font-family: 'Lobster', cursive;">Gni</p>
        </div>
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Որոնում ..." aria-label="Search for..."
                   aria-describedby="btnNavbarSearch"/>
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 text-light">
        <div class="d-flex justify-content-center align-items-center gap-2">
            <a class="text-hover btn" style="background: #3b3b3b" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <p><i class="fa-solid fa-right-from-bracket me-1"></i> {{__('Ելք')}}</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">{{__('Ադմին վահանակ')}}</div>
                    <a class="nav-link @if(Route::currentRouteName() == 'home') bg-primary text-light active @endif"
                       href="{{route('home')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        {{__('Գլխավոր')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'super-add-item') bg-primary text-light active @endif"
                       href="{{route('super-add-item')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-plus"></i></div>
                        {{__('Ավելացնել')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'super-companies') bg-primary text-light active @endif"
                       href="{{route('super-companies')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group me-1"></i></div>
                        {{__('Ընկերություններ')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'super-categories') bg-primary text-light active @endif"
                       href="{{route('super-categories')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-code-branch"></i></div>
                        {{__('Կատեգորիաներ')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'super-transactions') bg-primary text-light active @endif"
                       href="{{route('super-transactions')}}">
                        <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-cash-register me-1"></i></div>
                        {{__('Վճարումներ')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'super-users') bg-primary text-light active @endif"
                       href="{{route('super-users')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users me-1"></i></div>
                        {{__('Հաճախորդներ')}}
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Superadmin:</div>
                {{Auth::user()->name}}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">
                    @if(Route::currentRouteName() == 'home')
                        <i class="fa-solid fa-gauge me-1"></i> {{__('Գլխավոր')}}
                    @elseif(Route::currentRouteName() == 'super-add-item')
                        <i class="fa-solid fa-file-circle-plus me-1"></i>  {{__('Ավլեացնել')}}
                    @elseif(Route::currentRouteName() == 'super-categories')
                        <i class="fa-solid fa-code-branch me-1"></i>  {{__('Կատեգորիաներ')}}
                    @elseif(Route::currentRouteName() == 'super-companies')
                        <i class="fa-solid fa-people-group me-1"></i>  {{__('Ընկերություններ')}}
                    @elseif(Route::currentRouteName() == 'super-transactions')
                        <i class="fa-sharp fa-solid fa-cash-register me-1"></i>  {{__('Փոխանցումներ')}}
                    @elseif(Route::currentRouteName() == 'super-users')
                        <i class="fa-solid fa-users"></i>  {{__('Հաճախորդներ')}}
                    @endif</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{__('Ադմին վահանակ')}}</li>
                </ol>
                @if(Route::currentRouteName() == 'home')
                    <div class="row">
                        <a href="{{route('super-add-item')}}" class="d-block col-12 col-sm">
                            <div class="card bg-success text-white mb-2 mb-sm-4">
                                <div class="card-body text-center text-nowrap"><i class="fa-solid fa-file-circle-plus me-1"></i>
                                    {{__('Ավլեացնել')}}
                                </div>
                            </div>
                        </a>
                        <a href="{{route('super-companies')}}" class="d-block col-12 col-sm">
                            <div class="card bg-warning text-white mb-2 mb-sm-4">
                                <div class="card-body text-center text-nowrap"><i class="fa-solid fa-people-group me-1"></i>
                                    {{__('Ընկերություններ')}}
                                </div>
                            </div>
                        </a>
                        <a href="{{route('super-categories')}}" class="d-block col-12 col-sm">
                            <div class="card bg-primary text-white mb-2 mb-sm-4">
                                <div class="card-body text-center text-nowrap"><i class="fa-solid fa-code-branch me-1"></i>
                                    {{__('Կատեգորիաներ')}}
                                </div>
                            </div>
                        </a>
                        <a href="{{route('super-transactions')}}" class="d-block col-12 col-sm">
                            <div class="card bg-danger text-white mb-2 mb-sm-4">
                                <div class="card-body text-center text-nowrap"><i class="fa-sharp fa-solid fa-cash-register me-1"></i>
                                    {{__('Փոխանցումներ')}}
                                </div>
                            </div>
                        </a>
                        <a href="{{route('super-users')}}" class="d-block col-12 col-sm">
                            <div class="card bg-info text-white mb-2 mb-sm-4">
                                <div class="card-body text-center text-nowrap"><i class="fa-solid fa-users me-1"></i>
                                    {{__('Հաճախորդներ')}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Gni.am 2022</div>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('components.scripts')
</body>
</html>
