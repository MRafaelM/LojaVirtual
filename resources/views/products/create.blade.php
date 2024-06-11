@extends('crud_template')
@section('content')

<style>
    .w-50-custom{
        width: 50%;
    }

    @media only screen and (max-width: 500px){
        .w-50-custom{
            width: 100%;
        }
    }
</style>
<div class="card mt-5 w-50-custom mx-auto">
    <div class="card-header bg-dark text-center text-light">
        <h2>Cadastro de Produtos</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('products/new') }}" method="POST">
            @csrf
            <strong>Nome</strong>
            <input class="form-control" name="name" type="text" /><br>
            <strong>Descrição</strong>
            <input class="form-control" name="description" type="textarea" /><br>
            <strong>Quantidade</strong>
            <input class="form-control" name="quantity" type="number" /><br>
            <strong>Preço</strong>
            <input class="form-control" name="price" type="number" /><br>
            <strong>Tipo</strong>
            <select class="form-control" name="type_id">
                @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select><br>

            <a class="btn btn-light border-dark float-start" href="{{ url('/products') }}">Voltar</a>
            <div class="text-center">
                <button class="btn btn-dark" type="submit">Salvar</button>
            </div>

        </form>
    </div>
</div>
@endsection