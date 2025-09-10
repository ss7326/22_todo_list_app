@if (trim($slot) === 'ToDoApp')
<h1>ToDoApp</h1>
@else
{{ $slot }}
@endif