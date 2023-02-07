<?php

class Local {
    public $id_local;
    public $nome;
    public $endereco;
    public $categoria;
    public $tipo;    

    public function __construct($id_local = false)
    {
        if ($id_local) {
            $this->id_local = $id_local;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT nome, endereco, categoria, tipo FROM locais WHERE id_local = :id_local";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_local', $this->id_local);
        $stmt->execute();

        $lista = $stmt->fetch();

        $this->nome = $lista['nome'];
        $this->endereco = $lista['endereco'];
        $this->categoria = $lista['categoria'];
        $this->tipo = $lista['tipo'];
    }

    public function deletar()
    {
        $query = "DELETE FROM locais WHERE id_local=:id_local";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_local", $this->id_local);
        $stmt->execute();
    }

    public function editar()
    {
        $query = "UPDATE locais SET nome = :nome, endereco = :endereco, categoria = :categoria, tipo = :tipo WHERE id_local = :id_local";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":endereco", $this->endereco);
        $stmt->bindValue(":categoria", $this->categoria);
        $stmt->bindValue(":tipo", $this->tipo);
        $stmt->bindValue(":id_local", $this->id_local);
        $stmt->execute();
    }

    public function criar()
    {
        $query = "INSERT INTO locais (nome, endereco, categoria, tipo) VALUES (:nome, :endereco, :categoria, :tipo)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':endereco', $this->endereco);
        $stmt->bindValue(':categoria', $this->categoria);
        $stmt->bindValue(':tipo', $this->tipo);
        $stmt->execute();
    }

    public static function listar()
    {
        $query = "SELECT * FROM locais";
        $conexao = conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}