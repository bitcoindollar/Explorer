<?php

class DaemonDataOverride extends DaemonData
{
    public function getIP()
    {
        return $this->ip;
    }

}

class DaemonDataTest extends PHPUnit_Framework_TestCase
{
    private $daemonData;

    public function setUp()
    {
        $this->daemonData = new DaemonDataOverride(IP, PORT, USERNAME, PASSWORD);
    }

}
