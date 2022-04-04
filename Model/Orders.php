<?php

require_once '../Config/Connection.php';

class Orders
{
    protected $db;

    public function __construct()
    {
        $this->db = new Connection;
    }

    protected function showDishes()
    {
        $sql = 'SELECT idPlato, nombre, cantidad_plato, precio FROM plato';
        $show = $this->db->conect->prepare($sql);
        $show->execute();
        $dishes = $show->fetchAll(PDO::FETCH_OBJ);
        return $dishes;
    }

    protected function showDrinks()
    {
        $sql = 'SELECT idBebidas, nombre_bebida, tipo_botella, cantidad, tamano, precio_unidad FROM bebidas';
        $show = $this->db->conect->prepare($sql);
        $show->execute();
        $drink = $show->fetchAll(PDO::FETCH_OBJ);
        return $drink;
    }
}

?>