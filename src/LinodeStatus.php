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
