<?php

include '../Inc/header.php';

?>

<div class="d-flex justify-content-center">
    <h1>Bebidas</h1>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($drinks as $d) { ?>

                        <tr>
                            <td><?php echo $d->nombre_bebida; ?></td>
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

include '../Inc/footer.php';

?>