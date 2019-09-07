<?php

require_once ("Categoria.php");
require_once ("RepositorioDeCategoria.php");

try {
  if($_POST){
    $categoria = new Categoria($_POST['categoria']);
    $repCategoria = new RepositorioDeCategoria();
    $repCategoria->adicionar($categoria);
  }else{
    header("Location:pagina_cadastro_categorias.php");
  }
} catch (Exception $e) {
  echo "Ocorreu um erro: " . $e->getMessage();
}

?>