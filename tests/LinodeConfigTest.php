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

use Linode\Linode\ConfigApi;

class LinodeConfigTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var ConfigApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new ConfigApi($this->key, true);
    }

    public function testCreate()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $KernelID = mt_rand(1, PHP_INT_MAX);
        $DiskList = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.create&LinodeID={$LinodeID}&Label={$Label}&KernelID={$KernelID}&DiskList={$DiskList}";
        $query    = $this->api->create($LinodeID, $Label, $KernelID, $DiskList);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);
        $ConfigID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.delete&LinodeID={$LinodeID}&ConfigID={$ConfigID}";
        $query    = $this->api->delete($LinodeID, $ConfigID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.list&LinodeID={$LinodeID}";
        $query    = $this->api->getList($LinodeID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);
        $ConfigID = mt_rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $KernelID = mt_rand(1, PHP_INT_MAX);
        $DiskList = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.update&LinodeID={$LinodeID}&ConfigID={$ConfigID}&Label={$Label}&KernelID={$KernelID}&DiskList={$DiskList}";
        $query    = $this->api->update($LinodeID, $ConfigID, $Label, $KernelID, $DiskList);
        self::assertEquals($expected, $query);
    }
}
