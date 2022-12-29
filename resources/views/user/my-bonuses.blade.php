@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 d-flex gap-2 flex-wrap">
                <div class="col p-3 flex-wrap justify-content-center align-content-start bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12 d-flex gap-3 justify-content-center align-items-center mb-3">
                        <p>Ձեր հրավերի կոդն է</p>
                        <div class="btn-group">
                            <button data-text="{{$user->referral_link}}" class="btn text-nowrap fw-bold btn-outline-success">
                                {{$user->referral_link}}
                            </button>
                            <button id="copyBtn1" data-text="{{$user->referral_link}}" class="btn text-nowrap fw-bold btn-outline-success">
                                <i class="fa-regular fa-copy"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 btn-group">
                        <button data-text="https://gni.am/register?referrer={{$user->referral_link}}" class="btn text-nowrap fw-bold btn-success">
                            https://gni.am/register?referrer={{$user->referral_link}}
                        </button>
                        <button id="copyBtn2" data-text="https://gni.am/register?referrer={{$user->referral_link}}" class="btn text-nowrap fw-bold btn-success">
                            <i class="fa-regular fa-copy"></i>
                        </button>
                    </div>
                    @if($user->referrer_id == null)
                        <div class="col-12">
                            <form action="/register-referral" method="get">
                                <input name="link" type="text">
                                <button type="submit" class="btn btn-primary">Հաստատել</button>
                            </form>
                        </div>
                    @endif
                </div>
                <div class="col p-3 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12">
                        <p class="text-center mb-2">Դուք հրավիրել եք: {{count($user->referrals)}} հոգի</p>
                        <div class="col-12 d-flex justify-content-center flex-wrap">
                            @foreach($user->referrals as $referral)
                                <div class="@if($loop->last) rounded-bottom @elseif($loop->first) rounded-top @else  @endif col-12 d-flex overflow-hidden border border-secondary border-opacity-25">
                                    <p class="bg-light p-2 col">{{$referral->name}} {{$referral->surname}}</p>
                                    <p class="bg-success p-2 text-light">+200</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const copyBtn1 = document.querySelector('#copyBtn1');
        copyBtn1.addEventListener('click', e => {
            const input = document.createElement('input');
            input.value = copyBtn1.dataset.text;
            document.body.appendChild(input);
            input.select();
            if(document.execCommand('copy')) {
                document.body.removeChild(input);
            }
        });

        const copyBtn2 = document.querySelector('#copyBtn2');
        copyBtn2.addEventListener('click', e => {
            const input = document.createElement('input');
            input.value = copyBtn2.dataset.text;
            document.body.appendChild(input);
            input.select();
            if(document.execCommand('copy')) {
                document.body.removeChild(input);
            }
        });
    </script>
@endsection
