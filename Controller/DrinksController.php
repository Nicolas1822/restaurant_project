<?php

include '../Model/Drinks.php';

class DrinksController extends Drinks
{
    public function showDrinks()
    {
        $drinks = $this->showDrinksDB();
        include '../View/drinks/drinksIndex.php';
    }

    public function insertDrinksController($nameDrink, $typeBottle, $quantityBottles, $size, $priceUnity, $dateRegister)
    {
        $this->nameDrink = $nameDrink;
        $this->typeBottle = $typeBottle;
        $this->quantityBottles = $quantityBottles;
        $this->size = $size;
        $this->priceUnity = $priceUnity;
        $this->dateRegister = $dateRegister;
        $this->insertDrink();
        $this->redirectIndexDrinks();
    }

    public function showUpdateForm($idDrinks)
    {
        $this->idDrinks = $idDrinks;
        $drinks = $this->showUpdateDrinksDB();
        include '../View/drinks/drinksUpdate.php';
    }

    public function updateDrinkController($idDrinks, $nameDrink, $typeBottle, $quantityBottles, $size, $priceUnity, $dateRegister)
    {
        $this->idDrinks = $idDrinks;
        $this->nameDrink = $nameDrink;
        $this->typeBottle = $typeBottle;
        $this->quantityBottles = $quantityBottles;
        $this->size = $size;
        $this->priceUnity = $priceUnity;
        $this->dateRegister = $dateRegister;
        $this->updateDrinkDB();
        $this->redirectIndexDrinks();
    }

    public function deleteDrink($idDrinks)
    {
        $this->idDrinks = $idDrinks;
        $this->deleteDrinkDB();
        $this->redirectIndexDrinks();
    }

    public function searchDrinkController($nameDrink)
    {
        $this->nameDrink = $nameDrink;
        $drinks = $this->searchDrinkDB();
        include '../View/drinks/drinksSearch.php';
    }

    public function redirectIndexDrinks()
    {
        header('location:DrinksController.php?action=showDrinks');
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'showDrinks')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->showDrinks();
}

if (isset($_POST['action']) && $_POST['action'] == 'insertDrink')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->insertDrinksController($_POST['nameDrink'], $_POST['typeBottle'], $_POST['quantityBottles'], $_POST['size'], $_POST['priceUnity'], $_POST['dateRegister']);
}

if (isset($_GET['action']) && $_GET['action'] == 'showUpdate')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->showUpdateForm($_GET['id']);
}

if (isset($_POST['action']) && $_POST['action'] == 'update')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->updateDrinkController($_POST['id'], $_POST['nameDrink'], $_POST['typeBottle'], $_POST['quantityBottles'], $_POST['size'], $_POST['priceUnity'], $_POST['registerDate']);
}

if (isset($_GET['action']) && $_GET['action'] == 'deleteDrink')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->deleteDrink($_GET['id']);
}

if (isset($_POST['action']) && $_POST['action'] == 'searchDrink')
{
    $instanceDrinks = new DrinksController();
    $instanceDrinks->searchDrinkController($_POST['nameDrink']);
}
?>

