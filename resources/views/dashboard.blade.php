@extends("crud_template")

<style>

    .card-container .card{
        opacity: 0.9;
    }
    
    .card-container:hover .card {
        transition: 0.5s;
        opacity: 1;
        transform: translateY(-10px);
    }
    
</style>

<nav class="navbar bg-dark">
    <div class="container-fluid">
        <div class="col-lg-1">
            <img src="#" alt="Logo">
        </div>
        <div class="col-lg-5 text-light text-center">
            <h6>LojaVirutal - CodeBrew - (Em desenvolvimento)</h6>
        </div>
        <div class="col-lg-2">
            <a href="{{ url('/register') }}" class="btn btn-dark border-light text-light">Registre-se</a>
            <a href="{{ url('/login') }}" class="btn btn-light">Login</a>
        </div>
    </div>
</nav>
<main>
    <div class="container">
        <div class="row text-center mt-5">
            <h1>Bem-Vindo a LojaVirtual</h1>
            <small>Em desenvolvimento pela CodeBrew</small>

        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="card-container text-center">
                    <div class="card">
                        <div class="card-body">
                            Imagem
                        </div>
                        <div class="card-footer">
                            Descrição do Produto
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-container text-center">
                    <div class="card">
                        <div class="card-body">
                            Imagem
                        </div>
                        <div class="card-footer">
                            Descrição do Produto
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-container text-center">
                    <div class="card">
                        <div class="card-body">
                            Imagem
                        </div>
                        <div class="card-footer">
                            Descrição do Produto
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-container text-center">
                    <div class="card">
                        <div class="card-body">
                            Imagem
                        </div>
                        <div class="card-footer">
                            Descrição do Produto
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>