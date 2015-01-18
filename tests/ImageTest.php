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

use Linode\Image;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Image */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Image($this->key, true);
    }

    public function testDelete()
    {
        $ImageID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.delete&ImageID={$ImageID}";
        $query = $this->api->delete($ImageID);
        $this->assertEquals($expected, $query);
    }

    public function testList()
    {
        $ImageID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.list&ImageID={$ImageID}";
        $query = $this->api->getList($ImageID);
        $this->assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $ImageID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.update&ImageID={$ImageID}";
        $query = $this->api->update($ImageID);
        $this->assertEquals($expected, $query);
    }
}
