<?php

require_once '../Config/Connection.php';

class Users
{
    /**
     *  Correo electronico del usuario
     */
    protected $email;
    /**
     *  Contraseña del usuario
     */
    protected $passwordUser;
    /**
     *  Atributo que permite la instancia con la BD
     */
    protected $db;
    /**
     *  Id del usuario
     */
    protected $id;
    /**
     *  Nombre del usuario
     */
    protected $userName;
    /**
     *  Nombre completo del usuario
     */
    protected $fullName;

    protected $user;

    /**
     *  Metodo constructor que realiza la instancia con la conexion de BD
     */
    public function __construct()
    {
        $this->db = new Connection();
    }

    /**
     *  Inserta el usuario en la base de datos
     */
    protected function saveIntoUser()
    {
        $sql = "INSERT INTO usuario (nombre_completo, correo_electronico, nombre_usuario, contrasenia) VALUES (?,?,?,?)";
        $insertUser = $this->db->conect->prepare($sql);
        $insertUser->bindParam(1, $this->fullName);
        $insertUser->bindParam(2, $this->email);
        $insertUser->bindParam(3, $this->userName);
        $insertUser->bindParam(4, $this->passwordUser);
        $insertUser->execute();
    }

    /**
     *  Busca el usuario en BD y valida el la contraseña
     */
    protected function searchUser()
    {
        $sql = "SELECT * FROM usuario WHERE nombre_usuario = '$this->userName'";
        $search = $this->db->conect->prepare($sql);
        $search->execute();
        $object = $search->fetchAll(PDO::FETCH_OBJ);
        foreach ($object as $o) {}
        $this->user = $o;
        if (isset($o))
        {
            if (password_verify($this->passwordUser,$o->contrasenia))
            {
                return 3;
            }
            else
            {
                return 1;
            }
        }
        else
        {
            return 2;
        }
    }
}

?>