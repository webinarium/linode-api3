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
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new ConfigApi($this->key, true);
    }

    public function testCreate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $KernelID = rand(1, PHP_INT_MAX);
        $DiskList = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.create&LinodeID={$LinodeID}&Label={$Label}&KernelID={$KernelID}&DiskList={$DiskList}";
        $query    = $this->api->create($LinodeID, $Label, $KernelID, $DiskList);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $ConfigID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.delete&LinodeID={$LinodeID}&ConfigID={$ConfigID}";
        $query    = $this->api->delete($LinodeID, $ConfigID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.list&LinodeID={$LinodeID}";
        $query    = $this->api->getList($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $ConfigID = rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $KernelID = rand(1, PHP_INT_MAX);
        $DiskList = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.config.update&LinodeID={$LinodeID}&ConfigID={$ConfigID}&Label={$Label}&KernelID={$KernelID}&DiskList={$DiskList}";
        $query    = $this->api->update($LinodeID, $ConfigID, $Label, $KernelID, $DiskList);
        $this->assertEquals($expected, $query);
    }
}
