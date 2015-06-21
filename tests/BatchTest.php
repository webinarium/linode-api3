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

use Linode\Batch;
use Linode\LinodeApi;
use Linode\PaymentTerm;

class BatchTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    protected function setUp()
    {
        $this->key = uniqid();
    }

    public function testBatch()
    {
        $expected = 'api_key=' . $this->key . '&api_action=batch&api_requestArray=[{"api_action":"linode.create","DatacenterID":"1","PlanID":"1","PaymentTerm":"1"},{"api_action":"linode.create","DatacenterID":"2","PlanID":"1","PaymentTerm":"1"},{"api_action":"linode.create","DatacenterID":"3","PlanID":"1","PaymentTerm":"1"}]';

        $batch = new Batch($this->key);
        $api   = new LinodeApi($batch);

        for ($i = 1; $i <= 3; ++$i) {
            $api->create($i, 1, PaymentTerm::ONE_MONTH);
        }

        $result = $batch->execute(true);

        $this->assertEquals($expected, $result);
        $this->assertFalse($batch->execute(true));
    }
}
