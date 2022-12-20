@extends('admin.admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-key"></i>
            {{__('Գաղտնաբառ')}}
        </div>
        <div class="card-body">
            <form action="/update-admin-password" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="oldPassword" class="form-label">{{__('Հին գաղտնաբառ')}}</label>
                        <input required min="8" type="password" class="form-control" id="oldPassword" name="old_password">
                    </div>
                </div>
                <div class="mb-1 d-flex gap-3">
                    <div class="col">
                        <label for="newPassword" class="form-label">{{__('Նոր գաղտնաբառ')}}</label>
                        <input required type="password" class="form-control" id="newPassword" name="new_password">
                    </div>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="confirmPassword" class="form-label">{{__('Կրկնել նոր գաղտնաբառը')}}</label>
                        <input required type="password" class="form-control" id="confirmPassword" name="confirm_password">
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
