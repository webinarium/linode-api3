<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

use Linode\ImageApi;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var ImageApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new ImageApi($this->key, [], true);
    }

    public function testDelete()
    {
        $ImageID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.delete&ImageID={$ImageID}";
        $query    = $this->api->delete($ImageID);
        self::assertEquals($expected, $query);
    }

    public function testList()
    {
        $ImageID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.list&ImageID={$ImageID}";
        $query    = $this->api->getList($ImageID);
        self::assertEquals($expected, $query);
    }

    public function testUpdate()
    {
        $ImageID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=image.update&ImageID={$ImageID}";
        $query    = $this->api->update($ImageID);
        self::assertEquals($expected, $query);
    }
}
