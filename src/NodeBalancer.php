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

use Linode\BaseLinodeApi;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class NodeBalancer extends BaseLinodeApi
{
    /**
     *
     *
     * @param   integer $DatacenterID       [required] The DatacenterID from avail.datacenters() where you wish to place this new NodeBalancer
     * @param   string  $Label              [optional] This NodeBalancer's label
     * @param   integer $ClientConnThrottle [optional] To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.
     * @param   integer $PaymentTerm        [optional] Subscription term in months for prepaid customers.  One of: 1, 12, or 24
     *
     * @return  array
     */
    public function create($DatacenterID, $Label = null, $ClientConnThrottle = null, $PaymentTerm = null)
    {
        return $this->call('nodebalancer.create', array(
            'DatacenterID'       => $DatacenterID,
            'Label'              => $Label,
            'ClientConnThrottle' => $ClientConnThrottle,
            'PaymentTerm'        => $PaymentTerm,
        ));
    }

    /**
     * Immediately removes a NodeBalancer from your account and issues a pro-rated credit back to your account, if applicable.
     *
     * @param   integer $NodeBalancerID [required] The NodeBalancerID to delete
     *
     * @return  array
     */
    public function delete($NodeBalancerID)
    {
        return $this->call('nodebalancer.delete', array(
            'NodeBalancerID' => $NodeBalancerID,
        ));
    }

    /**
     * Returns a list of NodeBalancers this user has access or delete to, including their properties
     *
     * @param   integer $NodeBalancerID [optional] Limits the list to the specified NodeBalancerID
     *
     * @return  array
     */
    public function getList($NodeBalancerID = null)
    {
        return $this->call('nodebalancer.list', array(
            'NodeBalancerID' => $NodeBalancerID,
        ));
    }

    /**
     * Updates a NodeBalancer's properties
     *
     * @param   integer $NodeBalancerID     [required]
     * @param   string  $Label              [optional] This NodeBalancer's label
     * @param   integer $ClientConnThrottle [optional] To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.
     *
     * @return  array
     */
    public function update($NodeBalancerID, $Label = null, $ClientConnThrottle = null)
    {
        return $this->call('nodebalancer.update', array(
            'NodeBalancerID'     => $NodeBalancerID,
            'Label'              => $Label,
            'ClientConnThrottle' => $ClientConnThrottle,
        ));
    }
}
