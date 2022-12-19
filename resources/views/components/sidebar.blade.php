<div class="h-100 flex-column flex-shrink-0 p-3 text-white bg-dark collapse" id="collapseExample" style="width: 280px; position: absolute; z-index: 100;">
    <a href="/" class="d-flex gap-2 align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{asset('images/gni.png')}}" style="width: 25px;height: 24px;" alt="">
        <span class="fs-4" style="font-family: lobster">Gni.am</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto gap-1">
        <li class="nav-item">
            <a href="{{route('welcome')}}" class="nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'welcome') active @endif" aria-current="page">
                Բոլորը
            </a>
        </li>
        @foreach($categories as $category)
            <li class="nav-item">
                <a href="/category/{{$category->id}}" class="nav-link @if(\Illuminate\Support\Facades\Route::current()->id == $category->id) active @endif" aria-current="page">
                    {{$category->name}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
