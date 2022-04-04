<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../Public/image/burger_fast_food_icon_181517.png">
    <script src="../Public/js/jquery-3.6.0.min.js"></script>
    <title>Food Soft</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-link">
                        <a class="nav-link" aria-current="page" href="UsersController.php?action=showIndex">Inicio</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link" aria-current="page" href="DishesController.php?action=showDishes">Platos</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link " aria-current="page" href="DrinksController.php?action=showDrinks">Bebidas</a>
                    </li>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            pedidos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="OrdersController.php?action=showOrders">Orden de pedidos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Mostrar pedidos</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- <div class="d-flex">
                    <a href="UsersController.php?action=showLogin">
                        <button class="btn btn-outline-dark" type="submit">Cerrar Sesión</button>
                    </a>
                </div> -->
            </div>
        </div>
    </nav>