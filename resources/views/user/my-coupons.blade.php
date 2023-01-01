@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 p-3 gap-2 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                @foreach($coupons as $coupon)
                    <div
                        class="col-12 d-flex p-2 rounded-1 align-items-center border border-secondary border-opacity-10">
                        <div class="col d-flex gap-2 overflow-hidden">
                            <div class="col-auto d-flex align-items-center">
                                @if($coupon->status == 0)
                                    <p class="text-primary"><i class="fa-solid fa-circle-check me-1"></i> Ակտիվ</p>
                                @else
                                    <p class="text-success"><i class="fa-solid fa-check-to-slot me-1"></i> Կատարած</p>
                                @endif
                            </div>
                            <div class="col-auto">
                                <img src="{{asset('storage/images/' . $coupon->item->main_image)}}"
                                     style="width: 50px;height: 50px;object-fit: cover" alt="">
                            </div>
                            <div class="col-auto d-flex flex-column">
                                <div class="col-auto">
                                    <p class="text-truncate">{{$coupon->item->name}}</p>
                                </div>
                                <div class="col-auto">
                                    <p>{{__('Զեղչ')}}: <span
                                            class="text-white bg-success bg-gradient rounded-1 py-0 px-1">{{$coupon->item->old_price - $coupon->new_price}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-column">
                            <div class="col-auto text-center">
                                {{__('Կուպոնը գործում է մինչև')}}
                            </div>
                            <div class="col-auto text-center">
                                {{$coupon->item->end_time}}
                            </div>
                        </div>
                        <div class="col-auto ps-2" data-bs-toggle="modal" data-bs-target="#showQrModal">
                            <img src="{{asset('storage/qr/' . $coupon->qr)}}" style="width: 50px;height: auto" alt="">
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="showQrModal" tabindex="-1" aria-labelledby="showQrModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Qr - {{$coupon->qr}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-3">
                                        <div class="col-8 mx-auto">
                                            <img src="{{asset('storage/qr/' . $coupon->qr)}}" style="width: 100%;height: auto"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}
                                        </button>
                                        <a href="{{asset('images/qr.png')}}" download="">
                                            <button type="button" class="btn btn-primary">{{__('Ներբեռնել')}}</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
