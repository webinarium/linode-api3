<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2017 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace Linode;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class Api extends BaseLinodeApi
{
    /** API version */
    const VERSION = '3.3';

    /**
     * Returns a data structure of the entire Linode API specification.  This method does not require
     * authorization.<br><br>For example: <a target="_blank"
     * href="https://api.linode.com/?api_action=api.spec">https://api.linode.com/?api_action=api.spec</a>.
     *
     * @return array
     */
    public function spec()
    {
        return $this->call('api.spec');
    }
}
