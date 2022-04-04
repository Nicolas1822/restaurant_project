<?php

include '../Model/Dishes.php';

class DishesController extends Dishes{

    /**
     *  incluye la vista y muestra los platos insertados en la BD
     */
    public function showDishes()
    {
        $dishes = $this->showDishesDB();
        include '../View/dishes/dishesIndex.php';
    }

    /**
     *  inserta los datos en la BD
     *  @param namedishe
     *  @param quantity
     *  @param unitValue
     *  @param registerDate
     */
    public function insertDisheController($nameDishe, $quantity, $unitValue, $registerDate)
    {
        $this->nameDishe = $nameDishe;
        $this->quantityDishe = $quantity;
        $this->price = $unitValue;
        $this->date = $registerDate;
        $this->insertDishe();
        $this->redirectDishes();
    }

    /**
     *  incluye el formulario con los datos que se van a actualizar
     *  @param id
     */
    public function showUpdateForm($id)
    {
        $this->id = $id;
        $dishes = $this->showUpdateDishesDB();
        include '../View/dishes/dishesUpdate.php';
    }

    /**
     *  actualiza los datos en la BD
     *  @param id
     *  @param nameDishe
     *  @param quantity
     *  @param unitValue
     *  @param registerDate
     */
    public function updateDishesController($id, $nameDishe, $quantity, $unitValue, $registerDate)
    {
        $this->id = $id;
        $this->nameDishe = $nameDishe;
        $this->quantityDishe = $quantity;
        $this->price = $unitValue;
        $this->date = $registerDate;
        $this->updateDishes();
        $this->redirectDishes();
    }

    /**
     *  elimina un plato seleccionado por id
     *  @param id
     */
    public function deleteDisheController($id)
    {
        $this->id = $id;
        $this->deleteDishe();
        $this->redirectDishes();
    }

    /**
     *  Busca un plato
     *  @param nameDishe
     */
    public function searchDisheController($nameDishe)
    {
        $this->nameDishe = $nameDishe;
        $dishes = $this->searchDishe();
        include '../View/dishes/dishesSearch.php';
    }

    /**
     *  redirecciona al index
     */
    public function redirectDishes()
    {
        header('location:DishesController.php?action=showDishes');
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'showDishes')
{
    $instanceDishes = new DishesController();
    $instanceDishes->showDishes();
}

if (isset($_POST['action']) && $_POST['action'] == 'insertDishe')
{
    $instanceDishes = new DishesController();
    $instanceDishes->insertDisheController($_POST['nameDishe'] , $_POST['quantity'] , $_POST['unitValue'] , $_POST['registerDate']);
}

if (isset($_GET['action']) && $_GET['action'] == 'disheUpdate')
{
    $instanceDishes = new DishesController();
    $instanceDishes->showUpdateForm($_GET['id']);
}

if (isset($_POST['action']) && $_POST['action']=='update')
{
    $instanceDishes = new DishesController();
    $instanceDishes->updateDishesController($_POST['id'], $_POST['nameDishe'] , $_POST['quantity'] , $_POST['unitValue'] , $_POST['registerDate']);
}

if (isset($_GET['action']) && $_GET['action'] == 'deleteDishe')
{
    $instanceDishes = new DishesController();
    $instanceDishes->deleteDisheController($_GET['id']);
}

if (isset($_POST['action']) && $_POST['action'] == 'searchDishes')
{
    $instanceDishes = new DishesController();
    $instanceDishes->searchDisheController($_POST['nameDishe']);
}
?>