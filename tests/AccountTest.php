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

use Linode\AccountApi;
use Linode\LinodeMode;

class AccountTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var AccountApi */
    private $api;

    protected function setUp()
    {
        $this->key = uniqid(null, false);
        $this->api = new AccountApi($this->key, [], true);
    }

    public function testEstimateInvoice()
    {
        $mode     = LinodeMode::LINODE_RESIZE;
        $LinodeID = mt_rand(1, PHP_INT_MAX);
        $PlanID   = mt_rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=account.estimateinvoice&mode={$mode}&LinodeID={$LinodeID}&PlanID={$PlanID}";
        $query    = $this->api->estimateInvoice($mode, $LinodeID, $PlanID);
        self::assertEquals($expected, $query);
    }

    public function testInfo()
    {
        $expected = "api_key={$this->key}&api_action=account.info";
        $query    = $this->api->info();
        self::assertEquals($expected, $query);
    }

    public function testPayBalance()
    {
        $expected = "api_key={$this->key}&api_action=account.paybalance";
        $query    = $this->api->payBalance();
        self::assertEquals($expected, $query);
    }

    public function testUpdateCard()
    {
        $ccNumber   = '4111111111111111';
        $ccExpMonth = str_pad(mt_rand(1, 12), 2, '0', STR_PAD_LEFT);
        $ccExpYear  = (int) date('Y') + 1;

        $expected = "api_key={$this->key}&api_action=account.updatecard&ccNumber={$ccNumber}&ccExpMonth={$ccExpMonth}&ccExpYear={$ccExpYear}";
        $query    = $this->api->updateCard($ccNumber, $ccExpMonth, $ccExpYear);
        self::assertEquals($expected, $query);
    }
}
