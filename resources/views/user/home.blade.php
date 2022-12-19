@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 d-flex gap-2 flex-wrap">
                <div class="col p-3 d-none d-sm-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12 d-flex justify-content-start mb-2">
                        <p class="text-secondary">{{__('Անուն')}}: <span class="text-dark"> {{$user->name}}</span></p>
                    </div>
                    <div class="col-12 d-flex justify-content-start mb-2">
                        <p class="text-secondary">{{__('Ազգանուն')}}: <span class="text-dark"> {{$user->surname}}</span></p>
                    </div>
                    <div class="col-12 d-flex justify-content-start mb-2">
                        <p class="text-secondary">{{__('Գրանցումը')}}: <span class="text-dark text-decoration-underline">
                                @if($user->facebook_id !== null) Facebook @elseif($user->google_id !== null) Google @else Gni.am @endif
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col p-3 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12 d-flex justify-content-center py-2">
                        <p><i class="fa-solid fa-wallet me-1"></i> {{__('Դրամապանակ')}}: <span class="fw-bold text-success"> {{$user->money}}</span> {{__('դր.')}}</p>
                    </div>
                    <div data-bs-toggle="modal" data-bs-target="#addMoneyModal" class="btn col-12 mt-2 d-flex justify-content-center py-2 rounded-1 bg-success bg-gradient text-light">
                        <p><i class="fa-solid fa-plus me-1"></i> {{__('Լիցքավորել')}}</p>
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
            </div>
            <div class="col-12 d-flex gap-2 flex-wrap">
                <div class="col-12 col-sm p-3 d-flex flex-wrap justify-content-center align-content-start bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <div class="col-12 d-flex justify-content-start pt-2">
                        <p class="text-secondary">{{__('Էլ. հասցե')}}: <span class="text-dark"> {{$user->email}}</span></p>
                    </div>
                    <div class="col-12 d-flex justify-content-start border-bottom border-1 border-opacity-10 border-secondary pb-2">
                        @if($user->email_verified_at !== null)
                            <p class="text-success"><i class="fa-solid fa-circle-check me-1"></i> {{__('Հաստատված')}}</p>
                        @else
                            <p class="text-danger text-nowrap"><i class="fa-solid fa-circle-exclamation me-1"></i>
                                {{__('Չհաստատված')}} <div data-bs-toggle="modal" data-bs-target="#addMailModal"><span class="ms-1 text-primary text-decoration-underline" style="cursor: pointer"> {{__('Հաստատել')}}</span></div></p>
                            <!-- Modal -->
                            <div class="modal fade" id="addMailModal" tabindex="-1" aria-labelledby="addMailModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Էլ. հասցե')}}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body py-3">
                                            <div class="col-6 mx-auto">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                                    <input readonly value="@if($user->email !== null){{$user->email}}@endif" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}</button>
                                            <a href="/resend/{{$user->id}}/{{$user->email}}"><button type="button" class="btn btn-primary">{{__('Ուղղարկել նամակ')}}</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="col-12 d-flex justify-content-start pt-2">
                        <p class="text-secondary">{{__('Հեռախոս')}}: <span class="text-dark"> {{$user->phone}}</span></p>
                    </div>
                    <div class="col-12 d-flex justify-content-start">
                        @if($user->phone_verified_at !== null)
                            <p class="text-success"><i class="fa-solid fa-circle-check me-1"></i> {{__('Հաստատված')}}</p>
                        @else
                        <p class="text-danger text-nowrap"><i class="fa-solid fa-circle-exclamation me-1"></i>
                            {{__('Չհաստատված')}} <div data-bs-toggle="modal" data-bs-target="#addPhoneModal"><span class="ms-1 text-primary text-decoration-underline" style="cursor: pointer"> {{__('Հաստատել')}}</span></div></p>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="addPhoneModal" tabindex="-1" aria-labelledby="addPhoneModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Հեռախոս')}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <div class="col-10 mx-auto">
                                            <form action="/send" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <div class="input-group-text">+374</div>
                                                    <input @if($user->phone !== null) value="{{$user->phone}}" readonly @endif type="tel" name="phone" class="form-control" minlength="8" maxlength="8" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-primary" type="submit" id="button-addon2">@if($user->phone !== null) {{__('Կրկին ուղղարկել')}} @else {{__('Ուղղարկել նամակ')}} @endif</button>
                                                </div>
                                            </form>
                                            @if($user->phone !== null)
                                                <form action="/verify_phone" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text">{{__('Կոդ')}}</div>
                                                        <input type="number" name="code" class="form-control" minlength="6" maxlength="6" aria-label="Recipient's username" aria-describedby="button-addon3">
                                                        <button class="btn btn-primary" type="submit" id="button-addon3">{{__('Հաստատել')}}</button>
                                                    </div>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm p-3 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <p class="px-2">{{__('Խնդրում ենք լրացնել ձեր պրոֆիլը, և մենք ձեզ խորհուրդ կտանք հետաքրքիր առաջարկներ, ինչպես նաև նվերներ կտանք ծննդյան և տոների կապակցությամբ')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
