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

require_once __DIR__ . '/../vendor/autoload.php';

use Linode\Linode\IpApi;

class LinodeIpTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var IpApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new IpApi($this->key, true);
    }

    public function testAddPrivate()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.addprivate&LinodeID={$LinodeID}";
        $query    = $this->api->addPrivate($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testAddPublic()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.addpublic&LinodeID={$LinodeID}";
        $query    = $this->api->addPublic($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $expected = "api_key={$this->key}&api_action=linode.ip.list";
        $query    = $this->api->getList();
        self::assertEquals($expected, $query);
    }

    public function testSetRDNS()
    {
        $IPAddressID = mt_rand(1, PHP_INT_MAX);
        $Hostname    = 'example.com';

        $expected = "api_key={$this->key}&api_action=linode.ip.setrdns&IPAddressID={$IPAddressID}&Hostname={$Hostname}";
        $query    = $this->api->setReverseDNS($IPAddressID, $Hostname);
        self::assertEquals($expected, $query);
    }

    public function testSwap()
    {
        $IPAddressID     = mt_rand(1, PHP_INT_MAX);
        $withIPAddressID = mt_rand(1, PHP_INT_MAX);
        $toLinodeID      = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.ip.swap&IPAddressID={$IPAddressID}&withIPAddressID={$withIPAddressID}&toLinodeID={$toLinodeID}";
        $query    = $this->api->swap($IPAddressID, $withIPAddressID, $toLinodeID);
        self::assertEquals($expected, $query);
    }
}
