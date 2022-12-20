@extends('admin.admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-folder-open"></i>
            {{__('Տվյալներ')}}
        </div>
        <div class="card-body">
            <form action="/update-admin-data" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="name" class="form-label">{{__('Կազմակերպության անվանում')}}</label>
                        <input value="{{Auth::user()->name}}" required type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col">
                        <label for="aah" class="form-label">{{__('ԱԱՀ (ՍՊԸ)')}}</label>
                        <input value="{{Auth::user()->aah}}" required type="text" class="form-control" id="aah" name="aah">
                    </div>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="email" class="form-label">{{__('Էլ. հասցե')}}</label>
                        <input value="{{Auth::user()->email}}" required type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="col">
                        <label for="phone" class="form-label">{{__('Հեռախոս')}}</label>
                        <div class="input-group">
                            <div class="input-group-text">+374</div>
                            <input value="{{Auth::user()->phone}}" id="phone" type="tel" maxlength="8" minlength="8" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-2 d-flex gap-3">
                    <div class="col">
                        <button type="submit" class="btn btn-success">{{__('Պահպանել')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
