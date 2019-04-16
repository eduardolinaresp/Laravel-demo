@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Uauarios</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @auth
                    <p>
                      <a class="btn btn-info" href={{ route('usuarios.create') }}>Registrar</a>
                    </p>
                    @endauth

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles Asignados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ count($user->roles) }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                        <table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


