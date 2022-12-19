<style>
    .upload-image {
        cursor: pointer !important;
    }
    .upload-image:hover {
        border: 2px solid #00ce4b !important;
    }
    .upload-image:hover .upload {
        display: flex !important;
        z-index: 10 !important;
    }
    .upload-image:hover .first-image {
        filter: blur(3px);
    }
</style>
<div class="col-12 col-md-2 p-3 d-flex flex-wrap justify-content-center align-content-start" style="min-width: min-content">
    <div data-bs-toggle="modal" data-bs-target="#showAvatarUpload" onclick="$('#avatar').click()" class="d-flex mx-auto justify-content-center align-items-center overflow-hidden rounded-circle upload-image" style="width: 5rem;height: 5rem">
        <div class="upload d-none justify-content-center align-content-center text-light overflow-hidden" style="width: 50px;height: 50px;position: absolute;">
            <img src="{{ asset('images/image-upload.png') }}" style="width: inherit;height: inherit;object-fit: cover" alt="">
        </div>
        <img src="@if(explode('-',$user->avatar)[0] == 'custom') {{asset('storage/avatars/' . $user->avatar)}} @elseif($user->avatar == 'avatar.png') {{asset('images/avatar.png')}} @else {{asset($user->avatar)}} @endif" class="rounded-circle border border-2 first-image" style="width: inherit;height: inherit;object-fit: cover" alt="">
    </div>
    <div class="col ps-3 d-flex d-sm-none align-items-center align-content-center flex-wrap" style="font-size: 0.7rem">
        <div class="col-12">
            <p>{{$user->name}} {{$user->surname}}</p>
        </div>
        <div class="col-12">
            <p class="text-secondary">{{__('Գրանցումը')}}:
                <span class="text-dark text-decoration-underline">
                    @if($user->facebook_id !== null) Facebook @elseif($user->google_id !== null) Google @else Gni.am @endif
                </span>
            </p>
        </div>
        <div class="col-12">
            <p class="text-nowrap">
                @if($user->email_verified_at !== null)
                    <i class="fa-solid fa-circle-check me-1 text-success"></i>
                @else
                    <i class="fa-solid fa-circle-exclamation me-1 text-danger"></i>
                @endif
                    {{$user->email}}
            </p>
        </div>
        <div class="col-12">
            <p class="text-nowrap">
                @if($user->phone_verified_at !== null)
                    <i class="fa-solid fa-circle-check me-1 text-success"></i>
                @else
                    <i class="fa-solid fa-circle-exclamation me-1 text-danger"></i>
                @endif
                0{{$user->phone}}
            </p>
        </div>
    </div>
    <div class="col d-flex justify-content-end align-items-center d-sm-none">
        <div class="border rounded d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu" style="width: 60px;height: 60px">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="collapse d-sm-flex col-12 gap-1 mt-4 mt-sm-3 flex-wrap justify-content-center align-content-start" id="menu">
        <a href="{{route('home')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'home') bg-success @else bg-primary @endif bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-gauge me-1"></i> {{__('Գլխավոր')}}</p>
        </a>
        <a href="{{route('my-coupons')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'my-coupons') bg-success @else bg-primary @endif bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-hand-holding-heart me-1"></i> {{__('Իմ Կուպոնները')}}</p>
        </a>
        <a href="{{route('my-bonuses')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'my-bonuses') bg-success @else bg-primary @endif bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-gift me-1"></i> {{__('Բոնուսներ')}}</p>
        </a>
        <a href="{{route('my-wallet')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'my-wallet') bg-success @else bg-primary @endif bg-primary bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-wallet me-1"></i> {{__('Դրամապանակ')}}</p>
        </a>
        <a href="{{route('my-data')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'my-data') bg-success @else bg-primary @endif bg-primary bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-user-tie me-1"></i> {{__('Իմ տվյալները')}}</p>
        </a>
        <a href="{{route('my-password')}}" class="col-12 @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'my-password') bg-success @else bg-primary @endif bg-primary bg-gradient  text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-lock me-1"></i> {{__('Գաղտնաբառ')}}</p>
        </a>
        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="col-12 bg-primary bg-danger text-center d-flex justify-content-start text-light rounded-2 py-2 px-3">
            <p style="font-size: 12px" class="text-nowrap"><i class="fa-solid fa-right-from-bracket me-1"></i> {{__('Ելք')}}</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script>
        const myCollapsible = document.getElementById('menu')
        myCollapsible.addEventListener('show.bs.collapse', event => {
            myCollapsible.classList.add('d-flex')
        })
        myCollapsible.addEventListener('hidden.bs.collapse', event => {
            myCollapsible.classList.remove('d-flex')
        })
    </script>
</div>
<!-- Modal -->
<div class="modal fade" id="showAvatarUpload" tabindex="-1" aria-labelledby="showAvatarUploadLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('Ձեր պռոֆիլի նկարը')}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body py-3 d-flex justify-content-center align-items-center">
                <img src="" id="finalAvatar" class="rounded-circle img-thumbnail" style="width: 200px;height: 200px;object-fit: cover" alt="">
                <form class="d-none" action="/update-my-avatar" method="post" enctype="multipart/form-data">
                    @csrf
                    <input id="avatar" type="file" accept="image/*" name="avatar">
                    <script>
                        avatar.onchange = evt => {
                            const [file] = avatar.files
                            if (file) {
                                finalAvatar.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Փակել')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Ներբեռնել')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
