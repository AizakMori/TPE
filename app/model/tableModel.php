<?php
class tableModel{
   private $db;
   public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8','root','');
   }
   public function getAllData(){
       $query = $this->db->prepare('SELECT * FROM invocacion JOIN utilidad ON invocacion.id_puntos = utilidad.id_puntos');
       $query->execute();
       $valores = $query->fetchAll(PDO::FETCH_OBJ);
       return $valores;
    }
    public function getDetailById($id){
     $query = $this->db->prepare('SELECT * FROM invocacion JOIN utilidad ON invocacion.id_puntos = utilidad.id_puntos WHERE invocacion.id = ?');
     $query->execute([$id]);
     $detail = $query->fetchAll(PDO::FETCH_OBJ);
     return $detail;
    }

    public function insertTable($id,$nombre,$elemento,$category,$velocidad,$rendimiento,$habilidad){
        $query = $this->db->prepare('INSERT INTO utilidad(id_puntos,normal,dificil) VALUES (?,?,?)');
        $query->execute([$id,$category, $rendimiento]);
        $query = $this->db->prepare('INSERT INTO invocacion(nombre,elemento,velocidad,habilidad,id_puntos) VALUES (?,?,?,?,?)');
        $query->execute([$nombre,$elemento,$velocidad,$habilidad,$id]);
    }
    public function deleteTable($id){
        $query = $this->db->prepare('DELETE invocacion.* from invocacion JOIN utilidad ON invocacion.id_puntos = utilidad.id_puntos WHERE invocacion.id = ?;');
        $query->execute([$id]);
    }
}