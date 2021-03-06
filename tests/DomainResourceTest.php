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

use Linode\DnsRecord;
use Linode\Domain;

class DomainResourceTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Domain\ResourceApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new Domain\ResourceApi($this->key, [], true);
    }

    public function testCreate()
    {
        $DomainID = mt_rand(1, PHP_INT_MAX);
        $Type     = DnsRecord::A;

        $expected = "api_key={$this->key}&api_action=domain.resource.create&DomainID={$DomainID}&Type={$Type}";
        $query    = $this->api->create($DomainID, $Type);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $DomainID   = mt_rand(1, PHP_INT_MAX);
        $ResourceID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.delete&DomainID={$DomainID}&ResourceID={$ResourceID}";
        $query    = $this->api->delete($DomainID, $ResourceID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $DomainID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.list&DomainID={$DomainID}";
        $query    = $this->api->getList($DomainID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $DomainID   = mt_rand(1, PHP_INT_MAX);
        $ResourceID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.update&DomainID={$DomainID}&ResourceID={$ResourceID}";
        $query    = $this->api->update($DomainID, $ResourceID);
        self::assertEquals($expected, $query);
    }
}
