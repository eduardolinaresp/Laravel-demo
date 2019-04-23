@extends('layouts.app')

@section('content')


    <div class="container">
            <p>
                    <a class="btn btn-info" href={{ route('clientes.create') }}>Registrar</a>
            </p>
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

@endsection


@section('scripts')

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "/api/clientes",
                 "columns": [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                ]
            } );
        } );
    </script>

@endsection
