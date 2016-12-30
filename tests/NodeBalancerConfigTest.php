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

use Linode\BalancingAlgorithm;
use Linode\NodeBalancer\ConfigApi;
use Linode\SessionPersistence;

class NodeBalancerConfigTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var ConfigApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new ConfigApi($this->key, [], true);
    }

    public function testCreate()
    {
        $NodeBalancerID = mt_rand(1, PHP_INT_MAX);
        $Port           = 80;
        $Protocol       = 'HTTP';
        $Algorithm      = BalancingAlgorithm::ROUNDROBIN;
        $Stickiness     = SessionPersistence::HTTP_COOKIE;

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.create&NodeBalancerID={$NodeBalancerID}&Port={$Port}&Protocol={$Protocol}&Algorithm={$Algorithm}&Stickiness={$Stickiness}";
        $query    = $this->api->create($NodeBalancerID, $Port, $Protocol, $Algorithm, $Stickiness);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $NodeBalancerID = mt_rand(1, PHP_INT_MAX);
        $ConfigID       = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.delete&NodeBalancerID={$NodeBalancerID}&ConfigID={$ConfigID}";
        $query    = $this->api->delete($NodeBalancerID, $ConfigID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $NodeBalancerID = mt_rand(1, PHP_INT_MAX);
        $ConfigID       = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.list&NodeBalancerID={$NodeBalancerID}&ConfigID={$ConfigID}";
        $query    = $this->api->getList($NodeBalancerID, $ConfigID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $ConfigID   = mt_rand(1, PHP_INT_MAX);
        $Port       = 80;
        $Protocol   = 'HTTP';
        $Algorithm  = BalancingAlgorithm::ROUNDROBIN;
        $Stickiness = SessionPersistence::HTTP_COOKIE;

        $expected = "api_key={$this->key}&api_action=nodebalancer.config.update&ConfigID={$ConfigID}&Port={$Port}&Protocol={$Protocol}&Algorithm={$Algorithm}&Stickiness={$Stickiness}";
        $query    = $this->api->update($ConfigID, $Port, $Protocol, $Algorithm, $Stickiness);
        self::assertEquals($expected, $query);
    }
}
