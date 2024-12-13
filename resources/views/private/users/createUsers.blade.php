@extends('layouts.master')
@section('main_content')
    <section>
        <h2>Registrar usuarios</h2>
        <div class="table-users-container">
            <div class="form-container">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" name="nombre" placeholder="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email" name="correo" placeholder="correo">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>

                        <input type="text" name="telefono" placeholder="telefono">
                    </div>

                    <div class="form-group">
                        <label for="">Contrasena</label>

                        <input type="password" name="contrasena" placeholder="contrasena">
                    </div>
                    <div class="errors-form">
                        @if ($errors->any())
                            <ul style="color: red">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="success-form">
                        @if (session('success'))
                            <p style="color: green">{{ session('success') }}</p>
                        @else
                            <p style="color: red">{{ session('error') }}</p>
                        @endif
                    </div>
                    <div class="container-buttons-form">
                        <button type="submit">Guardar usuario</button>
                        <a href="{{ route('users.index') }}">Volver atras</a>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
