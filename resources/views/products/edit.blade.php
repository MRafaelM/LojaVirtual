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
            <h2>Editar Produto</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('products/update') }}" method="POST">
                @csrf
                <!-- campo oculto passando o ID como parâmetro no request -->
                <input type="hidden" name="id" value="{{  $product['id'] }}">
                <label>Nome</label><br>
                <input name="name" class="form-control" type="text" value="{{ $product['name'] }}" /><br>
                <label>Descrição</label><br>
                <input name="description" class="form-control" type="textarea" value="{{
$product['description'] }}" /><br>
                <label>Quantidade</label><br>
                <input name="quantity" class="form-control" type="number" value="{{ $product['quantity']
}}" /><br>
                <label>Preço</label><br>
                <input name="price" class="form-control" type="number" value="{{ $product['price'] }}" /><br>
                <label>Tipo</label><br>
                <select name="type_id" class="form-select">
                    @foreach($types as $type)
                    <option {{ $product->type_id == $type->id ? "selected" : "" }} value="{{ $type->id }}">{{ $type->name}}</option>
                    @endforeach
                </select><br>

                <a href="{{ url('/products')}}" class="btn btn-light border-dark" style="float: left;">Voltar</a>
                <div class="text-center">
                    <input type="reset" value="Limpar" class="btn btn-light border-dark">
                    <input type="submit" value="Salvar" class="btn btn-dark" />
                </div>
            </form>
        </div>
    </div>
</main>