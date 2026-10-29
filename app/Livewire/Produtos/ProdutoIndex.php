<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function delete($id){
        $produtos = Produto::find($id);
        if(!$produtos){
            return "Produto não encontrado";
        }

        $produtos->delete();

        session()->flash('success', 'Produto excluido com sucesso');
    }

    public function render()
    {
        $produtos = Produto::all();
        return view('livewire.produtos.produto-index', compact('produtos'));
    }
}
