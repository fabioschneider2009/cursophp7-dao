<?php

class Usuario {
    private $idUsuario;
    private $usuario;
    private $senha;
    
    public function getIdUsuario() {
        return $this->idUsuario;
    }
    
    public function setIdUsuario($value) {
        $this->idUsuario = $value;
    }
    
    public function getUsuario() {
        return $this->usuario;
    }
    
    public function setUsuario($value) {
        $this->usuario = $value;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setSenha($value) {
        $this->senha = $value;
    }
    
    public function loadById($id) {
        
        $sql = new Sql();
        
        $results = $sql->select("SELECT * FROM usuarios WHERE idUsuario = :ID", array(
           ":ID"=>$id 
        ));
        
        
        if (count($results) > 0) {
            $row = $results[0];
            
            $this->setIdUsuario($row['idUsuario']);
            $this->setusuario($row['usuario']);
            $this->setSenha($row['senha']);
            //$this->dtCadastro(new DateTime($row['dtcadastro']));
        }
        
    }
    
    
    public static function getList(){
        
        $sql = new Sql();
        
        return $results = $sql->select("SELECT * FROM usuarios ORDER BY usuario ASC");
        
    }
    
    public static function search($usuario){
        $sql = new Sql();
        
        return $results = $sql->select("SELECT * FROM usuarios WHERE usuario LIKE :USUARIO", array(
            ":USUARIO"=>"%".$usuario."%"
        ));
    }
    
    public function login($usuario,$senha){
        
        $sql = new Sql();
        
        $results = $sql->select("SELECT * FROM usuarios WHERE usuario = :USUARIO AND senha = :SENHA", array(
           ":USUARIO"=>$usuario,
           ":SENHA"=>$senha
        ));
        
        
        if (count($results) > 0) {
            $row = $results[0];
            
            $this->setIdUsuario($row['idUsuario']);
            $this->setUsuario($row['usuario']);
            $this->setSenha($row['senha']);
        } else {
            throw new Exception("Login e/ou Senha Inválidos");
        }
        
    }
    
    public function __toString() {
        return json_encode(array(
            "idUsuario"=> $this->getIdUsuario(),
            "usuario"=> $this->getUsuario(),
            "senha"=> $this->getSenha()
           // "dtCadastro"=> $this->getDtCadastro()->format("d/m/Y H:i:s")    
        ));
    }
    
    
}

?>