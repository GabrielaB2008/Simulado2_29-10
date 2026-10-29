<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @livewireStyles
</head>

<body>
    @unless (request()->routeIs('login'))
    <nav class="navbar md:navbar-expand bg-1" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pet Shop</a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                
                <div class="drawer-body mb-2 md:mb-0">
                    <ul class="nav navbar-nav me-auto">
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                Produtos
                            </button>
                            <div class="menu">
                                <a class="menu-item" href="{{ route('produtos.create') }}">Novo Produto</a>
                                <a class="menu-item" href="{{ route('produtos.index') }}">Produtos Cadastrados</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                Movimentações
                            </button>
                            <div class="menu">
                                <a class="menu-item" href="{{ route('movimentacao.create') }}">Nova Movimentação</a>
                                <a class="menu-item" href="{{ route('movimentacao.index') }}">Histórico de Movimentações</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-danger" wire:click="sair">
                                <i class="bi bi-box-arrow-right"></i>Sair
                            </button>
                        </li>
                    </ul>
                    
                </div>
            </dialog>
        </div>
    </nav>
 @endunless

    <main class="container py-4">
        {{ $slot }}
    </main>



    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
