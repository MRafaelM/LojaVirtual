@extends('crud_template')
@section('content')

<style>
    .w-50-custom{
        width: 50%;
    }

    @media only screen and (max-width: 500px) {
        .w-50-custom{
            width: 100%;
        }
    }
</style>

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
@endsection