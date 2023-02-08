<?php

class Evento{
    public $id_evento;
    public $nome_evento;
    public $imagem_evento;
    public $local_evento;
    public $hora;
    public $data_evento;
    public $descricao_evento;

    public function __construct($id_evento = false)
    {
        if ($id_evento) {
            $this->id_evento = $id_evento;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT nome_evento, imagem_evento, local_evento, hora, data_evento, descricao_evento FROM eventos where id_evento = :id_evento";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_evento", $this->id_evento);
        $stmt->execute();
        $lista = $stmt->fetch();
        $this->nome_evento = $lista['nome_evento'];
        $this->imagem_evento = $lista['imagem_evento'];
        $this->local_evento = $lista['local_evento'];
        $this->hora = $lista['hora'];
        $this->data_evento = $lista['data_evento'];
        $this->descricao_evento = $lista['descricao_evento'];
    }

    public function criar()
    {
        $query = "INSERT INTO eventos (nome_evento, imagem_evento, local_evento, hora, data_evento, descricao_evento) 
        VALUES (:nome_evento, :imagem_evento, :local_evento, :hora, :data_evento, :descricao_evento)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome_evento', $this->nome_evento);
        $stmt->bindValue(':imagem_evento', $this->imagem_evento);
        $stmt->bindValue(':local_evento', $this->local_evento);
        $stmt->bindValue(':hora', $this->hora);
        $stmt->bindValue(':data_evento', $this->data_evento);
        $stmt->bindValue(':descricao_evento', $this->descricao_evento);
        $stmt->execute();
    }

    public function editar()
    {
        $query = "UPDATE eventos SET nome_evento = :nome_evento, local_evento = :local_evento, hora = :hora, data_evento = :data_evento, descricao_evento = :descricao_evento WHERE id_evento = :id_evento";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome_evento', $this->nome_evento);
        $stmt->bindValue(':local_evento', $this->local_evento);
        $stmt->bindValue(':hora', $this->hora);
        $stmt->bindValue(':data_evento', $this->data_evento);
        $stmt->bindValue(':descricao_evento', $this->descricao_evento);
        $stmt->bindValue(':id_evento', $this->id_evento);
        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT * FROM eventos ORDER BY data_evento ASC";
        $conexao = conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function deletar()
    {
        $query = "DELETE FROM eventos WHERE id_evento = :id_evento";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_evento", $this->id_evento);
        $stmt->execute();
    }
}