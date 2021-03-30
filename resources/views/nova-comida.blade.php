@extends('layouts.app-padrao', ["current" => "nova-comida"])
@section('title', 'Ecommerce Davi')
@section('body')

<main role="main">
    <div class="card border">
        <div class="card-body">
        <!---->
            <form action="/comidas" method="POST" onclick="checkForm()">
                @csrf
                <div class="form-group">
                    <label for="novaComida"> Nome da Comida</label>
                    <input type="text" class="form-control {{ $errors->has('nomeComida') ? 'is-invalid' : ''  }}" name="nomeComida" id="nomeComida" placeholder="Insira o nome">
@if($errors->has('nomeComida'))
                    <div class="invalid-feedback">
{{$errors->first('nomeComida')}}
                    </div>
@endif
                </div>



                <div class="form-group">
                    <label for="novaComida"> Quantidade em Estoque</label>
                    <input type="number" class="form-control {{ $errors->has('quantidadeComida') ? 'is-invalid' : ''  }}" name="quantidadeComida" id="quantidadeComida" placeholder="Informe a quantide">
@if($errors->has('quantidadeComida'))
                <div class="invalid-feedback">
{{$errors->first('quantidadeComida')}}
                </div>
@endif
                </div>



                <div class="form-group">
                    <label for="novaComida"> Preço </label>
                    <input type="number" step="0.01" class="form-control {{ $errors->has('precoComida') ? 'is-invalid' : '' }}" name="precoComida" id="precoComida" placeholder="Informe o valor R$:">
@if($errors->has('precoComida'))
                <div class="invalid-feedback">
{{$errors->first('precoComida')}}                
                </div>
@endif                
                </div>



                <button type="submit" class="btn btn-success btn-sm" id="btnass" >Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
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