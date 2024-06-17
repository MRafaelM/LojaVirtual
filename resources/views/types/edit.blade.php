@extends('crud_template')

<style>
    .w-50-custom {
        width: 50%;
    }

    @media only screen and (max-width: 500px) {
        .w-50-custom {
            width: 100%;
        }
    }
</style>

<nav class="navbar bg-dark">
    <div class="container-fluid">
        <div class="col-lg-1">
            <a href="{{ url('/dashboard') }}">
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
    <div class="card mt-5 w-50-custom mx-auto">
        <div class="card-header bg-dark text-light text-center">
            <h2>Editar Tipo</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('types/update') }}" method="POST">
                @csrf
                <!-- campo oculto passando o ID como parâmetro no request -->
                <input type="hidden" name="id" value="{{  $type['id'] }}">
                <label>Nome</label><br>
                <input name="name" class="form-control" type="text" value="{{ $type['name'] }}" /><br>

                <a href="{{ url('/types')}}" class="btn btn-light border-dark" style="float: left;">Voltar</a>
                <div class="text-center">
                    <input type="reset" value="Limpar" class="btn btn-light border-dark">
                    <input type="submit" value="Salvar" class="btn btn-dark" />
                </div>
            </form>
        </div>
    </div>
</main>