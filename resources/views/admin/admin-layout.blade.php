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
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
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
                <p><i class="fa-solid fa-right-from-bracket me-1"></i></i> {{__('Ելք')}}</p>
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
                    <a class="nav-link @if(Route::currentRouteName() == 'add-item') bg-primary text-light active @endif"
                       href="{{route('add-item')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file-circle-plus"></i></div>
                        {{__('Ավելացնել')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'admin-data') bg-primary text-light active @endif"
                       href="{{route('admin-data')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-open"></i></div>
                        {{__('Տվյալներ')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'admin-password') bg-primary text-light active @endif"
                       href="{{route('admin-password')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-key"></i></div>
                        {{__('Գաղտնաբառ')}}
                    </a>
                    <a class="nav-link @if(Route::currentRouteName() == 'admin-buyers') bg-primary text-light active @endif"
                       href="{{route('admin-buyers')}}">
                        <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-cart-shopping"></i></div>
                        {{__('Գնորդներ')}}
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Կազմակերպություն:</div>
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
                    @elseif(Route::currentRouteName() == 'add-item')
                        <i class="fa-solid fa-file-circle-plus me-1"></i>  {{__('Ավլեացնել')}}
                    @elseif(Route::currentRouteName() == 'admin-data')
                        <i class="fa-solid fa-folder-open"></i>  {{__('Տվյալներ')}}
                    @elseif(Route::currentRouteName() == 'admin-password')
                        <i class="fa-solid fa-key"></i>  {{__('Գաղտնաբառ')}}
                    @elseif(Route::currentRouteName() == 'admin-buyers')
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>  {{__('Գնորդներ')}}
                    @endif</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{__('Ադմին վահանակ')}}</li>
                </ol>
                @if(Route::currentRouteName() == 'home')
                    <div class="row">
                        <a href="{{route('add-item')}}" class="d-block col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body text-center"><i class="fa-solid fa-file-circle-plus me-1"></i>
                                    {{__('Ավլեացնել')}}
                                </div>
                            </div>
                        </a>
                        <a href="{{route('add-location')}}" class="d-block col-xl-3 col-md-6" data-bs-toggle="modal" data-bs-target="#addLocationModal">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body text-center"><i class="fa-solid fa-location-dot me-1"></i>
                                    {{__('Հասցե')}}
                                </div>
                            </div>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="addLocationModal" tabindex="-1" aria-labelledby="addLocationModal" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div>
                                        <div>
                                            <style type="text/css">
                                                #map{ width:100%; height: 500px; }
                                            </style>
                                            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                                            <script>
                                                //map.js

                                                //Set up some of our variables.
                                                var map; //Will contain map object.
                                                var marker = false; ////Has the user plotted their location marker?

                                                //Function called to initialize / create the map.
                                                //This is called when the page has loaded.
                                                function initMap() {

                                                    //The center location of our map.
                                                    var centerOfMap = new google.maps.LatLng(@if(Auth::user()->location != '{"lat":null,"lng":null}') {{json_decode(\Illuminate\Support\Facades\Auth::user()->location)->lat}},{{json_decode(\Illuminate\Support\Facades\Auth::user()->location)->lng}} @else 40.183019, 44.514779 @endif);

                                                    //Map options.
                                                    var options = {
                                                        center: centerOfMap, //Set center.
                                                        zoom: 14 //The zoom value.
                                                    };

                                                    //Create the map object.
                                                    map = new google.maps.Map(document.getElementById('map'), options);

                                                    //Listen for any clicks on the map.
                                                    google.maps.event.addListener(map, 'click', function(event) {
                                                        //Get the location that the user clicked.
                                                        var clickedLocation = event.latLng;
                                                        //If the marker hasn't been added.
                                                        if(marker === false){
                                                            //Create the marker.
                                                            marker = new google.maps.Marker({
                                                                position: clickedLocation,
                                                                map: map,
                                                                draggable: true //make it draggable
                                                            });
                                                            //Listen for drag events!
                                                            google.maps.event.addListener(marker, 'dragend', function(event){
                                                                markerLocation();
                                                            });
                                                        } else{
                                                            //Marker has already been added, so just change its location.
                                                            marker.setPosition(clickedLocation);
                                                        }
                                                        //Get the marker's location.
                                                        markerLocation();
                                                    });
                                                }

                                                //This function will get the marker's current location and then add the lat/long
                                                //values to our textfields so that we can save the location.
                                                function markerLocation(){
                                                    //Get location.
                                                    var currentLocation = marker.getPosition();
                                                    //Add lat and lng values to a field that we can save.
                                                    document.getElementById('lat').value = currentLocation.lat(); //latitude
                                                    document.getElementById('lng').value = currentLocation.lng(); //longitude
                                                }


                                                //Load the map when the page has finished loading.
                                                google.maps.event.addDomListener(window, 'load', initMap);
                                            </script>
                                        </div>
                                        <div>
                                        <!--map div-->
                                        <div id="map"></div>
                                        <!--our form-->
                                        <form method="post" action="/save-location" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="lat" id="lat" readonly class="d-none">
                                            <input type="text" name="lng" id="lng" readonly class="d-none">

                                        <script type="text/javascript" src="map.js"></script>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Փակել</button>
                                        <button type="submit" class="btn btn-primary">Հաստատել</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
{{--                        <a href="{{route('categories')}}" class="d-block col-xl-3 col-md-6">--}}
{{--                            <div class="card bg-primary text-white mb-4">--}}
{{--                                <div class="card-body text-center"><i class="fa-solid fa-code-branch me-1"></i>--}}
{{--                                    Категории--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="d-block col-xl-3 col-md-6">--}}
{{--                            <div class="card bg-danger text-white mb-4">--}}
{{--                                <div class="card-body text-center"><i class="fa-solid fa-trash-can me-1"></i> Удалить--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
