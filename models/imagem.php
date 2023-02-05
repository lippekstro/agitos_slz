<?php

class Imagem {
    public $id_imagem;
    public $imagem_inicio;
    public $data_upload;

    public function __construct($id_imagem = false)
    {
        if ($id_imagem) {
            $this->id_imagem = $id_imagem;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT imagem_inicio, data_upload FROM imagens WHERE id_imagem = :id_imagem";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_imagem', $this->id_imagem);
        $stmt->execute();

        $lista = $stmt->fetch();

        $this->imagem_inicio = $lista['imagem_inicio'];
        $this->data_upload = $lista['data_upload'];
    }

    public function criar()
    {
        $query = "INSERT INTO imagens (imagem_inicio) VALUES (:imagem_inicio)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':imagem_inicio', $this->imagem_inicio);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM imagens WHERE id_imagem = :id_imagem";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_imagem", $this->id_imagem);
        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT * FROM imagens ORDER BY data_upload DESC";
        $conexao = conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}