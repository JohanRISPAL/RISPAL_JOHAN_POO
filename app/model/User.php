<?php

class User
{
    private $_id;
    private $_login;
    private $_password;

    public function __construct($_id, $_login, $_password){
        $this->_id = $_id;
        $this->_login = $_login;
        $this->_password = $_password;
    }

    public function getID(){
        return $this->_id;
    }

    public function setID($_id){
        $this->_id = $_id;
    }

    public function getLogin(){
        return $this->_login;
    }

    public function setLogin($_login){
        $this->_login = $_login;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function setPassword($_password){
        $this->_password = $_password;
    }

    public function checkUserExist($bdd, $login, $password){
        $query = $bdd->prepare("SELECT * FROM users WHERE login = ? AND password = ?");
        $query->execute(array($login, $password));
        $queryResult = $query->fetch();

        if ($query->rowCount() == 1){
            $_SESSION["user"] = $queryResult["login"];
        }
    }
}
