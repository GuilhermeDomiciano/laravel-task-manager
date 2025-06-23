@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    @if (session('success')) {{-- CORRIGIDO AQUI: 'sucess' para 'success' --}}
        <div style="background-color: lightgreen; padding: 10px; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="background-color: lightcoral; padding: 10px; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Minhas Tarefas</h1>
    <a href="{{ route('tasks.create') }}">Nova Tarefa</a>
    <ul>
        @foreach ( $tasks as $task)
            <li>
                {{ $task->title }} - 
                @if ($task->is_completed)
                    (Concluída)
                @else
                    (Pendente)
                @endif
                <a href="{{ route('tasks.show', $task->id) }}">Ver</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Editar</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection