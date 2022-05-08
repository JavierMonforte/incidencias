@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de actividades
             
        </h1>


        <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Duracion</th>
            <th>Participantes</th>
        </tr>
        @forelse ($CABECERA as $cabeceras)
        <tr>
            <td>{{$cabeceras->NOMCLI}} </td>
            <td>{{$cabeceras->REFERENCIA}} </td>
            <td>{{$cabeceras->CODCLI}} </td>
            <td>{{$cabeceras->SERIE}} </td>
            
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
        </table>





        </div>
    </div>
</div>
@endsection




