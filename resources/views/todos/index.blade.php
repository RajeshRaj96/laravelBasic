@extends('todos.layout')

@section('content')
<div class="card text-center p-4" style="max-width: 700px;margin:30px auto;">
    <x-alert />
    <h4 class="mb-4 mt-1">All your To-Do</h4>
    <ul class="list-group">
        @forelse ($todos as $item)
         <li class="list-group-item">
             @if($item->completed)
             <p class="d-inline-block"><del>{{$item->title}}</del></p>
             @else
             <p class="d-inline-block">{{$item->title}}</p>
             @endif
             <a href="/todo/{{$item->id}}/edit" class="btn btn-success btn-sm ml-2"> <i class="fa fa-pencil"></i></a>
             @include('todos.complete-button')
             @include('todos.delete-button')
        </li>
        @empty
        <li class="list-group-item">Nothing to show</li>
        @endforelse
    </ul>
</div>
@endsection