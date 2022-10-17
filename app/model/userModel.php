<?php
class userModel{
    private $db;
    public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8','root','');
    }
    function getUser($email){
            $query = $this -> db -> prepare('SELECT * FROM db_users WHERE email = ?');
            $query -> execute([$email]);
            $user = $query -> fetch(PDO::FETCH_OBJ);
            return $user;
    }

    function add($name,$email, $password){
            $query = $this -> db -> prepare("INSERT INTO db_users ( nombre, email, password) VALUES(?, ?, ?)");
            $query -> execute([$name, $email, $password]);
    }
}