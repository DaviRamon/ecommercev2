@extends('layouts.app-padrao', ["current" => "nova-comida"])
@section('title', 'Ecommerce Davi')
@section('body')

<main role="main">
    <div class="card border">
        <div class="card-body">
            <form action="/bebidas" method="POST" onclick="checkForm()">
                @csrf
                <div class="form-group">
                    <label for="novaComida"> Nome da Bebida </label>
                    <input type="text" class="form-control {{ $errors->has ('marcaBebida') ? 'is-invalid' : '' }}" name="marcaBebida" id="marcaBebida" placeholder="Insira o nome da bebida (caso tenha)">
@if ($errors->has('marcaBebida'))
                <div class="invalid-feedback">
{{$errors->first('marcaBebida')}}                
                </div>
@endif                
                </div>



                <div class="form-group">
                    <label for="novaComida"> Quantidade em Estoque</label>
                    <input type="number" class="form-control {{ $errors->has ('quantidadeBebida') ? 'is-invalid' : '' }}" name="quantidadeBebida" id="quantidadeBebida" placeholder="Informe a quantidade">
@if ($errors->has('quantidadeBebida'))
                <div class="invalid-feedback">
{{$errors->first('quantidadeBebida')}}                
                </div>
@endif


                <div class="form-group">
                    <label for="novaComida"> Tipo </label>
                    <input type="string" step="0.01" class="form-control {{ $errors->has ('tipoBebida') ? 'is-invalid' : '' }}" name="tipoBebida" id="tipoBebida" placeholder="Informe o tipo da bebida. Ex: suco de laranja">
@if ($errors->has('tipoBebida'))
                <div class="invalid-feedback">
{{$errors->first('tipoBebida')}}                
                </div>      
@endif                              
                </div>



                <div class="form-group">
                    <label for="novaComida"> Preço </label>
                    <input type="number" step="0.01" class="form-control {{ $errors->has ('precoBebida') ? 'is-invalid' : '' }}" name="precoBebida" id="recoBebida" placeholder="Informe o valor R$:">
@if ($errors->has('precoBebida'))
                <div class="invalid-feedback">
{{$errors->first('precoBebida')}}                
                </div>
@endif                                    
                </div>

                <button type="submit" class="btn btn-success btn-sm" id="btnass">Salvar</button>
                <button href="/bebidas"  class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
</main>

<script type="text/javascript">

function checkForm(form)
{

form.btnass.disabled = true;
	
	return true;
}
</script>

@endsection