<?php

namespace ErikFig\Database;

class Connection
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}
