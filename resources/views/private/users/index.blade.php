@extends('layouts.master')
@section('main_content')
    <section>
        <h2>Usuarios</h2>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Fecha registro</td>
                <td>Acciones:</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->correo }}</td>
                    <td>{{ $user->telefono }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('users.destroy') }}" method="DELETE">
                            <button type="submit"> <i style="cursor: pointer" role="button"
                                    class="fa-solid fa-trash"></i></button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </section>
@endsection
