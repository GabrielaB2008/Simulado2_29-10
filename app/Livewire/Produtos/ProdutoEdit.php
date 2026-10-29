<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produto_id;
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

    public function mount($id){
        $produtos = Produto::find($id);

        if($produtos == null){
            session()->flash('error', 'Não encontrado');
            return redirect()->route('produto.index');
        }

            $this->produto_id = $produtos->id;
            $this->nome = $produtos->nome;
            $this->descricao = $produtos->descricao;
            $this->marca = $produtos->marca;
            $this->categoria = $produtos->categoria;
            $this->unidade_medida = $produtos->unidade_medida;
            $this->tamanho_embalagem = $produtos->tamanho_embalagem;
            $this->preco_custo = $produtos->preco_custo;
            $this->preco_venda = $produtos->preco_venda;
            $this->qtd_estoque = $produtos->qtd_estoque;
            $this->qtd_minimo = $produtos->qtd_minimo;

    }


    public function update(){
         $produtos = Produto::find($this->produto_id);
        if($produtos == null){
            session()->flash('error', 'Não encontrado');
            return redirect()->route('produto.index');
        }

            $produtos->id = $this->produto_id;
            $produtos->nome = $this->nome;
            $produtos->descricao = $this->descricao;
            $produtos->marca = $this->marca;
            $produtos->categoria = $this->categoria;
            $produtos->unidade_medida = $this->unidade_medida;
            $produtos->tamanho_embalagem = $this->tamanho_embalagem;
            $produtos->preco_custo = $this->preco_custo;
            $produtos->preco_venda = $this->preco_venda;
            $produtos->qtd_estoque = $this->qtd_estoque;
            $produtos->qtd_minimo = $this->qtd_minimo;

        $produtos->save();

        session()->flash('success', 'Produto atualizado com sucesso');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produtos.produto-edit');
    }
}
