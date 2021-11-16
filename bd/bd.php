<?php
class bd {
    public function __construct(){
        $this->host="localhost";
        $this->user="jorge";
        $this->pass="Jorge30.";
        $this->db="goparking2";
    }

    private function conexion(){
        $conectar=new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($conectar->connect_errno){
            echo "error de conexion";
        }else{
           $this->conectar=$conectar;
        }
        
    }

    public function consultar($query = '', $parametros = array()){
        $this->cadena = $query;
        $this->parametros = $parametros;
        $this->conexion();
        $this->getCrearSql();
        $resultado = $this->conectar->query($this->sql);
        if($this->conectar->error){
            throw new Exception ($this->conectar->error);
        }else{
            return $resultado;
        }
        
        //return $resultado;
    }

    public function insertar($query='', $parametros = array()){
        $this->cadena = $query;
        $this->parametros = $parametros;
        $this->conexion();
        $this->getCrearSql();
        $this->conectar->query($this->sql);
        if($this->conectar->error){
            throw new Exception ($this->conectar->error);
        }else{
            $id = $this->conectar->insert_id;
            return $id;
        }
    }
    private function getCrearSql(){
        if(count($this->parametros)){
            $parametros = array();
            foreach($this->parametros as $parametro){
                $parametros[] = $this->conectar->real_escape_string($parametro);
            }
            $this->sql = vsprintf($this->cadena, $parametros);
        }else{
            $this->sql = $this->cadena;
        }
    }
}
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