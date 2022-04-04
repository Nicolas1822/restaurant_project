<?php

require_once '../Config/Connection.php';

class Dishes
{
    /**
     *  id del plato
     */
    protected $id;
    /**
     *  nombre del plato
     */
    protected $nameDishe;
    /**
     *  cantidad del plato
     */
    protected $quantityDishe;
    /**
     *  precio del plato
     */
    protected $price;
    /**
     *  fecha en que se registra el plato
    */
    protected $date;
    /**
     *  Atributo que permite la instancia con la BD
     */
    protected $db;
    //protected $plate;

        /**
     *  Metodo constructor que realiza la instancia con la conexion de BD
     */
    public function __construct()
    {
        $this->db = new Connection();
    }

    /**
     *  metodo que inserta un plato en la BD
     */
    protected function insertDishe()
    {
        $sql = "INSERT INTO plato (nombre, cantidad_plato, precio, fecha) VALUES (?,?,?,?)";
        $insert = $this->db->conect->prepare($sql);
        $insert->bindParam(1, $this->nameDishe);
        $insert->bindParam(2, $this->quantityDishe);
        $insert->bindParam(3, $this->price);
        $insert->bindParam(4, $this->date);
        $insert->execute();
    }

    /**
     *  metodo que muestra los platos insertados en la BD
     *  retorna un objeto con la informacion de cada plato
     */
    protected function showDishesDB()
    {
        $sql = "SELECT * FROM plato";
        $show = $this->db->conect->prepare($sql);
        $show->execute();
        $dishes = $show->fetchAll(PDO::FETCH_OBJ);
        return $dishes;
    }

    /**
     *  muestra el plato al que pertenezca el id
     *  retorna un objeto con la informacion de cada plato
     */
    protected function showUpdateDishesDB()
    {
        $sql = "SELECT * FROM plato WHERE idPlato = '$this->id'";
        $update = $this->db->conect->prepare($sql);
        $update->execute();
        $dishes = $update->fetchAll(PDO::FETCH_OBJ);
        return $dishes;
    }

    /**
     *  actualiza un plato de la BD
     */
    protected function updateDishes()
    {
        $sql = "UPDATE plato SET nombre = '$this->nameDishe', cantidad_plato = '$this->quantityDishe',
        precio = '$this->price', fecha = '$this->date' WHERE idPlato = '$this->id'";
        $update = $this->db->conect->prepare($sql);
        $update->execute();
    }

    /**
     *  elimina un plato de la BD
     */
    protected function deleteDishe()
    {
        $sql = "DELETE FROM plato WHERE idPlato = '$this->id'";
        $delete = $this->db->conect->prepare($sql);
        $delete->execute();
    }

    /**
     *  Busca un plato por su nombre
     *  retorna un objeto con la informacion del plato
     */
    protected function searchDishe()
    {
        $sql = "SELECT idPlato, nombre, cantidad_plato, precio, fecha FROM plato WHERE nombre = '$this->nameDishe'";
        $search = $this->db->conect->prepare($sql);
        $search->execute();
        $dishes = $search->fetchAll(PDO::FETCH_OBJ);
        return $dishes;
    }
}

?>