@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                </div>
                <div class=" card-deck">
                    <div class="card border border-dark">
                        <div class="card-body">
                            <h5 class="card-title"> <b>Cadastro de Comidas</b></h5>
                            <p class="card=text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                            <a href="/comidas/novo" class="btn btn-dark"> Cadastrar</a>
                            <a href="/comidas" class="btn btn-dark"> Exibir Comidas </a>
                        </div>
                    </div>
                    <div class="card border border-dark">
                        <div class="card-body">
                            <h5 class="card-title"> <b>Cadastro de Bebidas</b></h5>
                            <p class="card=text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                            <a href="/bebidas/novo" class="btn btn-dark"> Cadastrar</a>
                            <a href="/bebidas" class="btn btn-dark"> Exibir Bebidas </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
