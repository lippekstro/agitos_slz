<?php

class Postagem
{
    public $id_post;
    public $titulo;
    public $conteudo;
    public $imagem_post;
    public $id_usuario;
    public $data_publicacao;

    public function __construct($id_post = false)
    {
        if ($id_post) {
            $this->id_post = $id_post;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT titulo, conteudo, imagem_post, id_usuario, data_publicacao FROM postagens where id_post = :id_post";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_post", $this->id_post);
        $stmt->execute();
        $lista = $stmt->fetch();
        $this->titulo = $lista['titulo'];
        $this->conteudo = $lista['conteudo'];
        $this->imagem_post = $lista['imagem_post'];
        $this->id_usuario = $lista['id_usuario'];
        $this->data_publicacao = $lista['data_publicacao'];
    }

    public function criar()
    {
        $query = "INSERT INTO postagens (titulo, conteudo, imagem_post, id_usuario) VALUES (:titulo, :conteudo, :imagem_post, :id_usuario)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':imagem_post', $this->imagem_post);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();
    }

    public function editar_postagem()
    {
        $query = "UPDATE postagens SET titulo = :titulo, conteudo = :conteudo WHERE id_post = :id_post";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->bindValue(':id_post', $this->id_post);
        $stmt->execute();
    }

    public static function listar()
    {
        $query = "select p.id_post, p.titulo, p.conteudo, p.imagem_post, p.data_publicacao, p.id_post,
        u.nome_usuario as nome_autor from postagens p
        inner join usuarios u on p.id_usuario = u.id_usuario
        order by p.data_publicacao desc";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function deletar()
    {
        $query = "DELETE FROM postagens WHERE id_post=:id_post";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_post", $this->id_post);
        $stmt->execute();
    }
}
