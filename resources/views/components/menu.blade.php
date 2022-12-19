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
    <div class="col-12 mx-auto flex-wrap d-none d-md-flex justify-content-center align-items-center">
        <a href="{{route('welcome')}}"><button class="btn btn-success rounded-start rounded-0 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'welcome') active @endif">Բոլորը</button></a>
        @foreach($categories as $category)
            <a href="/category/{{$category->id}}"><button class="btn btn-success rounded-0 @if($loop->last) rounded-end @endif @if(\Illuminate\Support\Facades\Route::current()->id == $category->id) active @endif">{{$category->name}}</button></a>
        @endforeach
    </div>
</div>
