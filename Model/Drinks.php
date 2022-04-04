<?php

require_once '../Config/Connection.php';

class Drinks
{
    /**
     *  id de la bebida
     */
    protected $idDrinks;
    /**
     *  nombre de la bebida
     */
    protected $nameDrink;
    /**
     *  tipo de botella
     */
    protected $typeBottle;
    /**
     *  cantidad de botellas
     */
    protected $quantityBottles;
    /**
     *  tamaño de la botella
     */
    protected $size;
    /**
     *  Precio por unidad de la bebida
     */
    protected $priceUnity;
    /**
     *  fecha en que se registra la bebida
     */
    protected $dateRegister;
        /**
     *  Atributo que permite la instancia con la BD
     */
    protected $db;

        /**
     *  Metodo constructor que realiza la instancia con la conexion de BD
     */
    public function __construct()
    {
        $this->db = new Connection;
    }

        /**
     *  metodo que inserta una bebida en la BD
     */
    protected function insertDrink()
    {
        $sql = "INSERT INTO bebidas(nombre_bebida, tipo_botella, cantidad, tamano, precio_unidad, fecha) VALUES(?,?,?,?,?,?)";
        $insert = $this->db->conect->prepare($sql);
        $insert->bindParam(1, $this->nameDrink);
        $insert->bindParam(2, $this->typeBottle);
        $insert->bindParam(3, $this->quantityBottles);
        $insert->bindParam(4, $this->size);
        $insert->bindParam(5, $this->priceUnity);
        $insert->bindParam(6, $this->dateRegister);
        $insert->execute();
    }

        /**
     *  metodo que muestra las bebidas insertadas en la BD
     *  retorna un objeto con la informacion de cada bebida
     */
    protected function showDrinksDB()
    {
        $sql = "SELECT * FROM bebidas";
        $show = $this->db->conect->prepare($sql);
        $show->execute();
        $drinks = $show->fetchAll(PDO::FETCH_OBJ);
        return $drinks;
    }

        /**
     *  muestra la bebida a la que pertenece el id
     *  retorna un objeto con la informacion de cada bebida
     */
    protected function showUpdateDrinksDB()
    {
        $sql = "SELECT * FROM bebidas WHERE idBebidas='$this->idDrinks'";
        $update = $this->db->conect->prepare($sql);
        $update->execute();
        $drinks = $update->fetchAll(PDO::FETCH_OBJ);
        return $drinks;
    }

        /**
     *  actualiza una bebida de la BD
     */
    protected function updateDrinkDB()
    {
        $sql = "UPDATE bebidas SET nombre_bebida='$this->nameDrink', tipo_botella='$this->typeBottle', cantidad='$this->quantityBottles',
        tamano='$this->size', precio_unidad='$this->priceUnity', fecha='$this->dateRegister' WHERE idBebidas='$this->idDrinks'";
        $update = $this->db->conect->prepare($sql);
        $update->execute();
    }

        /**
     *  elimina una bebida de la BD
     */
    protected function deleteDrinkDB()
    {
        $sql = "DELETE FROM bebidas WHERE idBebidas='$this->idDrinks'";
        $delete = $this->db->conect->prepare($sql);
        $delete->execute();
    }

        /**
     *  Busca una bebida por su nombre
     *  retorna un objeto con la informacion de la bebida
     */
    protected function searchDrinkDB()
    {
        $sql = "SELECT idBebidas, nombre_bebida, tipo_botella, cantidad, tamano, precio_unidad, fecha FROM bebidas WHERE nombre_bebida='$this->nameDrink'";
        $search = $this->db->conect->prepare($sql);
        $search->execute();
        $drinks = $search->fetchAll(PDO::FETCH_OBJ);
        return $drinks;
    }
}


?>