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

use Linode\StackScriptApi;

class StackScriptTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var StackScriptApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new StackScriptApi($this->key, true);
    }

    public function testCreate()
    {
        $script         = 'sources';
        $DistributionID = rand(1, PHP_INT_MAX);
        $Label          = 'test';

        $expected = "api_key={$this->key}&api_action=stackscript.create&script={$script}&DistributionIDList={$DistributionID}&Label={$Label}";
        $query = $this->api->create($script, $DistributionID, $Label);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $StackScriptID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=stackscript.delete&StackScriptID={$StackScriptID}";
        $query = $this->api->delete($StackScriptID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $StackScriptID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=stackscript.list&StackScriptID={$StackScriptID}";
        $query = $this->api->getList($StackScriptID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $StackScriptID  = rand(1, PHP_INT_MAX);
        $script         = 'sources';
        $DistributionID = rand(1, PHP_INT_MAX);
        $Label          = 'test';

        $expected = "api_key={$this->key}&api_action=stackscript.update&StackScriptID={$StackScriptID}&script={$script}&DistributionIDList={$DistributionID}&Label={$Label}";
        $query = $this->api->update($StackScriptID, $script, $DistributionID, $Label);
        $this->assertEquals($expected, $query);
    }
}
