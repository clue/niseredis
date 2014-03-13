<?php

namespace Tests\Niseredis;

use Niseredis\Server;

class ServerTest extends \TestCase
{
    public function testConstructor()
    {
        $server = new Server();

        $this->assertCount(16, $server->getDatabases());
        $this->assertInstanceOf('Niseredis\Database\Database', $server->getDatabaseDefault());
        $this->assertSame($server->getDatabaseDefault(), $server->getDatabaseByIndex(0));

        return $server;
    }

    /**
     *
     * @param Server $server
     * @depends testConstructor
     * @expectedException OutOfRangeException
     */
    public function testInvalidIndex(Server $server)
    {
        $server->getDatabaseByIndex(100);
    }
}
