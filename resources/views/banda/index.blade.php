@extends('layouts.app')

@section('content')
    <h1 class="text-center">Bandas</h1>
    <hr/>

    <h3 class="text-center">Artista</h3>
    <hr/>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Nome</th>
            <td>{{ $integrante->name }}</td>
        </tr>

        <tr>
            <th>ID Banda</th>
            <td>{{ $integrante->banda->id }}</td>
        </tr>

        <tr>
            <th>Banda</th>
            <td>{{ $integrante->banda->name }}</td>
        </tr>
    </table>

    <h3 class="text-center">Instrumentos</h3>
    <hr/>

    <table class="table table-striped table-hover table-bordered">
        @forelse($integrante->instInte as $instInte)
            @foreach($instInte->instrumentos as $inst)
                <tr>
                    <td>{{ $inst->name }}</td>
                </tr>
            @endforeach
        @empty
            <tr>
                <td>Não Tem Instrumentos</td>
            </tr>
        @endforelse
    </table>
@stop
