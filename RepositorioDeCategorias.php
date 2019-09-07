<?php

require_once ("Categoria.php");
require_once ("mysqli_provider.class.php");

class RepositoriodeCategoria {
    private $categoria;

    public function RepositorioDeCategoria(){
        
    }

    public function adicionar(Categoria $categoria){
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('INSERT INTO categoria (descricao) VALUES (?);');
        $stmt->bind_param('ss', $categoria->descricao);
    
        $stmt->execute();
    }

    public function atualizar(Categoria $categoria){
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('UPDATE categoria SET (descricao=?) WHERE id=?;');
        $stmt->bind_param('ssi', $categoria->descricao);
    
        return $stmt->execute(); 
    }

    public function remover( Despesas $despesa){
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('DELETE FROM categoria WHERE id=?;');
        
        $stmt->execute();
        
        $stmt->bind_param('i', $categoria->id);
    
        return $stmt->execute();       
    }

    public function buscarTodos():Array{
        $provider = new MySqliProvider();
    
        $mysqli= $provider->provide();
        
        $stmt = $mysqli->prepare('SELECT id, descricao FROM categoria;');

        $stmt->execute();

        /* bind result variables */
        $r = $stmt->bind_result($id, $descricao);

        $result= array();

        while ($stmt->fetch())
        {
            $categoria = new Categoria();
            $categoria->id = $id;
            $categoria->descricao = $descsricao;
            
            $result[] = $categoria;
        }

        return $result;
    }

    public function buscarPorValor($valor){
        $provider = new MySqliProvider();

        $mysqli= $provider->provide();
    
        $stmt = $mysqli->prepare('SELECT id, descricao FROM categoria WHERE valor=?;');
        $stmt->bind_param('s', $valor);
        
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($id, $descricao);
        
        if ($stmt->fetch())
        {
            $categoria = new Categoria();
            $categoria->id = $id;
            $categoria->descricao = $descricao;
            
            return $categoria;
        }
            
        return null;
    }
}