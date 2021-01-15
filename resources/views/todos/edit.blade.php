@extends('todos.layout')


@section('content')
<div class="card text-center" style="max-width: 500px;margin:30px auto;">
    <form action="{{route('todo.update', $todo->id)}}" method="post" class="p-4">
        <x-alert />
        @csrf
        @method('patch')
        <h4 class="mb-4">Update To-Do List</h4>
        <input type="text" name="title" class="form-control mb-2 d-inline-block py-3 px-3 @error('title') is-invalid @enderror" value="{{$todo->title}}" placeholder="Enter Title"/>
        <textarea class="form-control mb-2" name="description" placeholder="Enter Description">{{$todo->description}}</textarea>
        <input type="submit" value="update" class="btn btn-primary" />
        @error('title')
            <span class="invalid-feedback text-left" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </form>
</div>
@endsection