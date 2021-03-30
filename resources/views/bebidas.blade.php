@extends('layouts.app', [ "current" => "bebidas" ]) 
@section('title', 'Ecommerce Davi')
@section('body')


<div class="card border">
    <div class="card-body">
        <h5 class="card-title"> Bebidas</h5>
@if(count(@$bebs) > 0 )        
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Codigo da Bebida</th>
                    <th>Marca </th>
                    <th>Estoque </th>
                    <th>Tipo </th>
                    <th>Preço </th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
    @foreach($bebs as $beb)       
            <tr>
                <td>{{ $beb->id }}</td>
                <td>{{ $beb->marca }}</td>
                <td>{{ $beb->estoque }}</td>
                <td>{{ $beb->tipo }}</td>
                <td>{{ $beb->preco }}</td>
                <td>
                    <a href="/bebidas/editar/{{ $beb->id }}" class="btn btn-sm btn-success"> Editar</a>
                    <a href="/bebidas/apagar/{{ $beb->id }}" class="btn btn-sm btn-danger"> Apagar</a>
                </td>
            </tr>
    @endforeach      
            </tbody>
        </table>
@endif
        <div class="card-footer">
            <a href="/bebidas/novo" class="btn btn-sm btn-dark" role="button"> Adicionar Nova Bebida</a>
        </div>
    </div>
</div>




@endsection