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
        $query = $this->db->prepare('DELETE FROM invocacion WHERE id_puntos IN(SELECT id_puntos FROM utilidad WHERE id_puntos= ?);
        DELETE FROM `utilidad` WHERE `utilidad`.`id_puntos` = ?;');
        $query->execute([$id,$id]);
    }

    public function editTable($id,$name,$category,$elemento,$velocidad,$rendimiento,$habilidad){
        $query = $this->db->prepare('UPDATE utilidad SET  normal = ?, dificil=? WHERE id_puntos= ?;');
        $query->execute([$category,$rendimiento,$id]);
        $query = $this->db->prepare('UPDATE invocacion SET  nombre = ?, elemento=?,velocidad= ?, habilidad =? WHERE id_puntos= ?;');
        $query->execute([$name,$elemento,$velocidad,$habilidad,$id]);
    }
    public function getCategory($categoria){
        $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE normal LIKE ?');
            $query->execute([$categoria]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
    public function getRendimiento($rendimiento){
        $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE dificil LIKE ?');
            $query->execute([$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
    public function getFilter($category,$rendimiento){
        $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE normal LIKE ? AND dificil LIKE ?');
            $query->execute([$category,$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
}