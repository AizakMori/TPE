<?php
class tableModel{
   private $db;
   public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8','root','');
   }
    function getAllData(){
            $query = $this->db->prepare('SELECT * FROM invocacion JOIN categoria ON invocacion.id_puntos = categoria.id_puntos');
            $query->execute();
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
    /* --------------------------------------categorias-------------------------------------*/
        function getCategories(){
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
        }

        function getCategory($id){
        $query = $this->db->prepare('SELECT * FROM  invocacion WHERE id_puntos = ?');
        $query->execute([$id]);
        $valores = $query->fetchAll(PDO::FETCH_OBJ);
        return $valores;
        }
        function getCategoryById($id){
                $query = $this->db->prepare('SELECT * FROM  categoria WHERE id_puntos = ?');
                $query->execute([$id]);
                $valores = $query->fetchAll(PDO::FETCH_OBJ);
                return $valores;
        }
        function insertCategory($newcategory){
                $query = $this->db->prepare('INSERT INTO categoria(category, rendimiento) VALUES (?,?)');
                $query->execute([$newcategory->category, $newcategory->rendimiento]);
        }

        function editCategory($id,$category,$rendimiento){
                $query = $this->db->prepare('UPDATE categoria SET category = ?, rendimiento = ? WHERE categoria.id = ?');
                $query->execute([$category, $rendimiento, $id]);
        }
        
        function updateCategory($category,$id){
                $query = $this->db->prepare('UPDATE categoria SET  category = ?, rendimiento = ? WHERE id_puntos= ?');
                $query->execute([$category->category,$category->rendimiento,$id]);
        }
        
        function deleteCategory($id){
           try{
                $query = $this->db->prepare('DELETE FROM categoria WHERE id_puntos= ?');
                $query->execute([$id]);
                $resp = "Eliminado con exito!";
                return $resp;
           }catch(Exception $exc){
                $resp = "No se puede eliminar una categoria que contenga algun producto, primero elimine o modifique los productos ;)";
                return $resp;
           }
        }










     function getDetailById($id){
            $query = $this->db->prepare('SELECT * FROM invocacion JOIN categoria ON invocacion.id_puntos = categoria.id_puntos WHERE invocacion.id = ?');
            $query->execute([$id]);
            $detail = $query->fetchAll(PDO::FETCH_OBJ);
            return $detail;
    }


     function insertInvocation($invocacion){
            $query = $this->db->prepare('INSERT INTO invocacion(nombre,elemento,velocidad,habilidad,id_puntos) VALUES (?,?,?,?,?)');
            $query->execute([$invocacion->nombre,$invocacion->elemento,$invocacion->velocidad,$invocacion->habilidad,$invocacion->id_puntos]);
    }
     function deleteInvocation($id){
            $query = $this->db->prepare('DELETE FROM invocacion WHERE id= ?');
            $query->execute([$id]);
    }

     function editTable($invocacion){
            $query = $this->db->prepare('UPDATE invocacion SET  nombre = ?, elemento=?,velocidad= ?, habilidad =? WHERE id_puntos= ?;');
            $query->execute([$invocacion->nombre,$invocacion->elemento,$invocacion->velocidad,$invocacion->habilidad,$invocacion->id_puntos]);
    }
    
     function getRendimiento($rendimiento){
            $query = $this->db->prepare('SELECT * FROM categoria JOIN invocacion ON invocacion.id_puntos = categoria.id_puntos WHERE rendimiento LIKE ?');
            $query->execute([$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
     function getFilter($category,$rendimiento){
            $query = $this->db->prepare('SELECT * FROM categoria JOIN invocacion ON invocacion.id_puntos = categoria.id_puntos WHERE category LIKE ? AND rendimiento LIKE ?');
            $query->execute([$category,$rendimiento]);
            $valores = $query->fetchAll(PDO::FETCH_OBJ);
            return $valores;
    }
}