<?php session_start();

use UsersController as GlobalUsersControllers;

/**
 *  Se incluye el modelo Users.php
 */
include '../Model/Users.php';

/**
 *  Clase UsersController
 */
class UsersController extends Users
{

    /**
 *  Muestra el login al usuario
 */
    public function showLogin()
    {
        include '../View/login/login.php';
        $_SESSION['error']='';
    }

    /**
 *  Inserta en BD los datos registrado en el login.php
 * @param fullName nombre completo del usuario
 * @param email correo electronico del usuario
 * @param userName nombre de usuario
 * @param password contraseña del usuario
 */
    public function saveUser($fullName, $email, $userName, $password)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->userName = $userName;
        //encriptacion de la contraseña
        $encryptedPassword = password_hash($password, PASSWORD_ARGON2I);
        $this->passwordUser = $encryptedPassword;
        $this->saveIntoUser();
        $this->redirectLogin();
    }

    /**
     *  realiza la validacion del usuario
     *  recibe los parametro $userName y $password
     *  instancia el metodo searchUser() para realizar la validacion
     *  @param username
     *  @param password
     */
    public function validationUser($userName, $password)
    {
        $this->userName = $userName;
        $this->passwordUser = $password;
        $result = $this->searchUser();
        var_dump($show = $this->user);
        if ($result == 1)
        {
            var_dump($result);
            $_SESSION['error'] = "Usuario o contraseña incorrectas";
        }

        if ($result == 2)
        {
            $_SESSION['error'] = "No se encuentra registrado en el sistema";
        }

        if ($result == 3)
        {
            $_SESSION['nombre_completo'] = $this->user->nombre_completo;
            $this->showIndex();
        }

        // $this->redirectLogin();
    }

    public function showIndex()
    {
        include '../View/login/index.php';
    }

    /**
 *  Redirecciona al login de registro
 */
    public function redirectLogin()
    {
        header('location:UsersController.php?action=showLogin');
    }

}

    /**
 *  Recibe la accion con el parametro que permite mostrar el login
 */
if (isset($_GET['action']) && $_GET['action']=='showLogin')
{
    $userInstance = new GlobalUsersControllers();
    $userInstance->showLogin();
}

    /**
 *  Recibe los datos del formulario login.php y la accion con el parametros
 *  que permite realizar la insercion de los datos
 */
if (isset($_POST['action']) && $_POST['action']=='register')
{
    $userInstance = new GlobalUsersControllers();
    $userInstance->saveUser($_POST['fullName'], $_POST['email'], $_POST['userName'], $_POST['password']);
}

/**
 *  Recibe el nombre de usuario y la contraseña para realizar la validacion correspondiente
 */
if (isset($_POST['action']) && $_POST['action']=='login')
{
    $userInstance = new GlobalUsersControllers();
    $userInstance->validationUser($_POST['userName'], $_POST['password']);
}

if (isset($_GET['action']) && $_GET['action'] == 'showIndex')
{
    $userInstance = new GlobalUsersControllers();
    $userInstance->showIndex();
}

?>