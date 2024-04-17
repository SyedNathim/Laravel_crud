<!-- resources/views/todos/confirm-delete.blade.php -->

<h1>Confirm Deletion</h1>

<p>Are you sure you want to delete this Todo?</p>
<form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
