<?php

include '../Inc/header.php';

?>

<div class="d-flex justify-content-center">
    <h1>Bebidas</h1>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="DrinksController.php" class="d-flex" method="POST">
                <input class="form-control me-2" type="search" name="nameDrink" placeholder="Buscar Bebida" aria-label="Search" required>
                <input type="hidden" name="action" value="searchDrink">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre de la bebida</th>
                        <th scope="col">Tipo de botella</th>
                        <th scope="col">Cantidad de botellas</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Precio unidad</th>
                        <th scope="col">Fecha Registro</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($drinks as $d) { ?>

                        <tr>
                            <td>
                                <?php echo $d->nombre_bebida; ?>
                                <br>
                                <span class="text-danger fst-italic">
                                    <?php
                                        if ($d->cantidad <= 5)
                                        {
                                            echo 'Quedan pocos en existencia';
                                        }
                                    ?>
                                </span>
                            </td>
                            <td><?php echo $d->tipo_botella; ?></td>
                            <td><?php echo $d->cantidad; ?></td>
                            <td><?php echo $d->tamano; ?></td>
                            <td><?php echo $d->precio_unidad; ?></td>
                            <td><?php echo $d->fecha; ?></td>
                            <td>
                                <a href="DrinksController.php?action=showUpdate&id=<?php echo $d->idBebidas ?>">
                                    <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#modalUpdate">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="DrinksController.php?action=deleteDrink&id=<?php echo $d->idBebidas ?>">
                                    <button class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-grid gap-2 d-md-block text-center">
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalInsert">
        Agregar una bebida
    </button>
</div>

<div class="modal fade" id="modalInsert" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="" id="exampleModalLabel">Agregar una bebida</h5>
            </div>
            <div class="modal-body">
                <form action="DrinksController.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Nombre de la bebida</label>
                                <input type="hidden" name="action" value="insertDrink">
                                <input type="text" class="form-control" name="nameDrink" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Tipo de botella</label>
                                <input type="text" class="form-control" name="typeBottle" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Cantidad de botellas</label>
                                <input type="number" class="form-control" name="quantityBottles" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" name="size" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Precio Unidad</label>
                                <input type="number" class="form-control" name="priceUnity" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Tamaño</label>
                                <input type="date" class="form-control" name="dateRegister" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

include '../Inc/footer.php';

?>