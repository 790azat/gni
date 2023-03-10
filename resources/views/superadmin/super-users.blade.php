@extends('superadmin.super-admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-solid fa-cash-register me-1"></i></i>
            {{__('Վճարումներ')}}
        </div>
        <div class="card-body overflow-scroll">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Նկար</th>
                    <th>Անուն</th>
                    <th>Ազգանուն</th>
                    <th>էլ. հասցե</th>
                    <th>Հեռախոս</th>
                    <th>Կուպոններ</th>
                    <th>Գումար</th>
                    <th>Ստեղծումը</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle">
                @if(isset($users))
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                <img src="@if(explode('-',$user->avatar)[0] == 'custom') {{asset('storage/avatars/' . $user->avatar)}} @elseif($user->avatar == 'avatar.png') {{asset('images/avatar.png')}} @else {{asset($user->avatar)}} @endif" style="width: 20px;height: 20px" alt="">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->email}}</td>
                            <td><i class="fa-solid fa-phone me-1"></i> <a class="d-inline text-decoration-underline" href="tel:0{{$user->phone}}">0{{$user->phone}}</a></td>
                            <td>
                                @foreach($user->coupons as $coupon)
                                    <div class="col-12 text-start">
                                        @if($coupon->status == 0)
                                            <p class="text-primary"><i class="fa-solid fa-circle-check me-1"></i>
                                        @else
                                            <p class="text-success"><i class="fa-solid fa-check-to-slot me-1"></i>
                                        @endif
                                            {{$coupon->item->name}}
                                        </p>
                                    </div>
                                @endforeach
                            </td>
                            <td>{{$user->money}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
