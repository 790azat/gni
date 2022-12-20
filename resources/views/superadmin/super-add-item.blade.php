@extends('superadmin.super-admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-file-circle-plus me-1"></i>
            {{__('Ավլեացնել ակցիա')}}
        </div>
        <div class="card-body">
            <form action="/add-item" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="name" class="form-label">{{__('Անվանում')}}</label>
                        <input required type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col">
                        <label for="category" class="form-label">{{__('Կատեգորիա')}}</label>
                        <select name="category" id="category" class="form-select">
                            <option value=""></option>
                            @isset($categories)
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="text" class="form-label">{{__('Տեքստ')}}</label>
                        <textarea type="text" class="form-control" id="text" name="text"></textarea>
                    </div>
                    <div class="col">
                        <label for="info" class="form-label">{{__('Ինֆորմացիա')}}</label>
                        <textarea type="text" class="form-control" id="info" name="info"></textarea>
                    </div>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <div class="col">
                        <label for="main_image" class="form-label">{{__('Գլխավոր նկար')}}</label>
                        <input required type="file" class="form-control" id="main_image" name="main_image">
                    </div>
                    <div class="col">
                        <label for="images" class="form-label">{{__('Նկարներ')}}</label>
                        <input required type="file" accept="image/*" multiple class="form-control" id="images"
                               name="images[]">
                    </div>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <div class="col d-flex gap-3">
                        <div class="col">
                            <label for="start_time" class="form-label">{{__('Սկիզբ')}}</label>
                            <input required type="date" class="form-control" id="start_time" name="start_time">
                        </div>
                        <div class="col">
                            <label for="end_time" class="form-label">{{__('Ավարտ')}}</label>
                            <input required type="date" class="form-control" id="end_time" name="end_time">
                        </div>
                    </div>
                    <div class="col d-flex gap-3">
                        <div class="col">
                            <label for="old_price" class="form-label">{{__('Հին գին')}}</label>
                            <input required type="number" class="form-control" id="old_price" name="old_price">
                        </div>
                        <div class="col">
                            <label for="new_price" class="form-label">{{__('Նոր գին')}}</label>
                            <input required type="number" class="form-control" id="new_price" name="new_price">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-file-circle-plus me-1"></i> {{__('Ավելացնել')}}
                </button>
            </form>
        </div>
    </div>
@endsection
