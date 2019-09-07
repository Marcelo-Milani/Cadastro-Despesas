<?php 

class Categoria{
    public $id;
    public $categoria;

    public function __construct ($id, $categoria) {
        $this->id = $id;
        $this->categoria = $categoria;
    }

    public function setId($id){
        $this->id = $id;
    }    

    public function getId(){
        return $this->id;
    }    

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }    

    public function getDescricao(){
        return $this->descricao;
    } 
}
?>