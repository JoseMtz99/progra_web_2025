<?php
require_once "sistema.php";
class Investigador extends Sistema {
    function create($data){

        return $affected_rows;
    }
    function read(){
        $this->connect();
        $sth = $this->_DB->prepare("SELECT inv.*, i.institucion 
                                    FROM investigador inv 
                                    JOIN institucion i 
                                    ON inv.id_institucion = i.id_institucion");
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
    function readOne($id){
        $this->connect();
        $sth = $this->_DB->prepare("SELECT * FROM institucion WHERE id_institucion = :id_institucion");
        $sth->bindParam(":id_institucion", $id, PDO::PARAM_INT);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
    function update($data, $id){
        return $affected_rows;
    }
    function delete($data, $id){
        return $affected_rows;
    }
}
?>