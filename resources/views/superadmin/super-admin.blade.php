@extends('superadmin.super-admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Ձեր ակցիաները
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Կազմ.</th>
                    <th>Կարգ.</th>
                    <th>Անուն</th>
                    <th>Նկար</th>
                    <th>Կատ.</th>
                    <th>Սկիզբ</th>
                    <th>Ավարտ</th>
                    <th>Հին գին</th>
                    <th>Նոր գին</th>
                    <th>Գնողներ քան.</th>
                    <th>Ստեղծ.</th>
                    <th>Խմբագրել</th>
                    <th>Հեռացնել</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle" style="font-size: 13px">
                @if(isset($items) and $items != null)
                    @foreach($items as $item)
                        <tr>
                            <td class="fw-bold">{{$item->id}}</td>
                            <td>{{$item->owner->name}}</td>
                            <td>@if($item->status == 1) <p class="text-success"><i class="fa-solid fa-circle-check"></i></p> @else <p class="text-warning"><i class="fa-solid fa-clock"></i></p> @endif</td>
                            <td><a href="item/{{$item->id}}" @if($item->status == 0) style="pointer-events: none" @endif class="text-hover text-start">{{$item->name}}</a></td>
                            <td class="p-1" style="width: 100px"><img src="{{ asset('storage/images/' . $item->main_image) }}" style="width: 100%;height: 100%;object-fit: cover" alt=""></td>
                            <td><a href="category/{{$item->categories_id}}" class="text-hover">{{$item->category->name}}</a></td>
                            <td class="text-nowrap">{{$item->start_time}}</td>
                            <td class="text-nowrap">{{$item->end_time}}</td>
                            <td>{{$item->old_price}}</td>
                            <td>{{$item->new_price}}</td>
                            <td>{{$item->buy_count}}</td>
                            <td class="text-nowrap">{{explode(' ',$item->created_at)[0]}}<br>{{explode(' ',$item->created_at)[1]}}</td>
                            <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-item-modal{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-item-modal{{$item->id}}"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
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
                        <!-- Modal -->
                        <div class="modal fade" id="delete-item-modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Հեռացնել</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Դուք ցանկանում եք հեռացնել <span class="fw-bold">{{$item->name}}</span> ակցիան ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Փակել</button>
                                        <button type="button" class="btn btn-danger"><a href="delete-item/{{$item->id}}">Հեռացնել</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
