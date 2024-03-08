<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'preco',
        'marca',
        'fornecedor',
        'categoria',
        'data_de_validade',
        'codigo_de_barras',
        'localizacao',
        'data_de_entrada',
        'data_de_atualizacao',
        'observacoes',
    ];



}
