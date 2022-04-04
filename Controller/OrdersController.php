<?php

include '../Model/Orders.php';

class OrdersController extends Orders
{
    public function showOrders()
    {
        $dishes = $this->showDishes();
        $drinks = $this->showDrinks();
        include '../View/orders/ordersIndex.php';
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'showOrders')
{
    $instanceOrders = new OrdersController();
    $instanceOrders->showOrders();
}

?>