<?php

class Database
{
    private PDO $connection;

    public function __construct(string $host, int $port, string $dbname, string $username, string $password = '')
    {
        $this->connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    }

    public function query(string $query): false|PDOStatement
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
