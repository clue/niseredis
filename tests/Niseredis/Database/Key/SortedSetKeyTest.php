<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\SortedSetKey;

class SortedSetKeyTest extends AbstractKeyTest
{
    protected function createKey()
    {
        return new SortedSetKey();
    }
}
