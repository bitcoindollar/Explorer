<?php

use BlockExplorer\DaemonData;

class DaemonDataOverride extends DaemonData
{
    public function getIP()
    {
        return $this->ip;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

class DaemonDataTest extends PHPUnit_Framework_TestCase
{
    private $daemonData;

    public function setUp()
    {
        $this->daemonData = new DaemonDataOverride(IP, PORT, USERNAME, PASSWORD);
    }

    public function testSetIp()
    {
        $this->assertEquals(IP, $this->daemonData->getIP());
    }

    public function testSetPort()
    {
        $this->assertEquals(PORT, $this->daemonData->getPort());
    }

    public function testSetUsername()
    {
        $this->assertEquals(USERNAME, $this->daemonData->getUsername());
    }

    public function testSetPassword()
    {
        $this->assertEquals(PASSWORD, $this->daemonData->getPassword());
    }
}
