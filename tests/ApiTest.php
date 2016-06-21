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

use Linode\Api;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    /** @var Api */
    private $api;

    protected function setUp()
    {
        $this->api = new Api(null);
    }

    public function testSpec()
    {
        $result = $this->api->spec();

        self::assertTrue(is_array($result));
        self::assertArrayHasKey('METHODS', $result);
        self::assertArrayHasKey('VERSION', $result);
        self::assertEquals(Api::VERSION, $result['VERSION']);
    }
}
