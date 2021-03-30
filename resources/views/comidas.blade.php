@extends('layouts.app', [ "current" => "comidas" ])
@section('title', 'Ecommerce Davi')
@section('body')


<div class="card border">
    <div class="card-body">
        <h5 class="card-title"> Comidas</h5>
@if(count($coms) > 0 )        
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Codigo da Comida</th>
                    <th>Nome da Comida</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
    @foreach($coms as $com)       
            <tr>
                <td>{{ $com->id }}</td>
                <td>{{ $com->nome }}</td>
                <td>{{ $com->estoque }}</td>
                <td>{{ $com->preco }}</td>
                <td>
                    <a href="/comidas/editar/{{ $com->id }}" class="btn btn-sm btn-success"> Editar</a>
                    <a href="/comidas/apagar/{{ $com->id }}" class="btn btn-sm btn-danger"> Apagar</a>
                </td>
            </tr>
    @endforeach      
            </tbody>
        </table>
@endif
        <div class="card-footer">
            <a href="/comidas/novo" class="btn btn-sm btn-dark" role="button"> Adicionar Nova Comida</a>
        </div>
    </div>
</div>



@endsection