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
 * Balancing algorithm.
 */
class BalancingAlgorithm
{
    const ROUNDROBIN = 'roundrobin';
    const LEASTCONN  = 'leastconn';
    const SOURCE     = 'source';
}
