<?php

require_once 'ConexaoMysql.php';

class eventosModel{
    public $id;
    public $nome;
    public $img;
    public $valor;
    public $categoria_id;

    public function _construct(){
    //vazio
    }

    //getters
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getImg(){
        return $this->img;
    }
    
    public function getValor(){
        return $this->valor;
    }

    public function getCategoria_id(){
        return $this->categoria_id;
    }

    //setters
    public function setId($id): void{
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImg($img): void {
        $this->img = $img;
    }
    
    public function setValor($valor): void {
        $this->valor = $valor;
    }

    public function setCategoria_id($categoria_id): void{
        $this->categoria_id = $categoria_id;
    }
    
    //métodos especialistas

    public function loadByCat($categoria_id){
        $db =  new ConexaoMySql();
        $db->Conectar();

        $sql = 'SELECT nome,img FROM eventos WHERE categoria_id ='.$categoria_id;

        $result = $db->Consultar($sql);
        $db->Desconectar();

        return $result;
    }

    public function loadAllEventos(){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM eventos';
        $eventosList = $db->Consultar($sql);

        $db->Desconectar();
        return $eventosList;
    }

    public function cadastroEvento($nome, $quant_ing,$categoria_id,$img){
        $db = new ConexaoMySql();
        $db->Conectar();

        $sql = "INSERT INTO eventos (nome,quant_ing,valor,categoria_id,img) values ($nome,$quant_ing,$valor,$categoria_id,$img)";

        $db->Executar($sql);

        header('location:../eventos.php?cod=sucess');

        $db->Desconectar();
    }

    public function loadWhereIn($whereIn){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM eventos WHERE id IN('.$whereIn.')';
        
        $resultList = $db->Consultar($sql);
        
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->img = $values['img'];
                $this->valor = $values['valor'];
                $this->quantIngressos = $values['quantIngressos'];
                $this->categoria_id = $values['categoria_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
}
?>