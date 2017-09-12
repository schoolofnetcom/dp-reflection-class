<?php

namespace ErikFig\Model;

use ErikFig\Database\Connection;

abstract class AbstractModel
{
    protected $connection;
    protected $data;

    public function __construct(Connection $connection, array $data = ['name'=>'Erik'])
    {
        $this->connection = $connection;
        $this->data = $data;
    }
}
