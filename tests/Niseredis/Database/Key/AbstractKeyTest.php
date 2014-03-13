<?php

namespace Tests\Niseredis\Database\Key;

use Niseredis\Database\Key\KeyInterface;

abstract class AbstractKeyTest extends \TestCase
{
    /**
     * @return KeyInterface
     */
    abstract protected function createKey();

    public function testExpiry()
    {
        $key = $this->createKey();

        $this->assertFalse($key->isExpired());
        $this->assertNull($key->getExpiration());

        $past = time() - 10;
        $key->setExpiration($past);
        $this->assertEquals($past, $key->getExpiration());

        $this->assertTrue($key->isExpired());
    }

    public function testEmpty()
    {
        $key = $this->createKey();

        $this->assertTrue($key->isEmpty());
    }
}
