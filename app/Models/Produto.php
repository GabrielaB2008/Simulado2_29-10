<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'marca',
        'categoria',
        'unidade_medida',
        'tamanho_embalagem',
        'preco_custo',
        'preco_venda',
        'qtd_estoque',
        'qtd_minimo',
    ];

     public function movimentacoes():HasMany{
        return $this->hasMany(Movimentacao::class);
    }
}
