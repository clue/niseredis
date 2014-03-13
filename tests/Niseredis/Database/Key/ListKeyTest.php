<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\ListKey;

class ListKeyTest extends AbstractKeyTest
{
    protected function createKey()
    {
        return new ListKey();
    }
}
