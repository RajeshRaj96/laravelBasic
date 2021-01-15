@if($item->completed)
    <a href="javascript:void(0);" 
    onclick="event.preventDefault(); document.getElementById('incomplete_todo_{{$item->id}}').submit()"
    class="btn btn-primary btn-sm ml-1"> <i class="fa fa-check"></i></a>
    <form class="d-none" action="{{route('todo.incomplete', $item->id)}}" method="post" id="incomplete_todo_{{$item->id}}">
    @csrf    
    @method('delete')
    </form>
@else
<a href="javascript:void(0);" 
onclick="event.preventDefault(); document.getElementById('complete_todo_{{$item->id}}').submit()"
class="btn btn-info btn-sm ml-1"> <i class="fa fa-check"></i></a>
<form class="d-none" action="{{route('todo.complete', $item->id)}}" method="post" id="complete_todo_{{$item->id}}">
    @csrf    
    @method('put')
</form>
@endif