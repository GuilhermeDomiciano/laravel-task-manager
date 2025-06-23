<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Tarefa</title>
</head>
<body>
    <h1>Detalhes da Tarefa: {{ $task->title }}</h1>
    <p><strong>Descrição:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Concluída' : 'Pendente' }}</p>
    <p><strong>Data de Vencimento:</strong> {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : 'N/A' }}</p>
    <p><strong>Criada em:</strong> {{ $task->created_at->format('d/m/Y H:i') }}</p>
    <p><strong>Atualizada em:</strong> {{ $task->updated_at->format('d/m/Y H:i') }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Editar Tarefa</a>
    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
</body>
</html>