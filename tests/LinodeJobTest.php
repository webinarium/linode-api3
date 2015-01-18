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

use Linode\Linode\Job;

class LinodeJobTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $key;

    /** @var Job */
    private $api = null;

    protected function setUp()
    {
        $this->key = uniqid();
        $this->api = new Job($this->key, true);
    }

    public function testList()
    {
        $LinodeID = rand(1, PHP_INT_MAX);

        $expected = "api_key={$this->key}&api_action=linode.job.list&LinodeID={$LinodeID}";
        $query = $this->api->getList($LinodeID);
        $this->assertEquals($expected, $query);
    }
}
