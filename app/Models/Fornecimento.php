<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecimento extends Model
{
    protected $fillable = ['produto_id', 'setor_id', 'quantidade'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class);
    }
}

