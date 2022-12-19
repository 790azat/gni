@extends('layouts.app')

@section('content')
    <div class="col-12 shadow col-md-8 mt-0 mt-md-5 d-flex flex-wrap justify-content-center justify-content-md-start mx-auto bg-light rounded-1 p-2 p-sm-3">
        @include('user.home-menu')
        <div class="col-12 col-sm d-flex gap-2 flex-wrap p-2 p-sm-3 justify-content-center align-content-start bg-light">
            <div class="col-12 p-3 gap-2 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                <div class="col p-3 d-flex flex-wrap justify-content-center align-content-center bg-white rounded-1 border border-1 border-opacity-10 border-secondary">
                    <form action="/update-user-password" method="post" enctype="multipart/form-data" class="col-12 d-flex flex-wrap">
                        <div class="d-flex col-12 gap-3 mb-2">
                            <div class="col">
                                <label class="col-12">
                                    {{__('Հին գաղտնաբառ')}}
                                    <input type="password" class="form-control" name="password">
                                </label>
                            </div>
                        </div>
                        <div class="d-flex col-12 gap-3 mt-2 mb-2">
                            <div class="col">
                                <label class="col-12">
                                    {{__('Նոր գաղտնաբառ')}}
                                    <input type="text" class="form-control" name="email">
                                </label>
                            </div>
                        </div>
                        <div class="d-flex col-12 gap-3 mb-2">
                            <div class="col">
                                <label class="col-12">
                                    {{__('Կրկնեք նոր գաղտնաբառը')}}
                                    <input type="text" class="form-control" name="email">
                                </label>
                            </div>
                        </div>
                        <div class="d-flex col-12 gap-3 mt-3">
                            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk me-1"></i> {{__('Պահպանել')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
