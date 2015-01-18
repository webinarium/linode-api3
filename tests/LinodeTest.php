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

use Linode\Linode;

class LinodeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Linode */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Linode($this->key, true);
    }

    public function testBoot()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.boot&LinodeID={$LinodeID}";
        $query = $this->api->boot($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testClone()
    {
        $LinodeID     = rand(1, PHP_INT_MAX);
        $DatacenterID = rand(1, PHP_INT_MAX);
        $PlanID       = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.clone&LinodeID={$LinodeID}&DatacenterID={$DatacenterID}&PlanID={$PlanID}";
        $query = $this->api->duplicate($LinodeID, $DatacenterID, $PlanID);
        $this->assertEquals($expected, $query);
    }

    public function testCreate()
    {
        $DatacenterID = rand(1, PHP_INT_MAX);
        $PlanID       = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.create&DatacenterID={$DatacenterID}&PlanID={$PlanID}";
        $query = $this->api->create($DatacenterID, $PlanID);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.delete&LinodeID={$LinodeID}";
        $query = $this->api->delete($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $expected = "api_key={$this->key}&api_action=linode.list";
        $query = $this->api->getList();
        $this->assertEquals($expected, $query);
    }

    public function testReboot()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.reboot&LinodeID={$LinodeID}";
        $query = $this->api->reboot($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testMutate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.mutate&LinodeID={$LinodeID}";
        $query = $this->api->mutate($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testResize()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $PlanID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.resize&LinodeID={$LinodeID}&PlanID={$PlanID}";
        $query = $this->api->resize($LinodeID, $PlanID);
        $this->assertEquals($expected, $query);
    }

    public function testShutdown()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.shutdown&LinodeID={$LinodeID}";
        $query = $this->api->shutdown($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.update&LinodeID={$LinodeID}";
        $query = $this->api->update($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testWebConsoleToken()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.webconsoletoken&LinodeID={$LinodeID}";
        $query = $this->api->webConsoleToken($LinodeID);
        $this->assertEquals($expected, $query);
    }
}
