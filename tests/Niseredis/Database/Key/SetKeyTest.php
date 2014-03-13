<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\SetKey;

class SetKeyTest extends AbstractKeyTest
{
    protected function createKey()
    {
        return new SetKey();
    }
}
