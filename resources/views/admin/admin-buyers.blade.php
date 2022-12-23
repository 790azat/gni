@extends('admin.admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-solid fa-cart-shopping me-1"></i>
            Գնորդներ
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>
                    <th>Id</th>
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
                @if(isset($coupons))
                    @foreach($coupons as $coupon)
                        <tr>
                            <td>{{$coupon->owner->id}}</td>
                            <td>{{$coupon->owner->name}}</td>
                            <td>{{$coupon->owner->surname}}</td>
                            <td>{{$coupon->owner->email}}</td>
                            <td>{{$coupon->owner->phone}}</td>
                            <td>{{$coupon->item->name}}</td>
                            <td>{{$coupon->owner->money}}</td>
                            <td>{{$coupon->created_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
