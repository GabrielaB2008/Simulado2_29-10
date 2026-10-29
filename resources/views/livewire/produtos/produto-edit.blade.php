<div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h3 class="mb-5 mt-5">Atualizar Produto</h3>
    <form wire:submit.prevent="update">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" wire:model='nome'>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" wire:model='descricao'>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" wire:model='marca'>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" wire:model='categoria'>
            </div>
            <div class="mb-3">
                <label for="unidade_medida" class="form-label">Unidade de Medida</label>
                <input type="text" class="form-control" id="unidade_medida" wire:model='unidade_medida'>
            </div>
            <div class="mb-3">
                <label for="tamanho_embalagem" class="form-label">Tamanho da Embalagem</label>
                <input type="number" class="form-control" id="tamanho_embalagem" wire:model='tamanho_embalagem'>
            </div>
            <div class="mb-3">
                <label for="preco_custo" class="form-label">Preço de Custo</label>
                <input type="decimal" class="form-control" id="preco_custo" wire:model='preco_custo'>
            </div>
            <div class="mb-3">
                <label for="preco_venda" class="form-label">Preço de Venda</label>
                <input type="decimal" class="form-control" id="preco_venda" wire:model='preco_venda'>
            </div>
            <div class="mb-3">
                <label for="qtd_estoque" class="form-label">Quantidade no Estoque</label>
                <input type="number" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
            </div>
            <div class="mb-3">
                <label for="qtd_minimo" class="form-label">Quantidade Mínima</label>
                <input type="number" class="form-control" id="qtd_minimo" wire:model='qtd_minimo'>
            </div>
            
            <button type="submit" class="btn-solid theme-primary">Salvar</button>
    </form>
</div>
