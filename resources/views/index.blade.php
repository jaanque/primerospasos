<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>

    <h1>Lista de Tareas</h1>

    @if ($tasks->isEmpty())
        <p>No hay tareas registradas.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li style="list-style-type: none; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <strong style="color: #333; font-size: 1.2em;">{{ $task->title }}</strong>
                    <br>
                    Descripción: {{ $task->description }}
                    <br>
                    Estado:
                    @if ($task->completed)
                        <span>Completada</span>
                    @else
                        <span>Pendiente</span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>