<?php
    require_once("Categoria.php");
    require_once("RepositorioDeCategorias.php");

    $repCategoria = new RepositorioDeCategorias();
    $categorias = $repCategoria->buscarTodos();    
?>
<h1>Cadastro de Despesas</h1>
<form action="pagina_cadastrar_despesas.php" method="post">
Categoria: <select name='categoria'>
    <option>Selecione</option>
    <?php
        foreach ($categorias as $categoria) {
            $html = "<option>".$categoria."</option>";
            echo $html;
        }
        // <option>{$categoria}</option>    
    ?>
</select>
<br>
<br>
    <label> Valor:
        <input type="decimal" name="valor">
    </label>
    <br>
    <br>
    <label> Descrição:
        <input type="text" name="descricao">
    </label>
    <br>
    <br>
    <label >Data:
    <input type='date' name='data' placeholder='dd/mm/aaaa'/>
    </label>
    <br>
    <br>
    <input type="submit" value="Cadastrar">

</form>