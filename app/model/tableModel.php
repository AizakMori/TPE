<?php
class tableModel{
   private $db;
   public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8','root','');
   }


   public function getValores(){
    $query = $this->db->prepare('SELECT a.nombre , a.elemento, a.id, b.dificil FROM invocacion a INNER JOIN utilidad b ON a.id = b.id_puntos');
    $query->execute();
    $valores = $query->fetchAll(PDO::FETCH_OBJ);
    return $valores;
   }
   public function getDetailById($id){
    $query = $this->db->prepare('SELECT * FROM invocacion JOIN utilidad ON invocacion.id = utilidad.id_puntos WHERE invocacion.id = ?');
    $query->execute([$id]);
    $detail = $query->fetchAll(PDO::FETCH_OBJ);
    return $detail;
   }
}