<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bebida;


class DrinkController extends Controller
{


    public function __construct()
    {   
        //  Para poder acessar o controlador index() precisa estar autenticado. 
        $this->middleware('auth');
    }





     /**
     *retorna a view principal das bebidas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebs = Bebida::all();
        return view('bebidas', compact('bebs'));
    }

    /**
     * Retorna a view para adiconar uma nova-bebida.
     *
     * @return \Illuminate\Http\Response
     */
    public function returnDrinkView()
    {
        return view('nova-bebida');
    }

    /**
     *  Função que Recebe os dados do formulário e armazenda no DB
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newDrink(Request $request)
    {

// regras para possiveis erros de inserção no formulário.
        // 'name' do input do formulario'| 'unique: nome da tabela'

        
        $regrasRequired = [
            'marcaBebida' => 'required|min:2|max:30|',
            'quantidadeBebida' => 'required|min:1',
            'tipoBebida' => 'required',
            'precoBebida' => 'required'
        ];

        // mensagens para possíveis erros de inserção no formulário
        $mensagensRequired =[
            'marcaBebida.required' => 'É necessario informar o nome da bebida',
            'marcaBebida.min' => 'O nome deve conter no mínimo 3 caracteres',
            'marcaBebida.max' => 'O nome deve conter no máximo 30 caracteres',
            'quantidadeBebida.required' => 'Informe a quantidade no estoque',
            'quantidadeBebida.min'=> 'É necessário pelo menos 1 no estoque',
            'tipoBebida.required' => 'É necessário informar o tipo da bebida',
            'precoBebida.required' => 'Informe o preço da bebida'
        ];

        $request->validate($regrasRequired, $mensagensRequired);


        $bebida = new Bebida();
        $bebida->marca = $request->input('marcaBebida');
        $bebida->estoque = $request->input('quantidadeBebida');
        $bebida->tipo = $request->input('tipoBebida');
        $bebida->preco = $request->input('precoBebida');
        $bebida->save();
        return redirect('/bebidas');
    }

     /**
     *   Função para apagar uma bebida
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyDrink($id)
    {
        $bebida = Bebida::find($id);
        if(isset($bebida)){
            $bebida->delete();
        }
        return redirect('/bebidas');
    }


    /**
     * Função que retorna a view para editar bebidas
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDrink($id)
    {
        $bebida = Bebida::find($id);
        if(isset($bebida)){
            return view('editar-bebida', compact('bebida'));
        }
        return redirect('/bebidas');
    }

    /**
     * Recebe por post o id a bebida a ser atualizado. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDrink(Request $request, $id)
    {   
        $bebida = Bebida::find($id);
        if(isset($bebida)){
            $bebida->marca = $request->input('marcaBebida');
            $bebida->estoque = $request->input('quantidadeBebida');
            $bebida->tipo = $request->input('tipoBebida');
            $bebida->preco = $request->input('precoBebida');
            $bebida->save();
            return redirect('/bebidas');
        
        }
    }
}
