<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\HashKey;

class HashKeyTest extends AbstractKeyTest
{
    protected function createKey()
    {
        return new HashKey();
    }
}
