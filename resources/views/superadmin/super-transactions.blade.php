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
                    <th>Ստատուս</th>
                    <th>Վճարող</th>
                    <th>Կուպոն</th>
                    <th>Գին</th>
                    <th>Idram</th>
                    <th>Ստեղծումը</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle">
                @if(isset($transactions))
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>
                                @if($transaction->status == 'success')
                                   <p class="text-success"><i class="fa-solid fa-circle-check"></i></p>
                                @elseif($transaction->status == 'pending')
                                    <p class="text-warning"><i class="fa-solid fa-clock"></i></p>
                                @elseif($transaction->status == 'pending')
                                    <p class="text-danger"><i class="fa-solid fa-circle-xmark"></i></p>
                                @endif
                            </td>
                            <td>{{$transaction->buyer->id}}: {{$transaction->buyer->name}} {{$transaction->buyer->surname}}</td>
                            <td>{{$transaction->item->name}}</td>
                            <td>{{$transaction->price}}</td>
                            <td>{{$transaction->idram}}</td>
                            <td>{{$transaction->created_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
