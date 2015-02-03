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

use Linode\Domain;
use Linode\DnsRecord;

class DomainResourceTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Domain\ResourceApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Domain\ResourceApi($this->key, true);
    }

    public function testCreate()
    {
        $DomainID = rand(1, PHP_INT_MAX);
        $Type     = DnsRecord::A;

        $expected = "api_key={$this->key}&api_action=domain.resource.create&DomainID={$DomainID}&Type={$Type}";
        $query = $this->api->create($DomainID, $Type);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $DomainID   = rand(1, PHP_INT_MAX);
        $ResourceID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.delete&DomainID={$DomainID}&ResourceID={$ResourceID}";
        $query = $this->api->delete($DomainID, $ResourceID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $DomainID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.list&DomainID={$DomainID}";
        $query = $this->api->getList($DomainID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $DomainID   = rand(1, PHP_INT_MAX);
        $ResourceID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.resource.update&DomainID={$DomainID}&ResourceID={$ResourceID}";
        $query = $this->api->update($DomainID, $ResourceID);
        $this->assertEquals($expected, $query);
    }
}
