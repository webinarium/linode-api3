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

use Linode\ProfessionalServices\ScopeApi;

class ProfessionalServicesScopeTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var ScopeApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new ScopeApi($this->key, true);
    }

    public function testCreate()
    {
        $LinodePlan = 1;

        $expected = "api_key={$this->key}&api_action=professionalservices.scope.create&linode_plan={$LinodePlan}";
        $query    = $this->api->create($LinodePlan);
        self::assertEquals($expected, $query);
    }
}
