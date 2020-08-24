@extends('property.master')
@section('content')
    <div class="container my-3">
        <h1>Editar imovel</h1>
        <?php $property = $property[0]; ?>
        <form action="<?= url('/imoveis/update', ['id' => $property->id]); ?>" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Título do imóvel</label>
                <input type="text" class="form-control" name="title" id="" value="<?= $property->title; ?>"
                       placeholder="">
            </div>
            <div class="form-group">
                <label for="">Descrição do imóvel</label>
                <textarea class="form-control" name="description" id=""
                          placeholder=""><?= $property->description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Valor de Locação</label>
                <input type="text" class="form-control" name="rental_price" id=""
                       value="<?= $property->rental_price; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Valor de Compra</label>
                <input type="text" class="form-control" name="sale_price" id="" value="<?= $property->sale_price; ?>"
                       placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
