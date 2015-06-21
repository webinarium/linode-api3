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

require_once __DIR__ . '/../vendor/autoload.php';

use Linode\UserApi;

class UserTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var UserApi */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new UserApi($this->key, true);
    }

    public function testGetApiKey()
    {
        $username = uniqid();
        $password = uniqid();

        $expected = "api_key={$this->key}&api_action=user.getapikey&username={$username}&password={$password}";
        $query    = $this->api->getApiKey($username, $password);
        $this->assertEquals($expected, $query);
    }
}
