<?php
class Sistema{
    var $_DSN = "mysql:host=mariadb;dbname=database";
    var $_USER = "user";
    var $_PASSWORD = "password";
    var $_DB = null;
    function connect(){
        $this->_DB = new PDO($this->_DSN, $this->_USER, $this->_PASSWORD);
    }
    function cargarFotografia($carpeta, $nombre){
        $tipos = array("image/jpg", "image/jpeg", "image/png", "image/gif");
        $maximo= 1000 * 1024;
        if(isset($_FILES[$nombre])){
            $imagen=$_FILES[$nombre];
            if($imagen["error"] == 0){
                if(in_array($imagen["type"], $tipos)){
                    if($imagen["size"] <= $maximo){
                        $n= rand(1, 999999);
                        $nombreArchivo= md5($imagen["name"].$imagen["size"].$n);
                        $extension= explode(".", $imagen["name"]);
                        $extension= $extension[count($extension)-1];
                        $nombreArchivo .= ".".$extension;
                        $rutaFinal= '../images/'.$carpeta.'/'.$nombreArchivo;
                        if(!file_exists($rutaFinal)){
                            if(move_uploaded_file($imagen["tmp_name"], $rutaFinal)){
                                return $nombreArchivo;
                            }
                        }
                        
                    }
                }
            }
        }
        return null;
    }
}
?>