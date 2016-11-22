<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return json_decode(json_encode($statement->fetchAll(PDO::FETCH_CLASS)),true);
    }

    public function selectUser($table,$user)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} where `User_Login` = ?");
        $statement->execute(array($user));

        return json_decode(json_encode($statement->fetchAll(PDO::FETCH_CLASS)),true);
    }

    public function insert($table, $param){

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($param)),
            ':' . implode(', :', array_keys($param))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($param);
        } catch (Exception $e) {
            //
        }
    }
}