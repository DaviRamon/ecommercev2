@extends('layouts.app-padrao', ["current" => "nova-comida"])
@section('title', 'Ecommerce Davi')
@section('body')


<div class="form-group">
// O segundo e terceiro parâmetro são opcionais. <br>
{!! Form::text('name-field', ' ', ['placeholder' => 'Preencha este campo'], ['class' => 'form'] ) !!}
</div>

 
<div class="form-group">
// Resultado final: <br>
<input type="text" class="form-control" name="nomeComida" id="nomeComida" placeholder="Insira o nome"> <br>

<input type="text" class="form-control" name="nomeComida" placeholder="Preencha este campo"> <br>

{{ !! Form::close()}}
</div>


@endsection