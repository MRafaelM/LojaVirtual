@extends("crud_template")

<style>
    .card-container .card {
        transition: 0.5s;
    }

    .card-container:hover .card {
        transition: 0.5s;
        transform: translateY(-10px);
    }
</style>

<nav class="navbar bg-dark">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="col-lg-1 text-center">
            <a href="{{ url('/welcome') }}">
                <img src="{{ asset('Logo-png.png') }}" class="w-50" alt="Logo">
            </a>
        </div>
        <div class="col-lg-5 text-light text-center">
            <h6>LojaVirutal Admin - CodeBrew - (Em desenvolvimento)</h6>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown me-3">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Serviços
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/products') }}">Produtos</a>
                    <a class="dropdown-item" href="{{ url('/types') }}">Tipos</a>
                </div>
            </div>
            <div>
                <a class="btn btn-danger" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
            </div>
        </div>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>

<main>
    <div class="container">
        <div class="row text-center mt-5">
            <h1>Painel do Admin</h1>
            <small>Em desenvolvimento pela CodeBrew</small>
        </div>

        <div class="row mt-5 d-flex align-items-center">

            <hr class="my-1">

            <h3 class="text-center">Serviços</h3>

            <div class="col-lg-4 col-md-6 mt-3">
                <a class="text-decoration-none" href="{{ url('/products') }}">
                    <div class="card-container">
                        <div class="card border-dark text-center">
                            <div class="card-body">
                                <h2>Produtos</h2>
                            </div>
                            <div class="card-footer">
                                <h3 class="text-success">Disponível</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
                <a class="text-decoration-none" href="{{ url('/types') }}">
                    <div class="card-container">
                        <div class="card border-dark text-center">
                            <div class="card-body">
                                <h2>Tipos</h2>
                            </div>
                            <div class="card-footer">
                                <h3 class="text-success">Disponível</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
                <a class="text-decoration-none" href="">
                    <div class="card-container" style="opacity: 0.5;">
                        <div class="card border-dark text-center">
                            <div class="card-body">
                                <h2>Estoque</h2>
                            </div>
                            <div class="card-footer">
                                <h3 style="color: #191970;">Em desenvolvimento</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>