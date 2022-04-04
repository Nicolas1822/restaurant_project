<?php

class Connection{

    public $conect;

    public function __construct()
    {
        try {
            $this->conect = new PDO("mysql:host=localhost;dbname=restaurante",'root','');
        } catch (PDOException $error) {
            echo "there was a problem in the connection";
            echo "error: " . $error->getMessage();
        }
    }

    public function __destruct()
    {
        $this->conect = null;
    }
}

?>