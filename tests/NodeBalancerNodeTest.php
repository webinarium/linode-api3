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

use Linode\NodeBalancer\NodeApi;

class NodeBalancerNodeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var NodeApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new NodeApi($this->key, [], true);
    }

    public function testCreate()
    {
        $ConfigID  = mt_rand(1, PHP_INT_MAX);
        $Label     = 'label';
        $Address   = '127.0.0.1';

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.create&ConfigID={$ConfigID}&Label={$Label}&Address={$Address}";
        $query    = $this->api->create($ConfigID, $Label, $Address);
        self::assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $NodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.delete&NodeID={$NodeID}";
        $query    = $this->api->delete($NodeID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $ConfigID = mt_rand(1, PHP_INT_MAX);
        $NodeID   = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.list&ConfigID={$ConfigID}&NodeID={$NodeID}";
        $query    = $this->api->getList($ConfigID, $NodeID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $NodeID = mt_rand(1, PHP_INT_MAX);
        $Label  = 'label';

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.update&NodeID={$NodeID}&Label={$Label}";
        $query    = $this->api->update($NodeID, $Label);
        self::assertEquals($expected, $query);
    }
}
