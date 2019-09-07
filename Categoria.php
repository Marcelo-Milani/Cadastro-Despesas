<?php 

class Categoria{
    public $id;
    public $categoria;

    public function __construct ($id, $categoria) {
        $this->id = $id;
        $this->categoria = $categoria;
    }
}
?>