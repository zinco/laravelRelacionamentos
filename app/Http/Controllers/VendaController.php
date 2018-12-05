<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Categoria;
use App\model\Produto;
use App\model\Venda;
use App\User;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = new Venda;
        $title = "Lista de  Categoria";
        $vendas = $venda->all()->where('excluido', '=', '0');

       
      
        
        return view('venda.index',compact('vendas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = new Produto();
        
       
        
        $list_produtos  = $produtos->selectProdutos();
        return view('venda.create',compact('produtos','list_produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $venda = Venda::create($request->all());
        
        $venda->produtos()->sync($request->produtos_list);
        
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $venda = Venda::findOrFail($id); 
       return view('venda.show',compact('venda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venda = Venda::findOrFail($id); 
       
        

        $produtos = new Produto();  
        $list_produtos  = $produtos->selectProdutos();

        return view('venda.edit',compact('venda','list_produtos'));
      
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
        $venda = Venda::findOrFail($id);

        $venda->update($request->all());

        $venda->produtos()->sync($request->produtos_list);
        $venda->save();

        return redirect()->route('vendas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venda = Venda::find($id);
        $venda->excluido = true;
        $venda->save();

        \Session::flash('flash_excluido',' Cadastro excluido com sucesso');
        return redirect()->back();
    }

    public function relatorio(){
        $usuarios   =   User::all()->count();//informa se tem usuarios cadastrados
        $categorias =   Categoria::all()->count();
        $produtos   =   Produto::all()->count();
        $vendas     =   Venda::all()->where('excluido', '=', '0')->count();

        return view('venda.relatorio',compact('usuarios','categorias','produtos','vendas'));
    }
}
