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
 * Session persistence.
 */
class SessionPersistence
{
    const NONE        = 'none';
    const TABLE       = 'table';
    const HTTP_COOKIE = 'http_cookie';
}
