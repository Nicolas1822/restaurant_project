<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/style_Index.css">
  <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../Public/image/burger_fast_food_icon_181517.png">
  <title>Food soft</title>
</head>


<body>
  <nav class="navbar navbar-expand-lg bg-transparent  bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="UsersController.php?action=showIndex">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="DishesController.php?action=showDishes">Platos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="DrinksController.php?action=showDrinks">Bebidas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pedidos</a>
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
            <button class="btn btn-outline-light" type="submit">Cerrar Sesión</button>
          </a>
        </div> -->
      </div>
    </div>
  </nav>
  <p class="display-5 text-center text-white text">Bienvenido a foodsoft</p>
  <p class="text-center text-white sub_text"><em>hacemos eficiente tu tiempo para que mejores tu trabajo</em></p>


  <?php

  include '../Inc/footer.php'

  ?>