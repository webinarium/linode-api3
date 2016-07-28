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

use Linode\LinodeApi;

class LinodeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var LinodeApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new LinodeApi($this->key, true);
    }

    public function testBoot()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.boot&LinodeID={$LinodeID}";
        $query    = $this->api->boot($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testClone()
    {
        $LinodeID     = mt_rand(1, PHP_INT_MAX);
        $DatacenterID = mt_rand(1, PHP_INT_MAX);
        $PlanID       = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.clone&LinodeID={$LinodeID}&DatacenterID={$DatacenterID}&PlanID={$PlanID}";
        $query    = $this->api->duplicate($LinodeID, $DatacenterID, $PlanID);
        self::assertEquals($expected, $query);
    }

    public function testCreate()
    {
        $DatacenterID = mt_rand(1, PHP_INT_MAX);
        $PlanID       = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.create&DatacenterID={$DatacenterID}&PlanID={$PlanID}";
        $query    = $this->api->create($DatacenterID, $PlanID);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.delete&LinodeID={$LinodeID}";
        $query    = $this->api->delete($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testKvmify()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.kvmify&LinodeID={$LinodeID}";
        $query    = $this->api->kvmify($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $expected = "api_key={$this->key}&api_action=linode.list";
        $query    = $this->api->getList();
        self::assertEquals($expected, $query);
    }

    public function testReboot()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.reboot&LinodeID={$LinodeID}";
        $query    = $this->api->reboot($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testMutate()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.mutate&LinodeID={$LinodeID}";
        $query    = $this->api->mutate($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testResize()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);
        $PlanID   = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.resize&LinodeID={$LinodeID}&PlanID={$PlanID}";
        $query    = $this->api->resize($LinodeID, $PlanID);
        self::assertEquals($expected, $query);
    }

    public function testShutdown()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.shutdown&LinodeID={$LinodeID}";
        $query    = $this->api->shutdown($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.update&LinodeID={$LinodeID}";
        $query    = $this->api->update($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testWebConsoleToken()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.webconsoletoken&LinodeID={$LinodeID}";
        $query    = $this->api->webConsoleToken($LinodeID);
        self::assertEquals($expected, $query);
    }
}
