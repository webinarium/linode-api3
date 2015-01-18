<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the GNU General Public License
//  along with the library. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

require_once(__DIR__ . '/../vendor/autoload.php');

use Linode\NodeBalancer;

class NodeBalancerTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var NodeBalancer */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new NodeBalancer($this->key, true);
    }

    public function testCreate()
    {
        $DatacenterID = rand(1, PHP_INT_MAX);
        $Label        = 'label';

        $expected = "api_key={$this->key}&api_action=nodebalancer.create&DatacenterID={$DatacenterID}&Label={$Label}";
        $query = $this->api->create($DatacenterID, $Label);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.delete&NodeBalancerID={$NodeBalancerID}";
        $query = $this->api->delete($NodeBalancerID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.list&NodeBalancerID={$NodeBalancerID}";
        $query = $this->api->getList($NodeBalancerID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $NodeBalancerID = rand(1, PHP_INT_MAX);
        $Label          = 'label';

        $expected = "api_key={$this->key}&api_action=nodebalancer.update&NodeBalancerID={$NodeBalancerID}&Label={$Label}";
        $query = $this->api->update($NodeBalancerID, $Label);
        $this->assertEquals($expected, $query);
    }
}
