<?php
    /* Página responsável por orquestrar o comando de cadastrar o Despesas:
        1. buscar os dados do POST;
        2. criar o Despesas com base nos dados recebido;
        3. adicionar o Despesas no repositório;
    */
    require_once("RepositorioDeDespesas.php");

    if (isset($_POST["valor"]) && isset($_POST["descricao"]) && isset($_POST["categoria"]) && isset($_POST["data"]))
    {
       $categoria = $_POST["categoria"];
        $valor = $_POST["valor"];
        $descricao = $_POST["descricao"];
        $data = $_POST["data"];

        $p = new Despesas();
        $p->categoria = $categoria;
        $p->valor = $valor;
        $p->descricao = $descricao;
        $p->data = $data;

        $rep = new RepositorioDeDespesas();
        $rep->adicionar($p);
        
        header('Location: ./pagina_Despesas.php');
    }
?>
