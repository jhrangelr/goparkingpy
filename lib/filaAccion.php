<?php

class filaAccion {
    public function getObjeto($objeto){
        $return = null;
        if(isset($objeto)){
            if($objeto->num_rows > 0)
                return $objeto->fetch_object();
        }else{
            throw new Exception ('Error de consulta.');
        }
    }
    public function getFetchArray($objeto){
        $return = null;
        if(isset($objeto)){
            if($objeto->num_rows > 0){
                $array = array();
                while($fila = $objeto->fetch_array(MYSQLI_ASSOC)){
                    array_push($array, $fila);
                }
                return $array;
            }
        }else{
            throw new Exception ('Error de consulta.');
        }
    }
}