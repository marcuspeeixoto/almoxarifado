<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;


class FornecimentoController extends Controller
{
    public function create()
    {
        // Busque todos os produtos do banco de dados
        //$produtos = Produto::all();
        $produtos = Produtos::all();
        // Retorne a view com os produtos
        return view('almoxarifado.fornecimento', ['produtos' => $produtos]);
    }

    // Outros métodos do controlador...

    public function store(Request $request)
{
    // Valide os dados recebidos do formulário
    $validatedData = $request->validate([
        'produto_id' => 'required|exists:produtos,id',
        'setor' => 'required',
        'quantidade' => 'required|integer|min:1',
    ]);

    // Obtenha o produto do banco de dados
    $produto = Produtos::findOrFail($validatedData['produto_id']);

    // Imprima para verificar se o produto foi corretamente recuperado
    //dd($produto);

    // Deduza a quantidade fornecida da quantidade disponível
    $novaQuantidade = $produto->quantidade - $validatedData['quantidade'];

    // Imprima para verificar se a nova quantidade está correta
    //dd($novaQuantidade);

    // Verifique se a quantidade disponível é suficiente
    if ($novaQuantidade < 0) {
        return redirect()->back()->with('error', 'Quantidade insuficiente de produto disponível.');
    }

    // Atualize a quantidade disponível do produto no banco de dados
    $produto->update(['quantidade' => $novaQuantidade]);

    // Crie um novo fornecimento com os dados validados
    FornecimentoController::create([
        'produto_id' => $validatedData['produto_id'],
        'setor' => $validatedData['setor'],
        'quantidade' => $validatedData['quantidade'],
    ]);

    // Redirecione o usuário para alguma página de confirmação
    return redirect()->route('fornecimento.create')->with('success', 'Fornecimento adicionado com sucesso!');
}
}
