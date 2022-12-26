@extends('layout')

@section('content')
    <div class="col-12 col-sm-8 mx-auto flex-column p-3 d-flex gap-2 gap-sm-3 bg-light my-0 my-sm-5 shadow rounded-sm-1">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">{{__('Գլխավոր')}}</a></li>
                    <li class="breadcrumb-item"><a
                                href="/category/{{$item->category->id}}">{{__($item->category->name)}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$item->name}}</li>
                </ol>
            </nav>
            <div class="col-12 d-flex justify-content-start align-items-center gap-2">
                <p class="fw-bold fs-4">{{$item->name}}</p>
                <p class="badge bg-primary">{{$item->category->name}}</p>
            </div>
        </div>
        <div class="col-12 d-flex gap-0 gap-sm-4 flex-wrap">
            <div class="col-12 col-sm">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/images/' . $item->main_image) }}" class="d-block w-100" alt="...">
                            </div>
                        @foreach(json_decode($item->images) as $image)
                            <div class="carousel-item">
                                <img src="{{ asset('storage/images/' . $image) }}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 row-cols-6 flex-wrap d-flex mt-1">
                    @foreach(json_decode($item->images) as $image)
                        <div class="col pb-1 @if($loop->index != 5) pe-1 @endif" data-bs-target="#carouselExampleControls" data-bs-slide-to="{{$loop->index + 1}}">
                            <img src="{{ asset('storage/images/' . $image) }}"
                                 style="width: 100%;height: 100%;object-fit: cover" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-sm flex-column d-flex justify-content-center gap-3">
                <div class="col-12 d-none d-sm-flex">
                    {{$item->text}}
                </div>
                <div class="col-12 d-none d-sm-flex justify-content-center align-items-center">
                    <div class="col d-flex flex-wrap justify-content-center">
                        <div class="col-12 text-center">
                            <p><i class="fa-regular fa-clock me-1"></i> {{__('Ակցիան ուժի մեջ է')}}</p>
                        </div>
                        <div class="col-12 d-flex gap-2 justify-content-center">
                            <div class="col-auto border rounded-1 p-1">
                                <p>{{$item->start_time}}</p>
                            </div>
                            <div class="col-auto border rounded-1 p-1">
                                <p>{{$item->end_time}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex gap-2 justify-content-center">
                        <div class="col-auto">
                            <p class="text-secondary text-decoration-line-through">{{$item->old_price}}</p>
                        </div>
                        <div class="col-auto">
                            <p class="text-success">{{$item->new_price}} {{__('դր.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-none d-sm-flex gap-3 justify-content-center align-items-center">
                    <div class="col-auto">
                        <p>{{__('Գնված է')}}: <span class="text-success fw-bold">{{count($item->coupons)}}</span></p>
                    </div>
                    <div class="col-auto">
                        <a href="/buy-item/{{$item->id}}">
                            <button class="btn btn-success"><i class="fa-solid fa-cart-shopping me-1"></i> {{__('Գնել')}}</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex d-sm-none justify-content-center align-items-center">
            <div class="col-auto flex-column flex-wrap justify-content-start">
                <div class="col-auto">
                    <p><i class="fa-regular fa-clock me-1"></i> Ակցիան ուժի մեջ է</p>
                </div>
                <div class="col-auto d-flex gap-2 justify-content-start" style="font-size: 0.8rem">
                    <div class="col-auto border rounded-1 p-1">
                        <p>{{$item->start_time}}</p>
                    </div>
                    <div class="col-auto border rounded-1 p-1">
                        <p>{{$item->end_time}}</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex gap-2 justify-content-center">
                <div class="col-auto flex-column justify-content-center">
                    <div class="d-flex gap-2">
                        <p class="text-secondary text-decoration-line-through">{{$item->old_price}}</p>
                        <p class="text-success">{{$item->new_price}} դր.</p>
                    </div>
                    <div class="text-center">
                        <p>Գնված է: <span class="text-success fw-bold">{{count($item->coupons)}}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-1 d-flex d-sm-none gap-3 justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center">
                <a href="/buy-item/{{$item->id}}" class="col-10 mx-auto">
                    <button class="col-12 text-nowrap btn text-light border-0 px-5 py-3 fs-4" style="background: linear-gradient(to top,#009341,#1cbb1c)"><i class="fa-solid fa-cart-shopping me-1"></i> Գնել</button>
                </a>
            </div>
        </div>
        <div class="col-12 p-5 pt-1">
            {{$item->info}}
        </div>
    </div>
    @include('components.footer')
@endsection

