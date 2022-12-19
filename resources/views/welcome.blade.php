@extends('layout')

@section('content')
    {{App::getLocale()}}
    <div class="col-12 py-1 px-2 px-sm-5 shadow" style="position: relative;z-index: 10;background: linear-gradient(to right,#75c712,#00af8f)">
        <p class="text-light text-center d-sm-none" style="font-size: 12px">{{__('Գրանցվեք, հաստատեք Ձեր Էլ. հասցեն և ստացեք')}}
            <span class="fw-bold text-decoration-underline">5000</span> դրամ նվեր Ձեր հաշվին
        </p>
        <p class="text-light text-center d-none d-sm-block" style="font-size: 14px">Գրանցվեք, հաստատեք Ձեր Էլ. հասցեն և ստացեք
            <span class="fw-bold text-decoration-underline">5000</span> դրամ նվեր Ձեր հաշվին
        </p>
    </div>
    @include('components.hero')
    <div style="min-height: 100vh;background-color: #262626" class="col-12">
        <div class="container pt-3">
            @include('components.menu')
        </div>
        <div class="col-10 py-3 mt-2 row-cols-1 row-cols-sm-2 row-cols-md-3 mx-auto d-flex flex-wrap">
            @foreach($items as $item)
                <a href="/item/{{$item->id}}" class="col p-2 text-light card-hover">
                    <div class="shadow rounded overflow-hidden bg-dark">
                        <div class="col-12">
                            <img src="{{ asset('storage/images/'. $item->main_image) }}"
                                 style="width: 100%;height: 180px;object-fit: cover" alt="">
                        </div>
                        <div class="col-12 p-3 pb-0 d-flex">
                            <p class="fw-bold fs-5">{{$item->name}}</p>
                        </div>
                        <div class="col-12 p-3 pt-1 d-flex">
                            <div class="col overflow-hidden" style="height: 120px">
                                <p>{{$item->text}}</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center gap-2 p-3 price">
                            <div class="col-auto">
                                <p class="text-light text-decoration-line-through">{{$item->old_price}}</p>
                            </div>
                            <div class="col-auto">
                                <p class="text-light fw-bold">{{$item->new_price}} դր.</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @include('components.footer')
@endsection
