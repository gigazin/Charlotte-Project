<?php

abstract class database
{
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public function __destruct()
    {
        $this->disconnect();
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

    private function connect()
    {
        $hostname = "localhost";
        $bancodedados = "testeprojeto";
        $usuario = "root";
        $senha = "1234";

        try {
            $this->conexao = new PDO("mysql:host=" . $hostname . ";dbname=" . $bancodedados . "", "$usuario", "$senha");
        } catch (PDOException $i) {
            //se houver excecao, exibe
            die("Erro: <code>" . $i->getMessage() . "</code>");
        }

        return ($this->conexao);
    }

    private function disconnect()
    {
        $this->conexao = null;
    }


    //abre a conexão e insere, de fato, os dados no banco
    public function insertDB($sql, $params)
    {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao = $pdo->prepare($sql);
        $conexao->execute($params);
        $this->__destruct();
        return $pdo->lastInsertId(); //retorna ID do que foi inserido
    }

    public function selectDB($sql, $params, $class = null)
    {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao = $pdo->prepare($sql);
        $conexao->execute($params);
        $this->__destruct();
        return $conexao->fetchAll(PDO::FETCH_CLASS, $class); //retorna um objeto do que foi buscado
    }

    public function updateDB($sql, $params)
    {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao = $pdo->prepare($sql);
        $conexao->execute($params);
        $this->__destruct();
        return $conexao->rowCount(); //retorna o numero de linhas afetadas
    }

    public function deleteDB($sql, $params)
    {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao = $pdo->prepare($sql);
        $conexao->execute($params);
        $this->__destruct();
        return $conexao->rowCount(); //retorna o numero de linhas afetadas
    }
}
