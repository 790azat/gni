@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 p-3 gap-2 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                <div class="col-12 col-sm p-3 d-flex flex-wrap justify-content-center align-content-start bg-white rounded-1 border border-1 border-opacity-10 border-secondary" style="height: min-content">
                    <div class="col-12 d-flex justify-content-center py-2">
                        <p><i class="fa-solid fa-wallet me-1"></i> {{__('Դրամապանակ')}}: <span class="fw-bold text-success"> {{$user->money}}</span> {{__('դր.')}}</p>
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#addMoneyModal" class="btn col-12 mt-2 d-flex justify-content-center py-2 rounded-1 bg-success bg-gradient text-light">
                        <p><i class="fa-solid fa-plus me-1"></i> {{__('Լիցքավորել')}}</p>
                    </div>
                    <div class="col-12 mt-2 d-flex justify-content-center bg-dark py-2 rounded-1">
                        <img src="{{asset('images/idram.svg')}}" style="width: 100px;height: auto" alt="">
                    </div>
                    <div class="col-12 mt-2 d-flex justify-content-center bg-dark py-2 rounded-1">
                        <img src="{{asset('images/easypay.png')}}" style="width: 100px;height: auto;margin-top: 4.405px;margin-bottom: 4.405px" alt="">
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addMoneyModal" tabindex="-1" aria-labelledby="addMoneyModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Գումարի չափսը')}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body py-3">
                                    <form action="/add-money" method="post" enctype="multipart/form-data" class="col-6 mx-auto">
                                        <div class="input-group">
                                            <input type="number" class="form-control">
                                            <div class="input-group-text">{{__('ՀՀ դրամ')}}</div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}</button>
                                    <button type="button" class="btn btn-primary">{{__('Համալրել')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm p-3 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12 d-flex justify-content-center py-2 mb-2">
                        <p><i class="fa-solid fa-file-invoice me-1"></i> {{__('Գործարքների պատմություն')}}</p>
                    </div>
                    @foreach($transactions as $transaction)
                        <div class="col-12 d-flex justify-content-start align-items-center gap-2 py-2 rounded-1 border border-1 border-opacity-10 border-secondary">
                                @if($transaction->status == 'success')
                                <div class="text-success ms-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                @elseif($transaction->status == 'pending')
                                <div class="text-warning ms-2">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                @elseif($transaction->status == 'canceled')
                                <div class="text-danger ms-2">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </div>
                                @endif
                            <div>
                                <p>{{$transaction->item->name}} <br> {{__('Գումար')}}: 300{{__('դր.')}} <br> {{$transaction->created_at}} <br> Idram: {{$transaction->idram}} </p>
                            </div>
                            <div class="ms-auto me-2 bg-primary text-light p-1 rounded-1">
                                <p class="text-nowrap">{{__('Կտրոն')}} <i class="ms-1 fa-solid fa-receipt"></i></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
