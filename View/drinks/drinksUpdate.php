<?php

include '../Inc/headerUpdates.php';
foreach ($drinks as $d) {}

?>

<div class="container p-3">
    <h1 class="text-center">Modificar una Bebida</h1>
</div>

<form action="DrinksController.php" method="POST">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex flex-row mb-3 justify-content-center align-self-center">
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Nombre de la bebida</label>
                <input type="hidden" name="id" value="<?php echo $d->idBebidas; ?>">
                <input type="hidden" name="action" value="update">
                <input type="Text" class="form-control" name="nameDrink" value="<?php echo $d->nombre_bebida; ?>" required>
            </div>
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Tipo de botella</label>
                <input type="text" class="form-control" name="typeBottle" value="<?php echo $d->tipo_botella; ?>" required>
            </div>
        </div>
        <div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Cantidad de botellas</label>
                <input type="number" class="form-control" name="quantityBottles" value="<?php echo $d->cantidad; ?>" required>
            </div>
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Tamaño</label>
                <input type="text" class="form-control" name="size" value="<?php echo $d->tamano; ?>"required>
            </div>
        </div>
        <div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Precio unidad</label>
                <input type="number" class="form-control" name="priceUnity" value="<?php echo $d->precio_unidad; ?>"required>
            </div>
            <div class="p-2 bd-highlight">
                <label for="" class="form-label">Fecha de registro</label>
                <input type="date" class="form-control" name="registerDate" value="<?php echo $d->fecha; ?>"required>
            </div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-center">
            <div class="p-2 bd-highlight">
                <button type="submit" class="btn btn-outline-primary btn-sm mx-2">Modificar</button>
                <a href="DrinksController.php?action=showDrinks">
                    <button type="button" class="btn btn-secondary btn-sm">Cancelar</button>
                </a>
            </div>
        </div>
    </div>
</form>

<?php

include '../Inc/footer.php';

?>