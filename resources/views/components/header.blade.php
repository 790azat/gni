<div class="col-12 bg-dark text-light">
    <div class="container d-flex py-3 justify-content-start align-items-center">
        <a href="/" class="gap-2 me-auto">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/gni.png') }}" style="width: 40px;height: auto" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <p class="fs-4 fw-bold" style="line-height: inherit;font-family: 'Lobster', cursive;">Gni</p>
            </div>
        </a>
        <div class="d-none d-sm-flex gap-2 me-3">
            @if(Session::get('locale') !== 'en')
                <a href="/locale/en">
                    <img src="{{asset('images/united-states.png')}}" style="width: 25px;height: auto" alt="">
                </a>
            @endif
            @if(Session::get('locale') !== 'ru')
                <a href="/locale/ru">
                    <img src="{{asset('images/russia.png')}}" style="width: 25px;height: auto" alt="">
                </a>
            @endif
            @if(Session::get('locale') !== 'am')
                <a href="/locale/am">
                    <img src="{{asset('images/armenia.png')}}" style="width: 25px;height: auto" alt="">
                </a>
            @endif
        </div>
        <div class="d-flex d-sm-none justify-content-center align-items-center me-2">
            <button data-bs-toggle="dropdown" aria-expanded="false" class="btn text-light d-flex justify-content-center align-items-center gap-1 p-2" style="background: #3b3b3b"><i class="fa-solid fa-globe"></i></button>
            <ul class="dropdown-menu dropdown-menu-end bg-dark">
                @if(Session::get('locale') !== 'en')
                    <li><a href="/locale/en" class="dropdown-item d-flex justify-content-center align-items-center"><img src="{{asset('images/united-states.png')}}" style="width: 25px;height: auto" alt=""></a></li>
                @endif
                @if(Session::get('locale') !== 'ru')
                    <li><a href="/locale/ru" class="dropdown-item d-flex justify-content-center align-items-center"><img src="{{asset('images/russia.png')}}" style="width: 25px;height: auto" alt=""></a></li>
                @endif
                @if(Session::get('locale') !== 'am')
                    <li><a href="/locale/am" class="dropdown-item d-flex justify-content-center align-items-center"><img src="{{asset('images/armenia.png')}}" style="width: 25px;height: auto" alt=""></a></li>
                @endif
            </ul>
        </div>
        @guest
            <div class="d-flex justify-content-center align-items-center gap-1 gap-sm-2">
                <a href="{{ route('login') }}" class="text-hover btn" style="background: #3b3b3b">
                    <p style="font-size: 13px"><i class="fa-solid fa-right-to-bracket me-1"></i> {{__('??????????')}}</p>
                </a>
                <a href="{{ route('register') }}" class="text-hover btn" style="background: #3b3b3b">
                    <p style="font-size: 13px"><i class="fa-solid fa-circle-user me-1"></i> {{__('????????????????')}}</p>
                </a>
            </div>
        @endguest
        @auth
            <div class="d-flex gap-1 gap-sm-2-2">
                @if(Auth::user()->is_admin == 0 and Auth::user()->is_super_admin == 0)
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <a href="{{route('my-wallet')}}"><button class="btn text-light d-flex justify-content-center align-items-center gap-1 text-nowrap" style="background: #3b3b3b;font-size: 13px"><i class="fa-solid fa-wallet me-1"></i> {{Auth::user()->money}} {{__('????.')}}</button></a>
                    </div>
                @endif
                <div class="d-flex justify-content-center align-items-center gap-2">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#searchModal" class="btn text-light" style="background: #3b3b3b">
                        <p><i class="fa-solid fa-search"></i></p>
                    </button>
                    <button class="btn text-light dropdown-toggle d-flex justify-content-center align-items-center gap-1" style="background: #3b3b3b;font-size: 13px" data-bs-toggle="dropdown" aria-expanded="false">@if(Auth::user()->is_admin == 1) <i class="fa-solid fa-people-group"></i> @elseif(Auth::user()->is_super_admin == 1) <i class="fa-solid fa-crown"></i> @else <i class="fa-solid fa-user-circle me-1"></i> @endif {{Auth::user()->name}}</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex justify-content-center align-items-center" href="{{route('home')}}">@if(Auth::user()->is_admin == 1 or Auth::user()->is_super_admin == 1)<i class="fa-solid fa-gauge me-1"></i> {{__('??????????')}} @else <i class="fa-solid fa-hand-holding-heart me-1"></i> {{__('???? ??????????????????')}} @endif</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item d-flex justify-content-center align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket me-1"></i> {{__('??????')}}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                @livewire('search-items')
            </div>
        </div>
    </div>
</div>
