@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 p-3 gap-2 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                <div class="col-12 d-flex p-2 rounded-1 align-items-center border border-secondary border-opacity-10">
                    <p>{{$bonuses}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
