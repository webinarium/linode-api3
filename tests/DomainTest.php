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
use Linode\DomainType;

class DomainTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Domain */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Domain($this->key, true);
    }

    public function testCreate()
    {
        $Domain = 'www.example.com';
        $Type   = DomainType::MASTER;

        $expected = "api_key={$this->key}&api_action=domain.create&Domain={$Domain}&Type={$Type}";
        $query = $this->api->create($Domain, $Type);
        $this->assertEquals($expected, $query);
    }

    public function testDelete()
    {
        $DomainID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.delete&DomainID={$DomainID}";
        $query = $this->api->delete($DomainID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $DomainID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=domain.list&DomainID={$DomainID}";
        $query = $this->api->getList($DomainID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $DomainID = rand(1, PHP_INT_MAX);
        $Domain = 'www.example.com';

        $expected = "api_key={$this->key}&api_action=domain.update&DomainID={$DomainID}&Domain={$Domain}";
        $query = $this->api->update($DomainID, $Domain);
        $this->assertEquals($expected, $query);
    }
}
