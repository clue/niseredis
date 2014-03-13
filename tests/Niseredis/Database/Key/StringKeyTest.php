<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\StringKey;

class StringKeyTest extends AbstractKeyTest
{
    protected function createKey()
    {
        return new StringKey();
    }

    public function testEmpty()
    {
        $neverEmpty = new StringKey();

        $this->assertFalse($neverEmpty->isEmpty());
    }
}
