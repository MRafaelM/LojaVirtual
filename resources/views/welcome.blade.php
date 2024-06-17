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
    <div class="container-fluid">
        <div class="col-lg-1">
            <a href="">
                <img src="{{ asset('Logo-png.png') }}" class="w-50" alt="Logo">
            </a>
        </div>
        <div class="col-lg-5 text-light text-center">
            <h6>LojaVirutal - CodeBrew - (Em desenvolvimento)</h6>
        </div>
        <div class="col-lg-2">
            <a href="{{ url('/register') }}" class="btn btn-dark border-light text-light">Registre-se</a>
            <a href="{{ url('/login') }}" class="btn btn-light">Login</a>
            <a class="btn btn-danger" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
        </div>
        
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
<main>
    <div class="container">
        <div class="row text-center mt-5">
            <h1>Bem-Vindo a LojaVirtual</h1>
            <small>Em desenvolvimento pela CodeBrew</small>
        </div>

        <div class="row mt-5 d-flex align-items-center">

            <hr class="my-1">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-3">

                <div class="card-container text-center mt-5">
                    <div class="card">
                        <div class="card-body">
                            Imagem do Produto
                        </div>
                        <div class="card-footer">

                            <p>{{ $product['name'] }}<br>
                                R${{ $product['price'] }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</main>
