<?php

namespace Niseredis;

use Niseredis\Database;
use OutOfRangeException;

class Server
{
    private $databases = array();

    public function __construct()
    {
        $this->initializeDatabases();
    }

    protected function initializeDatabases($count = 16)
    {
        for ($i = 0; $i < $count; $i++) {
            $this->databases[] = new Database\Database();
        }
    }

    public function getDatabaseDefault()
    {
        return $this->databases[0];
    }

    public function getDatabases()
    {
        return $this->databases;
    }

    public function getDatabaseByIndex($index)
    {
        if ($index < 0 || $index >= count($this->databases)) {
            throw new OutOfRangeException('invalid DB index');
        }

        return $this->databases[$index];
    }
}
