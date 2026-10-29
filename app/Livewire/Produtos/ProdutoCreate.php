<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade_medida;
    public $tamanho_embalagem;
    public $preco_custo;
    public $preco_venda;
    public $qtd_estoque;
    public $qtd_minimo;

    public function store(){
        $produtos = Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'unidade_medida' => $this->unidade_medida,
            'tamanho_embalagem' => $this->tamanho_embalagem,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'qtd_estoque' => $this->qtd_estoque,
            'qtd_minimo' => $this->qtd_minimo,
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso');
        return redirect()->route('produtos.index');
    }


    public function render()
    {
        return view('livewire.produtos.produto-create');
    }
}
