<?php
    //Classe que representa as despesas

    class Despesas{
        public $id;
        public $categoria;
        public $valor;
        public $descricao;
        public $data;

        public function __construct ($id, $categoria, $valor, $descricao, $data) {
            $this->id = $id;
            $this->categoria = $categoria;
            $this->valor = $valor;
            $this->descricao = $descricao;
            $this->data = $data;
       }

       public function setId($id){
           $this->id = $id;
       }

       public function getId(){
           return $this->id;
       }

       public function setCategoria($categoria){
           $this->categoria = $categoria;
       }

       public function getCategoria(){
           return $this->categoria;
       }

       public function setValor($valor){
           $this->valor = $valor;
       }

       public function getValor(){
           return $this->valor;
       }

       public function setDescricao($descricao){
           $this->descricao = $descricao;
       }

       public function getDescricao(){
           return $this->descricao;
       }
       public function setData($data){
           $this->data = $data;
       }

       public function getData(){
           return $this->data;
       }

    }

?>