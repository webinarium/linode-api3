<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2017 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

use Linode\VolumeApi;

class VolumeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var VolumeApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new VolumeApi($this->key, [], true);
    }

    public function testCreate()
    {
        $DatacenterID = mt_rand(1, PHP_INT_MAX);
        $Label        = 'test';
        $Size         = mt_rand(1, PHP_INT_MAX);
        $LinodeID     = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=volume.create&DatacenterID={$DatacenterID}&Label={$Label}&Size={$Size}&LinodeID={$LinodeID}";
        $query    = $this->api->create($DatacenterID, $Label, $Size, $LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $VolumeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=volume.delete&VolumeID={$VolumeID}";
        $query    = $this->api->delete($VolumeID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $VolumeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=volume.list&VolumeID={$VolumeID}";
        $query    = $this->api->getList($VolumeID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $VolumeID = mt_rand(1, PHP_INT_MAX);
        $Label    = 'test';
        $Size     = mt_rand(1, PHP_INT_MAX);
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=volume.update&VolumeID={$VolumeID}&Label={$Label}&Size={$Size}&LinodeID={$LinodeID}";
        $query    = $this->api->update($VolumeID, $Label, $Size, $LinodeID);
        self::assertEquals($expected, $query);
    }
}
