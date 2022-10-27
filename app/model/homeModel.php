<?php
class tableModel{
   private $db;
   public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8','root','');
   }
    function getAllData(){
            $query = $this->db->prepare('SELECT * FROM invocacion JOIN utilidad ON invocacion.id_puntos = utilidad.id_puntos');
            $query->execute();
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
    /* --------------------------------------categorias-------------------------------------*/
    function getCategories(){
        $query = $this->db->prepare('SELECT * FROM utilidad');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($id){
        $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE normal LIKE ?');
        $query->execute([$id]);
        $valores = $query->fetchAll(PDO::FETCH_OBJ);
        return $valores;
}















     function getDetailById($id){
            $query = $this->db->prepare('SELECT * FROM invocacion JOIN utilidad ON invocacion.id_puntos = utilidad.id_puntos WHERE invocacion.id = ?');
            $query->execute([$id]);
            $detail = $query->fetchAll(PDO::FETCH_OBJ);
            return $detail;
    }


     function insertTable($invocacion){
            $query = $this->db->prepare('INSERT INTO invocacion(nombre,elemento,velocidad,habilidad,id_puntos) VALUES (?,?,?,?,?)');
            $query->execute([$invocacion->nombre,$invocacion->elemento,$invocacion->velocidad,$invocacion->habilidad,$invocacion->id_puntos]);
    }
     function deleteTable($id){
            $query = $this->db->prepare('DELETE FROM invocacion WHERE id= ?');
            $query->execute([$id]);
    }

     function editTable($id,$name,$category,$elemento,$velocidad,$rendimiento,$habilidad){
            $query = $this->db->prepare('UPDATE utilidad SET  normal = ?, dificil=? WHERE id_puntos= ?;');
            $query->execute([$category,$rendimiento,$id]);
            $query = $this->db->prepare('UPDATE invocacion SET  nombre = ?, elemento=?,velocidad= ?, habilidad =? WHERE id_puntos= ?;');
            $query->execute([$name,$elemento,$velocidad,$habilidad,$id]);
    }
    
     function getRendimiento($rendimiento){
            $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE dificil LIKE ?');
            $query->execute([$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
     function getFilter($category,$rendimiento){
            $query = $this->db->prepare('SELECT * FROM utilidad JOIN invocacion ON invocacion.id_puntos = utilidad.id_puntos WHERE normal LIKE ? AND dificil LIKE ?');
            $query->execute([$category,$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
}