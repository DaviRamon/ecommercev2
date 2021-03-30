@extends('layouts.app', ["current" => "nova-comida"])
@section('title', 'Ecommerce Davi')
@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/bebidas/{{ $bebida->id }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="novaComida"> Nome da Bebida </label>
                <input type="text" class="form-control" name="marcaBebida" value="{{ $bebida->marca }}" id="marcaBebida" placeholder="Insira a marca da bebida (caso tenha)">
            </div>

            <div class="form-group">
                <label for="novaComida"> Quantidade em Estoque</label>
                <input type="number" class="form-control" name="quantidadeBebida"  value="{{ $bebida->estoque }}"id="quantidadeBebida" placeholder="Informe a quantidade">
            </div>

            <div class="form-group">
                <label for="novaComida"> Tipo </label>
                <input type="string" step="0.01" class="form-control" name="tipoBebida" value="{{ $bebida->tipo }}" id="tipoBebida" placeholder="Informe o tipo da bebida. Ex: suco de laranja">
            </div>

            <div class="form-group">
                <label for="novaComida"> Preço </label>
                <input type="number" step="0.01" class="form-control" name="precoBebida" value="{{ $bebida->preco }}" id="precoBebida" placeholder="Informe o valor R$:">
            </div>

            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            <button href="/bebidas"  class="btn btn-danger btn-sm">Cancelar</button>

        </form>
    </div>
</div>


@endsection