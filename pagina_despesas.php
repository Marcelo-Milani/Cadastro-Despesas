<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
   

    require_once("RepositorioDeDespesas.php");

    echo "<h1>Despesas</h1>";

    $rep = new RepositorioDeDespesas();

    $despesas= $rep->buscarTodos();
    if (isset($despesas))
    {
        foreach ($despesas as $despesa) {
            echo "$despesa->Valor - $despesa->descricao<br>";
        }
    }

?>


