
<?php

include '../Inc/headerUpdates.php';
foreach ($dishes as $d) {}

?>

<div class="container p-3">
    <h1 class="text-center">Modificar un plato</h1>
</div>

<form action="DishesController.php" method="POST">
    <div class="container">
        <div class="row position-absolute top-50 start-50 translate-middle border border-primary">
            <div class="col-md-12 p-4">
                <label for="" class="form-label">Nombre del plato</label>
                <input type="hidden" name="id" value="<?php echo $d->idPlato; ?>">
                <input type="hidden" name="action" value="update">
                <input type="Text" class="form-control" name="nameDishe" value="<?php echo $d->nombre; ?>" required>

                <label for="" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="quantity" value="<?php echo $d->cantidad_plato; ?>" required>

                <label for="" class="form-label">Valor unidad</label>
                <input type="number" class="form-control" name="unitValue" value="<?php echo $d->precio; ?>" required>

                <label for="" class="form-label">Fecha Registro</label>
                <input type="date" class="form-control" name="registerDate" value="<?php echo $d->fecha; ?>"required>

                <div class="d-flex justify-content-evenly pt-4">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Modificar</button>
                    <a href="DishesController.php?action=showDishes">
                        <button type="button" class="btn btn-secondary btn-sm">Cancelar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>


<?php

include '../Inc/footer.php';

?>