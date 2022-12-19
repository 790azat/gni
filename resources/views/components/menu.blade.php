<div class="col-12 px-2 px-sm-0">
    <div class="d-flex">
        <div class="col-auto me-auto d-flex d-md-none justify-content-start align-items-center">
            <img src="{{ asset('images/google-play.png') }}" style="width: auto;height: 50px" alt="">
        </div>
        <div class="col-auto me-2 d-flex d-md-none btn btn-outline-secondary justify-content-center align-items-center rounded" type="button" style="width: 50px;height: 50px">
            <i class="fa-solid fa-filter"></i>
        </div>
        <div class="col-auto d-flex d-md-none btn btn-outline-secondary justify-content-center align-items-center rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width: 50px;height: 50px">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <style>
        .menu-button-hover:hover {
            background: #0c5d50 !important;
        }

    </style>
    <div class="col-12 mx-auto gap-2 flex-wrap d-none d-md-flex justify-content-center align-items-center">
        <div class="col-auto d-flex flex-nowrap">
            <a href="{{route('welcome')}}"><button class="btn btn-success bg-gradient border-0 text-nowrap rounded-start rounded-0 menu-button-hover" style="background: @if(Route::currentRouteName() == 'welcome') #13695c @else #1b9482; @endif"><i class="fa-solid fa-list me-1"></i> {{__('Բոլորը')}}</button></a>
            <a href="{{route('welcome')}}"><button class="btn btn-success bg-gradient border-0 text-nowrap rounded-0 menu-button-hover" style="background: @if(Route::currentRouteName() == 'welcome') #1b9482 @else #1b9482; @endif"><i class="fa-solid fa-filter me-1"></i> {{__('Ֆիլտեր')}}</button></a>
            <a href="{{route('welcome')}}"><button class="btn btn-success bg-gradient border-0 text-nowrap rounded-end me-2 rounded-0 menu-button-hover" style="background: @if(Route::currentRouteName() == 'welcome') #1b9482 @else #1b9482; @endif"><i class="fa-solid fa-sort me-1"></i> {{__('Դասակարգել')}}</button></a>
        </div>
        <div class="col d-flex">
            @foreach($categories as $category)
                @if($loop->index >= 6)
                    @break
                @endif
                <a href="/category/{{$category->id}}" class="p-0"><button class="btn btn-success rounded-0 @if($loop->first) rounded-start @endif @if($loop->last) rounded-end @endif @if(Route::current()->id == $category->id) active @endif">{{__($category->name)}}</button></a>
            @endforeach
                <button data-bs-toggle="dropdown" aria-expanded="false" class="p-0 ms-1 col btn btn-success rounded-0 rounded-end">{{__('Այլ')}} <i class="fa-solid fa-caret-down ms-1"></i></button>
                <style>
                    .dropdown-item:hover {
                        background: #0f7948 !important;
                    }
                </style>

                <ul class="dropdown-menu bg-success text-light">

                    @foreach($categories as $category)
                        @if($loop->index < 6)
                            @continue
                        @endif
                            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{__($category->name)}}</a></li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>
