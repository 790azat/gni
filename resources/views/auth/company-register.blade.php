@extends('layout')

@section('content')
    <div class="container my-3 my-sm-5">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 shadow d-flex p-0 rounded-1 overflow-hidden">
                <div class="col-5 d-none d-sm-flex">
                    <img src="{{ asset('images/eraz3.jpg') }}" style="width: 100%;height: 100%;object-fit: cover" alt="">
                </div>
                <form class="col-sm-7 d-flex p-5 px-4 px-sm-5 pt-4 pb-3 bg-light flex-wrap align-content-center" method="POST" action="{{ route('register') }}">
                    @csrf
                    <input class="d-none" value="1" name="is_admin" type="text">
                    <div class="col-12 mb-1 d-flex gap-3">
                        <div class="col">
                            <div class="col-12 mb-1">
                                <label for="name" class="fw-bold">{{__('Կազմակերպություն')}}</label>
                            </div>
                            <div class="col-12 mb-2">
                                <input id="name" placeholder="Company name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-12 mb-1">
                                <label for="name" class="fw-bold">{{__('ԱԱՀ')}}</label>
                            </div>
                            <div class="col-12 mb-2">
                                <input id="name" placeholder="VAT" type="text" class="form-control" name="aah" value="{{ old('aah') }}" required autocomplete="aah" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <label for="email" class="fw-bold">{{__('Էլ. հասցե')}}</label>
                    </div>
                    <div class="col-12 mb-2">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-1">
                        <label for="phone" class="fw-bold">{{__('Հեռախոս')}}</label>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-text">+374</div>
                            <input id="phone" placeholder="Phone" type="tel" maxlength="8" minlength="8" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-1">
                        <label for="password" class="fw-bold">{{__('Ծածկագիր')}}</label>
                    </div>
                    <div class="col-12 mb-2">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-1">
                        <label for="password-confirm" class="fw-bold">{{__('Հաստատել ծածկագիրը')}}</label>
                    </div>
                    <div class="col-12 mb-4">
                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-success col-12">{{__('Գրանցվել')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
