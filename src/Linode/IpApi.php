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


namespace Linode\Linode;

use Linode\BaseLinodeApi;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class IpApi extends BaseLinodeApi
{
    /**
     * Assigns a Private IP to a Linode.  Returns the IPAddressID that was added.
     *
     * @param int $LinodeID [required]
     *
     * @return array
     */
    public function addPrivate($LinodeID)
    {
        return $this->call('linode.ip.addprivate', array(
            'LinodeID' => $LinodeID,
        ));
    }

    /**
     * Assigns a Public IP to a Linode.  Returns the IPAddressID and IPAddress that was added.
     *
     * @param int $LinodeID [required] The LinodeID of the Linode that will be assigned an additional public IP address
     *
     * @return array
     */
    public function addPublic($LinodeID)
    {
        return $this->call('linode.ip.addpublic', array(
            'LinodeID' => $LinodeID,
        ));
    }

    /**
     * Returns the IP addresses of all Linodes you have access to.
     *
     * @param int $LinodeID    [optional] If specified, limits the result to this LinodeID
     * @param int $IPAddressID [optional] If specified, limits the result to this IPAddressID
     *
     * @return array
     */
    public function getList($LinodeID = null, $IPAddressID = null)
    {
        return $this->call('linode.ip.list', array(
            'LinodeID'    => $LinodeID,
            'IPAddressID' => $IPAddressID,
        ));
    }

    /**
     * Sets the rDNS name of a Public IP.  Returns the IPAddressID and IPAddress that were updated.
     *
     * @param int    $IPAddressID [required] The IPAddressID of the address to update
     * @param string $Hostname    [required] The hostname to set the reverse DNS to
     *
     * @return array
     */
    public function setReverseDNS($IPAddressID, $Hostname)
    {
        return $this->call('linode.ip.setrdns', array(
            'IPAddressID' => $IPAddressID,
            'Hostname'    => $Hostname,
        ));
    }

    /**
     * Exchanges Public IP addresses between two Linodes within a Datacenter.  The destination of the IP
     * Address can be designated by either the toLinodeID or withIPAddressID parameter.  Returns the
     * resulting relationship of the Linode and IP Address parameters.  When performing a one directional
     * swap, the source is represented by the first of the two resultant array members.
     *
     * @param int $IPAddressID     [required] The IPAddressID of an IP Address to transfer or swap
     * @param int $withIPAddressID [optional] The IP Address ID to swap
     * @param int $toLinodeID      [optional] The LinodeID of the Linode where IPAddressID will be transfered
     *
     * @return array
     */
    public function swap($IPAddressID, $withIPAddressID = null, $toLinodeID = null)
    {
        return $this->call('linode.ip.swap', array(
            'IPAddressID'     => $IPAddressID,
            'withIPAddressID' => $withIPAddressID,
            'toLinodeID'      => $toLinodeID,
        ));
    }
}
