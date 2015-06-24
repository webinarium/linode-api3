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
 * DNS record.
 */
class DnsRecord
{
    const NS    = 'NS';
    const MX    = 'MX';
    const A     = 'A';
    const AAAA  = 'AAAA';
    const CNAME = 'CNAME';
    const TXT   = 'TXT';
    const SRV   = 'SRV';
}
