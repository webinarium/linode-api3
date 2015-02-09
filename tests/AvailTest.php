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

use Linode\AvailApi;

class AvailTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var AvailApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new AvailApi($this->key, true);
    }

    public function testDatacenters()
    {
        $expected = "api_key={$this->key}&api_action=avail.datacenters";
        $query = $this->api->dataCenters();
        $this->assertEquals($expected, $query);
    }

    public function testDistributions()
    {
        $expected = "api_key={$this->key}&api_action=avail.distributions";
        $query = $this->api->distributions();
        $this->assertEquals($expected, $query);
    }

    public function testKernels()
    {
        $expected = "api_key={$this->key}&api_action=avail.kernels";
        $query = $this->api->kernels();
        $this->assertEquals($expected, $query);
    }

    public function testLinodePlans()
    {
        $expected = "api_key={$this->key}&api_action=avail.linodeplans";
        $query = $this->api->linodePlans();
        $this->assertEquals($expected, $query);
    }

    public function testNodeBalancers()
    {
        $expected = "api_key={$this->key}&api_action=avail.nodebalancers";
        $query = $this->api->nodeBalancers();
        $this->assertEquals($expected, $query);
    }

    public function testStackscripts()
    {
        $expected = "api_key={$this->key}&api_action=avail.stackscripts";
        $query = $this->api->stackScripts();
        $this->assertEquals($expected, $query);
    }
}
