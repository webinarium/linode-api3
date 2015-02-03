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

use Linode\Linode\DiskApi;
use Linode\DiskType;

class LinodeDiskTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var DiskApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new DiskApi($this->key, true);
    }

    public function testCreate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $Type     = DiskType::EXT3;
        $Size     = 100;

        $expected = "api_key={$this->key}&api_action=linode.disk.create&LinodeID={$LinodeID}&Label={$Label}&Type={$Type}&Size={$Size}";
        $query = $this->api->create($LinodeID, $Label, $Type, $Size);
        $this->assertEquals($expected, $query);
    }

    public function testCreateFromDistribution()
    {
        $LinodeID       = rand(1, PHP_INT_MAX);
        $Label          = 'label';
        $DistributionID = rand(1, PHP_INT_MAX);
        $Size           = 100;

        $expected = "api_key={$this->key}&api_action=linode.disk.createfromdistribution&LinodeID={$LinodeID}&Label={$Label}&DistributionID={$DistributionID}&Size={$Size}";
        $query = $this->api->createFromDistribution($LinodeID, $Label, $DistributionID, $Size);
        $this->assertEquals($expected, $query);
    }

    public function testCreateFromImage()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $Label    = 'label';
        $ImageID  = rand(1, PHP_INT_MAX);
        $Size     = 100;

        $expected = "api_key={$this->key}&api_action=linode.disk.createfromimage&LinodeID={$LinodeID}&Label={$Label}&ImageID={$ImageID}&Size={$Size}";
        $query = $this->api->createFromImage($LinodeID, $Label, $ImageID, $Size);
        $this->assertEquals($expected, $query);
    }

    public function testCreateFromStackScript()
    {
        $LinodeID                = rand(1, PHP_INT_MAX);
        $Label                   = 'label';
        $DistributionID          = rand(1, PHP_INT_MAX);
        $StackScriptID           = '';
        $StackScriptUDFResponses = '';
        $Size                    = 100;
        $rootPass                = 'secret';

        $expected = "api_key={$this->key}&api_action=linode.disk.createfromstackscript&LinodeID={$LinodeID}&Label={$Label}&DistributionID={$DistributionID}&StackScriptID={$StackScriptID}&StackScriptUDFResponses={$StackScriptUDFResponses}&Size={$Size}&rootPass={$rootPass}";
        $query = $this->api->createFromStackScript($LinodeID, $Label, $DistributionID, $StackScriptID, $StackScriptUDFResponses, $Size, $rootPass);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $DiskID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.disk.delete&LinodeID={$LinodeID}&DiskID={$DiskID}";
        $query = $this->api->delete($LinodeID, $DiskID);
        $this->assertEquals($expected, $query);
    }

    public function testDuplicate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $DiskID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.disk.duplicate&LinodeID={$LinodeID}&DiskID={$DiskID}";
        $query = $this->api->duplicate($LinodeID, $DiskID);
        $this->assertEquals($expected, $query);
    }

    public function testImagize()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $DiskID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.disk.imagize&LinodeID={$LinodeID}&DiskID={$DiskID}";
        $query = $this->api->imagize($LinodeID, $DiskID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.disk.list&LinodeID={$LinodeID}";
        $query = $this->api->getList($LinodeID);
        $this->assertEquals($expected, $query);
    }

    public function testResize()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $DiskID   = rand(1, PHP_INT_MAX);
        $Size     = 100;

        $expected = "api_key={$this->key}&api_action=linode.disk.resize&LinodeID={$LinodeID}&DiskID={$DiskID}&Size={$Size}";
        $query = $this->api->resize($LinodeID, $DiskID, $Size);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $LinodeID = rand(1, PHP_INT_MAX);
        $DiskID   = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.disk.update&LinodeID={$LinodeID}&DiskID={$DiskID}";
        $query = $this->api->update($LinodeID, $DiskID);
        $this->assertEquals($expected, $query);
    }
}
