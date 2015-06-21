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


namespace Linode;

/**
 * Linode status.
 */
class LinodeStatus
{
    const BEING_CREATED = -1;
    const BRAND_NEW     = 0;
    const RUNNING       = 1;
    const POWERED_OFF   = 2;
}
