@extends('property.master')
@section('content')
    <div class="container my-3">
        <h1>cadastro imovel</h1>
        <form action="<?= url('/imoveis/store'); ?>" method="post">
            @csrf
            <div class="form-group">
                <label for="">Título do imóvel</label>
                <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Descrição do imóvel</label>
                <textarea class="form-control" name="description" id="" placeholder=""></textarea>
            </div>
            <div class="form-group">
                <label for="">Valor de Locação</label>
                <input type="text" class="form-control" name="rental_price" id="" aria-describedby="helpId"
                       placeholder="">
            </div>
            <div class="form-group">
                <label for="">Valor de Compra</label>
                <input type="text" class="form-control" name="sale_price" id="" aria-describedby="helpId"
                       placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
