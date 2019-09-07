<?php 
require_once("Despesas.php");
require_once("mysqli_provider.class.php");
// Classe responsável pela persistência e captura dos dados das despesas
class RepositorioDeDespesas{
    private $despesas;

    public function RepositorioDeDespesas(){
        
    }

    public function adicionar(Despesas $despesa)
    {
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('INSERT INTO despesas (valor, descricao, categoria, data) VALUES (?,?,?,?);');
        $stmt->bind_param($despesas->valor,$despesas->descricao, $despesas->categoria, $despesas->data);
    
        $stmt->execute();
    }

    public function atualizar(Despesas $despesa)
    {
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('UPDATE despesas SET (valor=?, descricao=?, categoria=?, data=?) WHERE id_despesa=?;');
        $stmt->bind_param('ssi', $despesa->valor,$despesa->descricao, $despesas->$categoria, $despesas->$data, $despesa->id);
    
        return $stmt->execute();    
    }

    public function remover( Despesas $despesa)
    {
        $provider = new MySqliProvider();

        $mysqli = $provider->provide();
    
        $stmt = $mysqli->prepare('DELETE FROM despesas WHERE id_despesa=?;');
        
        $stmt->execute();
        
        $stmt->bind_param('i', $despesa->id);
    
        return $stmt->execute();       
    }

    public function buscarTodos():Array
    {
        $provider = new MySqliProvider();
    
        $mysqli= $provider->provide();
        
        $stmt = $mysqli->prepare('SELECT id, valor, descricao, categoria, data FROM despesas;');

        $stmt->execute();

        /* bind result variables */
        $r = $stmt->bind_result($id, $valor, $descricao, $categoria, $data);

        $result= array();

        while ($stmt->fetch())
        {
            $p = new Despesas();
            $p->id = $id;
            $p->valor= $valor;
            $p->descricao = $descricao;
            $p->categoria = $categoria;
            $p->data = $data;
            
            $result[] = $p;
        }

        return $result;
    }
    public function buscarPorValor($valor)
    {
        $provider = new MySqliProvider();

        $mysqli= $provider->provide();
    
        $stmt = $mysqli->prepare('SELECT id_despesa, valor, descricao FROM despesas WHERE valor=?;');
        $stmt->bind_param('s', $valor);
        
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($id, $valor, $descricao);
        
        if ($stmt->fetch())
        {
            $p = new Despesas();
            $p->id = $id;
            $p->valor = $valor;
            $p->descricao = $descricao;
            $p->categoria = $categoria;
            $p->data = $data;
            
            return $p;
        }
            
        return null;
    }
}
?>