<div class="container">
    <h3 class="mb-5 mt-5">Produtos Cadastrados</h3>
    <a href= "{{ route('produtos.create') }}" class="btn-solid theme-primary">Novo Produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Unid. de Medida</th>
                <th>Taman. da Embalagem</th>
                <th>Preço-Custo</th>
                <th>Preço-Venda</th>
                <th>Qtd no Estoque</th>
                <th>Qtd Mínima</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->categoria }}</td>
                    <td>{{ $p->unidade_medida }}</td>
                    <td>{{ $p->tamanho_embalagem }}</td>
                    <td>{{ $p->preco_custo }}</td>
                    <td>{{ $p->preco_venda }}</td>
                    <td>{{ $p->qtd_estoque }}</td>
                    <td>{{ $p->qtd_minimo }}</td>
                    <td><a href="{{ route('produtos.edit', ['id' => $p->id]) }}" class="btn-solid theme-primary">Editar</a></td>
                    <td><button class="btn-solid theme-danger" wire:click="delete({{ $p->id }})">Excluir</button></td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
