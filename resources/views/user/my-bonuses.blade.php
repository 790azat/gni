@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 p-3 gap-2 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                <div class="col-12 d-flex flex-wrap p-2 rounded-1 align-items-center border border-secondary border-opacity-10">
                    <div class="col-12">
                        <p>Ձեր հրավերի կոդն է: <span class="fw-bold">{{$user->referral_link}}</span></p>
                    </div>
                    <div class="col-12">
                        <p>Ձեր հրավերի հղումն է: <span class="fw-bold">https://gni.am/register?referrer={{$user->referral_link}}</span></p>
                    </div>
                    @if($user->referral_id == null)
                        <div class="col-12">
                            <form action="/register-referral" method="get">
                                <input name="link" type="text">
                                <button type="submit" class="btn btn-primary">Հաստատել</button>
                            </form>
                        </div>
                    @endif
                    <div class="col-12">
                        <p>Դուք հրավիրել եք: </p>
                        @foreach($user->referrals as $referral)
                            <p>{{$referral->name}} +200</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
