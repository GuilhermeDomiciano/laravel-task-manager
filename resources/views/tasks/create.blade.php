@extends('layouts.app')

@section('title', 'Criar nova tarefa')

@section('content')
    <h1>Criar Nova Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Descrição:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="due_date">Data de Vencimento:</label><br>
        <input type="date" id="due_date" name="due_date"><br><br>

        <button type="submit">Salvar Tarefa</button>
    </form>
    <a href="{{ route('tasks.index') }}">Voltar para a Lista</a>
@endsection