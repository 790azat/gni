@extends('layout')

@section('content')
    <div class="container my-3 my-sm-5">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 shadow d-flex p-0 rounded-1 overflow-hidden">
                <div class="col-5 d-none d-sm-flex">
                    <img src="{{ asset('images/eraz3.jpg') }}" style="filter: contrast(125%);width: 100%;height: 100%;object-fit: cover" alt="">
                </div>
                <div class="col-sm-7 d-flex p-5 px-4 px-sm-5 pt-4 pb-3 bg-light flex-wrap align-content-center">
                    <form class="col-12" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="col-12 mb-3 d-flex flex-nowrap align-items-center">
                            <p class="fs-4 text-nowrap">{{__('Մուտք')}}</p>
                            <a href="https://www.facebook.com/www.gni.am" target="_blank" class="btn btn-light p-1 ms-auto rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                                <i class="fa-brands fa-facebook-f d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                            </a>
                            <a href="https://www.facebook.com/www.gni.am" target="_blank" class="btn btn-light p-1 ms-1 rounded-circle border d-flex justify-content-center align-content-center" style="width: 40px;height: 40px">
                                <i class="fa-brands fa-instagram d-flex justify-content-center align-items-center text-center align-self-center" style="line-height: inherit;font-size: inherit"></i>
                            </a>
                        </div>
                        <div class="col-12 mb-1">
                            <label for="email" class="fw-bold">{{__('Էլ. հասցե')}}</label>
                        </div>
                        <div class="col-12 mb-2">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-1">
                            <label for="password" class="fw-bold">{{__('Ծածկագիր')}}</label>
                        </div>
                        <div class="col-12 mb-3">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-success col-12">{{__('Մուտք')}}</button>
                        </div>
                    </form>
                    <a href="{{route('auth.facebook')}}" class="col-12 mb-2">
                        <button type="submit" class="btn btn-primary col-12"><i class="fa-brands fa-facebook me-1"></i> Facebook login</button>
                    </a>
                    <a href="{{route('auth.google')}}" class="col-12 mb-3">
                        <button type="submit" class="btn btn-outline-secondary col-12"><i class="fa-brands fa-google me-1"></i> Google login</button>
                    </a>
                        <div class="col-12 mb-3">
                            <div class="form-check justify-content-between justify-content-sm-center justify-content-md-between d-flex p-0 flex-wrap gap-sm-1 gap-0">
                                <div class="d-flex justify-content-center gap-1">
                                    <div class="d-flex">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div>
                                    <label class="form-check-label text-nowrap" for="remember">
                                        {{__('Հիշել ինձ')}}
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}" class="text-hover text-nowrap text-primary">
                                    {{__('Վերականգնվել')}}
                                </a>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-nowrap justify-content-center gap-2 mb-2">
                            <p class="text-nowrap">{{__('Գրանցված չեք?')}}</p>
                            <a href="{{ route('register') }}" class="text-hover text-primary text-nowrap">{{__('Գրանցվել')}}</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
