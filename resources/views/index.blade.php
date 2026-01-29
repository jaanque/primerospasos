<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <h1>Lista de Tareas</h1>

    @if ($tasks->isEmpty())
        <p>No hay tareas registradas.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <strong>{{ $task->title }}</strong>
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