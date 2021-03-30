@extends('layouts.app', ["current" => "nova-comida"])
@section('title', 'Ecommerce Davi')
@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/comidas/{{ $comida->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="novaComida"> Nome da Comida</label>
                <input type="text" class="form-control" name="nomeComida" value="{{ $comida->nome }}" id="nomeComida" placeholder="Insira o nome">
            </div>

            <div class="form-group">
                <label for="novaComida"> Quantidade em Estoque</label>
                <input type="number" class="form-control" name="quantidadeComida" value="{{ $comida->estoque }}" id="quantidadeComida" placeholder="Informe a quantide">
            </div>

            <div class="form-group">
                <label for="novaComida"> Preço </label>
                <input type="number" step="0.01" class="form-control" name="precoComida" value="{{ $comida->preco }}" id="precoComida" placeholder="Informe o valor R$:">
            </div>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>





@endsection