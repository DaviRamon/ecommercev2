<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comida;

class FoodController extends Controller
{


    public function __construct()
    {   
        //  Para poder acessar o controlador index() precisa estar autenticado. 
        $this->middleware('auth');
    }





    /**
     * mostra a view com uma lista da view  comidas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coms = Comida::all();
        return view('comidas', compact('coms'));
    }

    /**
     * Retorna a view para adicionar uma nova comida. 
     *
     * @return \Illuminate\Http\Response
     */
    public function returnFoodView()
    {
        return view('nova-comida');
    }

    /**
     * Função quer recebe os dados do formulário e armazenda no DB
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newFood(Request $request)
    {

        // // 'email' => 'required|email' 
        // regras para possiveis erros de inserção no formulário.
        // 'name' do input do formulario'| 'unique: nome da tabela;
        $regrasRequired = [
            'nomeComida' => 'required|min:2|max:30|',
            'quantidadeComida' => 'required|min:1',
            'precoComida' => 'required'
        ];

        // mensagens para possíveis erros de inserção no formulário
        $mensagensRequired =[
            'nomeComida.required' => 'É necessario informar o nome da comida',
            'nomeComida.min' => 'O nome deve conter no mínimo 3 caracteres',
            'nomeComida.max' => 'O nome deve conter no máximo 30 caracteres',
            'quantidadeComida.required' => 'Informe a quantidade no estoque',
            'quantidadeComida.min'=> 'É necessário pelo menos 1 no estoque',
            'precoComida.required' => 'Informe o preço da comida'
        ];

        $request->validate($regrasRequired, $mensagensRequired);
        

        $comida = new Comida();
        $comida->nome = $request->input('nomeComida');
        $comida->estoque = $request->input('quantidadeComida');
        $comida->preco = $request->input('precoComida');
        $comida->save();
        return redirect('/comidas');
    }

    
    /**
     * Função que apaga uma comida
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyFood($id)
    {
        $comida = Comida::find($id);
        if(isset($comida)){
            $comida->delete();
        }
        return redirect('/comidas');
    }


    /**
     * Função que retorna a view para editar comidas
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editFood($id)
    {
        $comida = Comida::find($id);
        if(isset($comida)){
            return view('editar-comida', compact('comida'));
        }
        return redirect('/comidas');
    }

  

    /**
     * Recebe por post o id a comida a ser atualizado. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFood(Request $request, $id)
    {
        $comida = Comida::find($id);
        if(isset($comida)){
           $comida->nome = $request->input('nomeComida');
           $comida->estoque = $request->input('quantidadeComida');
           $comida->preco = $request->input('precoComida');
           $comida->save();
           return redirect('/comidas');
        }
    }
}
