@extends('layouts.app', [ "current" => "comidas" ])
@section('title', 'Ecommerce Davi')
@section('body')


<div class="container">
<div class="row justify-content-center">
    <div class="col-lg">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Comidas</b></h5>
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
                                
                        <tbody>
                </table>
               <div class="card-footer">
                  <button class="btn btn-sm btn-dark" role="button" onclick="novaComida()"> Adicionar Nova Comida
               </div>     
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="dlgComida">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formComida">
                <div class="modal-header">
                    <h5 class="modal-title">Nova Comida</h5>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">

                    <div class="form-group">
                        <label for="nomeComida" class="control-label"> Nome da Comida</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeComida" placeholder="Insira o nome">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="QuantidadeComida" class="control-label"> Quantidade em Estoque</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="quantidadeComida" placeholder="Informe a quantidade">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="precoComida" class="control-label"> Preço</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="precoComida" placeholder="Informe o valor R$:">
                        </div>
                    </div>

                </div>

            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark btn-sm" >Salvar</button>
                    <button type="submit" class="btn btn-dark btn-sm" data-dissmiss="modal">Cancelar</button>
        
                </div>
        </form>
        </div>

    </div>
</div>
@endsection




@section('javascript')
<script type="text/javascript"> </script>
<script>

    function novaComida(){
        // limpa os campos ao abrir um novo formulario
        $('#id').val('');
        $('#nomeComida').val('');
        $('#quantidadeComida').val('');
        $('#precoComida').val('');
        
        //mostra o formulário para adicionar novos produtos
        $('#dlgComida').modal('show');

    }
    

    
</script>

@endsection