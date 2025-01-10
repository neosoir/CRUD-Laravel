<!-- resources/views/users/edit.blade.php -->
@extends('layout')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="lastName">Apellido:</label>
        <input type="text" id="lastName" name="lastName" value="{{ old('lastName', $user->lastName) }}" required>
        @error('lastName')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" required>
        @error('phone')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">Nueva Contraseña (opcional):</label>
        <input type="password" id="password" name="password">
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('users.index') }}">Volver a la lista</a>
@endsection
