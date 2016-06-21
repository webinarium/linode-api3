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

use Linode\DomainApi;
use Linode\DomainType;

class DomainTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var DomainApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new DomainApi($this->key, true);
    }

    public function testCreate()
    {
        $Domain = 'www.example.com';
        $Type   = DomainType::MASTER;

        $expected = "api_key={$this->key}&api_action=domain.create&Domain={$Domain}&Type={$Type}";
        $query    = $this->api->create($Domain, $Type);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $DomainID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.delete&DomainID={$DomainID}";
        $query    = $this->api->delete($DomainID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $DomainID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.list&DomainID={$DomainID}";
        $query    = $this->api->getList($DomainID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $DomainID = mt_rand(1, PHP_INT_MAX);
        $Domain   = 'www.example.com';

        $expected = "api_key={$this->key}&api_action=domain.update&DomainID={$DomainID}&Domain={$Domain}";
        $query    = $this->api->update($DomainID, $Domain);
        self::assertEquals($expected, $query);
    }
}
