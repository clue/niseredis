<?php

namespace Tests\Niseredis;

use Niseredis\Redis;
use Niseredis\Server;

class RedisTest extends \TestCase
{
    private $server;
    private $redis;

    public function setUp()
    {
        $this->server = new Server();
        $this->redis = new Redis($this->server);
    }

    public function testConstructor()
    {
    }
}
