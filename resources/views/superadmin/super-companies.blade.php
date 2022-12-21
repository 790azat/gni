@extends('superadmin.super-admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-people-group me-1"></i>
            {{__('Ընկերութթյուններ')}}
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Անուն</th>
                    <th>Էլ. հասցե</th>
                    <th>Հեռախոս</th>
                    <th>ԱԱՀ</th>
                    <th>Ստեղծումը</th>
                    <th>Ակցիաներ</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle">
                @if(isset($companies))
                    @foreach($companies as $company)
                        <tr>
                            <td class="fw-bold">{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td @if($company->email_verified_at != null) class="text-success"><i class="fa-solid fa-circle-check me-1"></i> @else > @endif {{$company->email}}</td>
                            <td @if($company->phone_verified_at != null) class="text-success"><i class="fa-solid fa-circle-check me-1"></i> @else > @endif {{$company->phone}}</td>
                            <td>{{$company->aah}}</td>
                            <td>{{$company->created_at}}</td>
                            <td>
                                @foreach($company->items as $item)
                                    <a href="" class="text-hover justify-content-center" data-bs-toggle="modal" data-bs-target="#edit-item-modal{{$item->id}}"><p @if($item->status == 1) class="text-success"><i class="fa-solid fa-circle-check me-1"></i> @else > @endif {{$item->name}}</p></a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit-item-modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$item->owner->name}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/update-item" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input class="d-none" name="id" type="text" value="{{$item->id}}">
                                                        <div class="mb-3 d-flex gap-3">
                                                            <div class="col">
                                                                <label for="name" class="form-label">{{__('Անվանում')}}</label>
                                                                <input value="{{$item->name}}" required type="text" class="form-control" id="name" name="name">
                                                            </div>
                                                            <div class="col">
                                                                <label for="category" class="form-label">{{__('Կատեգորիա')}}</label>
                                                                <select name="category" id="category" class="form-select">
                                                                    @isset($categories)
                                                                        @foreach($categories as $category)
                                                                            <option @if($item->category->name == $category->name) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    @endisset
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex gap-3">
                                                            <div class="col">
                                                                <label for="text" class="form-label">{{__('Տեքստ')}}</label>
                                                                <textarea type="text" class="form-control" id="text" name="text">{{$item->text}}</textarea>
                                                            </div>
                                                            <div class="col">
                                                                <label for="info" class="form-label">{{__('Ինֆորմացիա')}}</label>
                                                                <textarea type="text" class="form-control" id="info" name="info">{{$item->info}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex gap-3">
                                                            <div class="col">
                                                                <label for="main_image" class="form-label">{{__('Գլխավոր նկար')}}</label>
                                                                <input type="file" class="form-control" id="main_image" name="main_image">
                                                            </div>
                                                            <div class="col">
                                                                <label for="images" class="form-label">{{__('Նկարներ')}}</label>
                                                                <input type="file" accept="image/*" multiple class="form-control" id="images" name="images[]">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex gap-3">
                                                            <div class="col d-flex gap-3">
                                                                <div class="col">
                                                                    <label for="start_time" class="form-label">{{__('Սկիզբ')}}</label>
                                                                    <input value="{{$item->start_time}}" required type="date" class="form-control" id="start_time" name="start_time">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="end_time" class="form-label">{{__('Ավարտ')}}</label>
                                                                    <input value="{{$item->end_time}}" required type="date" class="form-control" id="end_time" name="end_time">
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex gap-3">
                                                                <div class="col">
                                                                    <label for="old_price" class="form-label">{{__('Հին գին')}}</label>
                                                                    <input value="{{$item->old_price}}" required type="number" class="form-control" id="old_price" name="old_price">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="new_price" class="form-label">{{__('Նոր գին')}}</label>
                                                                    <input value="{{$item->new_price}}" required type="number" class="form-control" id="new_price" name="new_price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-flex gap-1 justify-content-center">
                                                            <div style="width: 200px">
                                                                <img src="{{asset('storage/images/' . $item->main_image)}}" style="width: 100%;height: auto" alt="">
                                                            </div>
                                                            @foreach(json_decode($item->images) as $image)
                                                                <div style="width: 200px">
                                                                    <img src="{{asset('storage/images/' . $image)}}" style="width: 100%;height: auto" alt="">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}</button>
                                                    @if($item->status == 1)
                                                        <button class="btn btn-warning"><a href="/disable-item/{{$item->id}}">{{__('Անջատել')}}</a></button>
                                                    @else
                                                        <button class="btn btn-primary"><a href="/accept-item/{{$item->id}}">{{__('Հաստատել')}}</a></button>
                                                    @endif
                                                    <button type="submit" class="btn btn-success">{{__('Պահպանել')}}</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </td>

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
