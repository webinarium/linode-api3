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

use Linode\BaseLinodeApi;

class LinodeApiStub extends BaseLinodeApi
{
    public function call($action, $parameters = array())
    {
        return parent::call($action, $parameters);
    }
}

class SpecTest extends \PHPUnit_Framework_TestCase
{
    /** @var LinodeApiStub */
    private $api = null;

    protected function setUp()
    {
        $this->api = new LinodeApiStub(null);
    }

    public function testApiSpec()
    {
        $result = $this->api->call('api.spec');

        $this->assertTrue(is_array($result));
        $this->assertArrayHasKey('METHODS', $result);
        $this->assertArrayHasKey('VERSION', $result);
        $this->assertEquals('3.3', $result['VERSION']);
    }
}
