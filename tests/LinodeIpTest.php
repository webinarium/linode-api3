<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

require_once(__DIR__ . '/../vendor/autoload.php');

use Linode\Linode\IpApi;

class LinodeIpTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var IpApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new IpApi($this->key, true);
    }

    public function testAddPrivate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.addprivate&LinodeID={$LinodeID}";
        $query = $this->api->addPrivate($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testAddPublic()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.addpublic&LinodeID={$LinodeID}";
        $query = $this->api->addPublic($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $expected = "api_key={$this->key}&api_action=linode.ip.list";
        $query = $this->api->getList();
        $this->assertEquals($expected, $query);
    }

    public function testSetRDNS()
    {
        $IPAddressID = rand(1, PHP_INT_MAX);
        $Hostname    = 'example.com';

        $expected = "api_key={$this->key}&api_action=linode.ip.setrdns&IPAddressID={$IPAddressID}&Hostname={$Hostname}";
        $query = $this->api->setReverseDNS($IPAddressID, $Hostname);
        $this->assertEquals($expected, $query);
    }

    public function testSwap()
    {
        $IPAddressID     = rand(1, PHP_INT_MAX);
        $withIPAddressID = rand(1, PHP_INT_MAX);
        $toLinodeID      = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.swap&IPAddressID={$IPAddressID}&withIPAddressID={$withIPAddressID}&toLinodeID={$toLinodeID}";
        $query = $this->api->swap($IPAddressID, $withIPAddressID, $toLinodeID);
        $this->assertEquals($expected, $query);
    }
}
