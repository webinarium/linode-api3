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

use Linode\Linode\JobApi;

class LinodeJobTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var JobApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new JobApi($this->key, true);
    }

    public function testList()
    {
        $LinodeID = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.job.list&LinodeID={$LinodeID}";
        $query    = $this->api->getList($LinodeID);
        self::assertEquals($expected, $query);
    }
}
