<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('almoxarifado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produtos();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->fornecedor = $request->fornecedor;
        $produto->categoria = $request->categoria;
        $produto->data_de_validade = $request->data_de_validade;
        $produto->codigo_de_barras = $request->codigo_de_barras;
        $produto->data_de_entrada = $request->data_de_entrada;

        $produto->save();
        return redirect()->route('almoxarifado.create')->with('msg','Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produtos $produto)
{
    $produtos = Produtos::paginate(10); 
    return view('almoxarifado.show', ['produto' => $produto, 'produtos' => $produtos]);
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
