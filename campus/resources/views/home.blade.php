@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Usuarios</div>

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

                    <div class="container">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                               <!-- <th>Roles Asignados</th> --->
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "/api/users",
                 "columns": [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                ]
            } );
        } );
    </script>

@endsection


