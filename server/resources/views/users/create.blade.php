<!-- resources/views/users/create.blade.php -->
@extends('layout')

@section('title', 'Crear Usuario')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="lastName">Apellido:</label>
        <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
        @error('lastName')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
        @error('phone')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('users.index') }}">Volver a la lista</a>
@endsection
