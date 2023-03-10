@extends('admin.admin-layout')

@section('content')
    <div class="d-block btn p-0 col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <button class="btn card-body text-center" data-bs-toggle="modal" data-bs-target="#add-category-modal"><i class="fa-solid fa-file-circle-plus me-1"></i> Добавить категорию</button>
            <!-- Modal -->
            <div class="modal fade text-dark" id="add-category-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Добавление категории</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/add-category" class="d-flex justify-content-center" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-6">
                                    <label for="name" class="form-label">Название категории</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-file-circle-plus me-1"></i>
            Категории
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle">
                @if(isset($categories) and $categories != null)
                    @foreach($categories as $category)
                        <tr>
                            <td class="fw-bold">{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>@isset($category->created_at) {{$category->created_at->diffForHumans()}} @endisset</td>
                            <td><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-category-modal{{$category->id}}"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-category-modal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Удаление</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Вы хотите удалить акцию <span class="fw-bold">{{$category->name}}</span> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-danger"><a href="delete-category/{{$category->id}}">Удалить</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
