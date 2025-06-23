<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa: {{ $task->title }}</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required><br><br>

        <label for="description">Descrição:</label><br>
        <textarea id="description" name="description">{{ old('description', $task->description) }}</textarea><br><br>

        <label for="due_date">Data de Vencimento:</label><br>
        <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}"><br><br>

        <input type="checkbox" id="is_completed" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
        <label for="is_completed">Concluída?</label><br><br>

        <button type="submit">Atualizar Tarefa</button>
    </form>
    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
</body>
</html>
