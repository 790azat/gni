<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 3147483646;position: absolute;margin-top: 70px">
    <div class="toast align-items-center bg-@if(session('alert')){{explode('%',session('alert'))[0]}}@endif text-bg-@if(session('alert')){{explode('%',session('alert'))[0]}}@endif border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                @if(session('alert')) {{__(explode('%',session('alert'))[1])}} @endif
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@php
    session()->forget('alert')
@endphp


