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
            <h2>Lista de Tipos</h2>
        </div>

        <div class="card-body">

            <div class="row">
                <div class="col">
                    <a class="btn btn-light border-dark float-start" href="{{ url('/dashboard') }}">Voltar</a>
                    <a class="btn btn-primary float-end" href="{{ url('/types/new') }}">Cadastrar</a>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <div>{{ $message }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col mt-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Nome</th>
                        <th widht="280px">Ações</th>
                    </tr>

                    @foreach($types as $type)
                    <tr>
                        <td>{{ $type['name'] }}</td>
                        <td>
                            <a class="btn btn-dark" href="{{ url('/types/update', ['id' => $type['id']]) }}">Editar</a>
                            <a onclick="confirma(this)" href="{{ url('/types/delete', ['id' => $type['id']]) }}" class="btn btn-light border-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</a>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja deletar este tipo?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Realmente deseja deletar esse tipo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border-dark" data-bs-dismiss="modal">Cancelar</button>
                    <a id="btnConfirma" class="btn btn-dark">Confirmar</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function confirma(elemento) {
        document.getElementById('btnConfirma').setAttribute('href', elemento.href);
    }
</script>