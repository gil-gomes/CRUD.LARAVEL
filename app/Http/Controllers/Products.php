<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produto;

class Products extends Controller

//===============
//Exibir formulário
//===============
{
    public function show(){
    	return view('cadProduto');
    }

//===============
//Tratar dados
//===============
    public function creat(Request $dados){
        
            $produto = new produto;
        	$produto->nome = $dados->nome;
        	$produto->categoria = $dados->categoria;
        	$produto->valor = $dados->preco;

        	$produto->save();

            $mensagem = 'Produto cadastrado com sucesso!';

        return view('cadProduto')->with('mensagem', $mensagem);
    }

//===============
//Listar dados
//===============
    public function list(){

        $produto = produto::latest()->paginate(2);
    	
        return view('lista')->with('produtos', $produto);
    }

//===============
//Editar dados
//===============
    public function mostrar_editar($id){

         $produto = produto::find($id);

         return view('editar')->with('produtos', $produto);
    }


    public function edit(Request $request, $id){

        $produto = produto::findOrFail($id);
        $produto->update( $request->all() );

        //$produto->nome = $request->nome;
        //$produto->categoria = $request->categoria;
        //$produto->valor = $request->preco;

        //$produto->save();

        return redirect('/listar');

    }

//===============
//Deletar dados
//===============
    public function destroy($id){

        $produto = produto::find($id);

        $produto->delete();

        $produto = produto::all();

         return view('lista',[
            'produtos' => $produto,
         ]); 
    }
}
