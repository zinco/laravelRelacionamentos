<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Produto;
use App\model\Categoria;
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $qtdCat = Categoria::all()->count();//informa se tem dategorias cadastrado
       

        $categoria = new Categoria;
        $categorias = $categoria->selectCategorias();
        

        $produto = new Produto();
        $produtos = $produto->produtosCaterogorias();
        $title = "Cadastro Produtos";
     //   dd($categorias);
        return view('produto.create',compact('categorias','produtos','title','qtdCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produto();
       // dd($produtos);
        $input = $request->all();
        //dd($input);
        $produtos->nome =$request->input('nome');
        $produtos->descricao =$request->input('descricao');
        $produtos->categoria_id =$request->input('categoria_id');     
        $produtos->save();
       // return redirect()->route('produto.index');
         
       // return redirect()->route('produto.index');
      \Session::flash('flash_message', $produtos->nome.' Cadastrado com sucesso');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $title = "Editar Produto";

        $categoria = new Categoria;
        $categorias = $categoria->selectCategorias();
       
        
        return view('produto.edit',compact('produto','title','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update($request->all());
        \Session::flash('flash_message', $produto->nome.' Cadastro atualizado com sucesso');
        return redirect()->route('produto.create',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*  $produto->excluido = true;
        $produto->save();*/
        Produto::destroy($id);

        \Session::flash('flash_excluido',' Cadastro excluido com sucesso');
        return redirect()->back();
    }
}
