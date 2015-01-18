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

use Linode\NodeBalancer\Node;

class NodeBalancerNodeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Node */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Node($this->key, true);
    }

    public function testCreate()
    {
        $ConfigID  = rand(1, PHP_INT_MAX);
        $Label   = 'label';
        $Address = '127.0.0.1';

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.create&ConfigID={$ConfigID}&Label={$Label}&Address={$Address}";
        $query = $this->api->create($ConfigID, $Label, $Address);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $NodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.delete&NodeID={$NodeID}";
        $query = $this->api->delete($NodeID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $ConfigID = rand(1, PHP_INT_MAX);
        $NodeID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.list&ConfigID={$ConfigID}&NodeID={$NodeID}";
        $query = $this->api->getList($ConfigID, $NodeID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $NodeID = rand(1, PHP_INT_MAX);
        $Label  = 'label';

        $expected = "api_key={$this->key}&api_action=nodebalancer.node.update&NodeID={$NodeID}&Label={$Label}";
        $query = $this->api->update($NodeID, $Label);
        $this->assertEquals($expected, $query);
    }
}
