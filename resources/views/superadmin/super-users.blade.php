@extends('superadmin.super-admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-solid fa-cash-register me-1"></i></i>
            {{__('Վճարումներ')}}
        </div>
        <div class="card-body">
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
                            <td>{{$user->avatar}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @foreach(json_decode($user->coupons) as $coupon)
                                    {{\App\Models\Items::find($coupon)->name}}<br>
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
