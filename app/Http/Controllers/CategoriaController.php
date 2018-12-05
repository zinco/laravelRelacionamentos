<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Categoria;

use App\Http\Controllers\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = new Categoria();
        $categorias = $categoria->all();
        $title = "Lista Categorias";
        return view('categoria.index',compact('categorias','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        $categorias = $categoria->all()->where('excluido', '=', '0');
        $title = "Formulário Categoria";
        return view('categoria.create',compact('categorias','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Categoria::create($request->all());

        \Session::flash('flash_message', $request['nome'].' Cadastro atualizado com sucesso');
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
        $categoria = Categoria::findOrFail($id);
        $title = "Editar Categoria";
        
        return view('categoria.edit',compact('categoria','title'));
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
        $Categoria = Categoria::findOrFail($id);
        $Categoria->update($request->all());
        return redirect()->route('categoria.create',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->excluido = true;
        $categoria->save();

        \Session::flash('flash_excluido',$categoria->nome.' Cadastro excluido com sucesso');
        return redirect()->back();
    }
}
