@extends('property.master')
@section('content')
<div class="container my-3">
    <h1>Listagem de Produtos</h1>

    <?php
        if(!empty($properties)){
            echo "<table class='table table-striped table-hover'>";
                echo "<thead class='bg-primary text-white'>
                        <tr>";
                    echo "<td>Título</td>";
                    echo "<td>Valor de locação</td>";
                    echo "<td>Valor de compra</td>";
                    echo "<td>Ações</td>";
                echo "  </tr>
                      </thead>";
            foreach ($properties as $property){
                $linkReadMore = url('imoveis/'. $property->name);
                $linkEditItem = url('imoveis/editar/'. $property->name);
                $linkRemoveItem = url('imoveis/remover/'. $property->name);
                echo "<tr>";
                    echo "<td>{$property->title}</td>";
                    echo "<td>R$ ".number_format($property->rental_price, 2,',','.')."</td>";
                    echo "<td>R$ ".number_format($property->sale_price, 2,',','.')."</td>";
                    echo "<td><a href='{$linkReadMore}'>Ver mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</div>
@endsection
