<?php

include '../Inc/header.php';

?>

<div class="container">
    <h2>Platos</h2>

    <div class="row">
        <?php foreach ($dishes as $dish) { ?>
            <div class="card m-1 text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dish->nombre; ?></h5>
                    <p class="card-text">Cantidad disponible: <?php echo $dish->cantidad_plato; ?></p>
                    <p class="card-text">Precio unidad: <?php echo $dish->precio; ?></p>
                    <span class="text-danger fst-italic">
                        <?php
                        if ($dish->cantidad_plato <= 5) {
                            echo 'Quedan pocos en existenxia';
                        }
                        ?>
                    </span>
                </div>
            </div>
        <?php } ?>
    </div>

    <br>

    <h2>Bebidas</h2>
    <div class="row">
        <?php foreach ($drinks as $drink) { ?>
            <div class="card m-1 text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $drink->nombre_bebida; ?></h5>
                    <p class="card-text">Tipo de botella: <?php echo $drink->tipo_botella; ?></p>
                    <p class="card-text">cantidad: <?php echo $drink->cantidad; ?></p>
                    <p class="card-text">tamaño: <?php echo $drink->tamano; ?></p>
                    <p class="card-text">precio unidad: <?php echo $drink->precio_unidad; ?></p>
                    <span class="text-danger fst-italic">
                        <?php
                        if ($drink->cantidad <= 5) {
                            echo 'Quedan pocos en existenxia';
                        }
                        ?>
                    </span>
                </div>
            </div>
        <?php } ?>
    </div>

    <br>
    <form action="OrdersController.php" method="post">
        <div class="row">
            <h2>Tomar Pedido Platos</h2>
            <hr>
            <div class="col-3">
                <label for="">productos</label>
                <select name="dish" id="dish" class="">
                    <?php
                    foreach ($dishes as $dish) { ?>
                        <option value="<?php echo $dish->idPlato ?>"> <?php echo $dish->nombre . ' $' . $dish->precio; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-3">
                <label for="">cantidad</label>
                <input type="number" name="quantity" id="quantity" required>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success" onclick="addProductsTableDish()">Agregar Plato</button>
            </div>
        </div>

        <br>

        <table id="descriptionTable" class="table table-hover">
            <thead>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total Produto</th>
                <th>Eliminar</th>
            </thead>
        </table>

        <br>

        <div class="row">
            <h2>Tomar Pedido Bebiba</h2>
            <hr>
            <div class="col-3">
                <label for="">Bebidas</label>
                <select name="drinks" id="drinks">
                    <?php
                        foreach($drinks as $drink){ ?>
                            <option value="<?php echo $drink->idBebidas ?>"> <?php echo $drink->nombre_bebida . ' $' . $drink->precio_unidad ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-3">
                <label for="">cantidad</label>
                <input type="number" name="quantityDrink" id="quantityDrink">
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success" onclick="addProductsTableDrink()">Agregar Bebida</button>
            </div>
        </div>

        <br>

        <table id="descriptionTableDrink"  class="table table-hover">
            <thead>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total Produto</th>
                <th>Eliminar</th>
            </thead>
        </table>
        <div class=" d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Guardar Pedido</button>
        </div>
    </form>
</div>

<script>
    let counter = 0;
    let counterDrink = 0;

function addProductsTableDish()
{
    counter = counter + 1;
    let quantity = $('#quantity').val();
    let dish = $('#dish').val();
    let dishName = $('#dish option:selected').text();
    let dates = dishName.split('$', 2);
    let total = dates[1] * quantity;

    $('#descriptionTable').append("\
    <tr id='rowDish " + counter +"'>\
        <td><input type='hidden' name='dish[]' value='" + dish + "'>"+ dates[0] +"</td>\
        <td><input type='hidden' name='quantity[]' value='" + quantity + "' >" + quantity + "</td>\
        <td>" + dates[1] + "</td>\
        <td><input type='hidden' name='totalDish' value='" + total + "'>" + total + "</td>\
        <td><button type='button' onclick='dishDelete(" + counter + ")'>eliminar</button></td>\
    </tr>")
}

function addProductsTableDrink()
{
    counterDrink = counterDrink + 1;
    let quantityDrink = $('#quantityDrink').val();
    let drink = $('#drinks').val();
    let drinkName = $('#drinks option:selected').text();
    let datesDrink = drinkName.split('$', 2);
    let total = datesDrink[1] * quantityDrink;
    console.log(drinkName);

    $('#descriptionTableDrink').append("\
    <tr id='rowDrink " + counter + "'>\
        <td><input type='hidden' name='drink[]' value='" + drink + "'>" + datesDrink[0] + "</td>\
        <td><input type='hidden' name='quantityDrink[]' value='" + quantityDrink +"'> " + quantityDrink + " </td>\
        <td>" + datesDrink[1] + "</td>\
        <td><input type='hidden' name='totalDrink' value='" + total + "'>" + total +"</td>\
        <td><button type='button' onclick='drinkDelete(" + counterDrink + ")'>Eliminar</button></td>\
    </tr>")
}

function dishDelete(id)
{
    $('#' + id).remove();
}

function drinkDelete(id)
{
    $('#' + id).remove();
}
</script>

<?php

include '../Inc/footer.php';

?>