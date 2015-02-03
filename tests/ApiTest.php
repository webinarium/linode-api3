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

use Linode\Api;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    /** @var Api */
    private $api = null;

    protected function setUp()
    {
        $this->api = new Api(null);
    }

    public function testSpec()
    {
        $result = $this->api->spec('api.spec');

        $this->assertTrue(is_array($result));
        $this->assertArrayHasKey('METHODS', $result);
        $this->assertArrayHasKey('VERSION', $result);
        $this->assertEquals(Api::VERSION, $result['VERSION']);
    }
}
