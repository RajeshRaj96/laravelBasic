<a href="javascript:void(0);" 
onclick="event.preventDefault(); 
if(confirm('Are you really want to delete')){
document.getElementById('delete_todo_{{$item->id}}').submit()
}" 
class="btn btn-danger btn-sm ml-1"> <i class="fa fa-trash"></i></a>
<form action="{{route('todo.destroy', $item->id)}}" method="post" id="delete_todo_{{$item->id}}">
    @csrf
    @method('delete')    
</form>