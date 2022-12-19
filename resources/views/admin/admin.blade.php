@extends('admin.admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Список всех акции
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Old price</th>
                    <th>New price</th>
                    <th>Buy count</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody class="text-center align-middle">
                @if(isset($items) and $items != null)
                    @foreach($items as $item)
                        <tr>
                            <td class="fw-bold">{{$item->id}}</td>
                            <td><a href="item/{{$item->id}}" class="text-hover">{{$item->name}}</a></td>
                            <td class="p-1" style="width: 100px"><img src="{{ asset('storage/images/' . $item->main_image) }}" style="width: 100%;height: 100%;object-fit: cover" alt=""></td>
                            <td><a href="category/{{$item->categories_id}}" class="text-hover">{{$item->category->name}}</a></td>
                            <td class="text-nowrap">{{$item->start_time}}</td>
                            <td class="text-nowrap">{{$item->end_time}}</td>
                            <td>{{$item->old_price}}</td>
                            <td>{{$item->new_price}}</td>
                            <td>{{$item->buy_count}}</td>
                            <td>{{$item->created_at->diffForHumans()}}</td>
                            <td><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-item-modal{{$item->id}}"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-item-modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Удаление</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Вы хотите удалить акцию <span class="fw-bold">{{$item->name}}</span> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                        <button type="button" class="btn btn-danger"><a href="delete-item/{{$item->id}}">Удалить</a></button>
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
