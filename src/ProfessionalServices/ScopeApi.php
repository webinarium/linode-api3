<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2016 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the MIT License along with
//  the library. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace Linode\ProfessionalServices;

use Linode\BaseLinodeApi;

/**
 * This class is autogenerated.
 *
 * @version Linode API v3.3
 */
class ScopeApi extends BaseLinodeApi
{
    /**
     * Creates a new Professional Services scope submission.
     *
     * @param string $linode_plan           [optional] Which Linode plans would you like to deploy?
     * @param string $customer_name         [optional] 
     * @param string $web_server            [optional] These provide network protocol handling for hosting websites.
     * @param string $mail_transfer         [optional] Mail transfer agents facilitate message transfer between servers
     * @param string $server_quantity       [optional] How many separate servers are involved in this migration?
     * @param string $provider_access       [optional] What types of server access do you have at your current provider?
     * @param string $monitoring            [optional] Constant monitoring of your deployed systems--these can also provide automatic notifications for service failures.
     * @param string $web_cache             [optional] Caching mechanisms provide temporary storage for web requests--cached content can generally be retrieved faster.
     * @param string $database_server       [optional] Generally used by applications to provide an organized way to capture and manipulate data
     * @param string $mail_filtering        [optional] Services here manipulate recieved messages in various ways
     * @param string $notes                 [optional] 
     * @param string $ticket_number         [optional] 
     * @param string $content_management    [optional] Centralized interfaces for editing, organizing, and publishing content
     * @param string $linode_datacenter     [optional] Which datacenters would you like your Linodes to be deployed in?
     * @param string $mail_retrieval        [optional] User mail clients connect to these to retrieve delivered mail
     * @param string $system_administration [optional] Various web interfaces for performing system administration tasks
     * @param string $requested_service     [optional] 
     * @param string $crossover             [optional] These can assist in providing reliable crossover--failures of individual components can be transparent to the application.
     * @param string $phone_number          [optional] 
     * @param string $application_quantity  [optional] How many separate applications or websites are involved in this migration?
     * @param string $managed               [optional] 
     * @param string $webmail               [optional] Access and administrate mail via web interfaces
     * @param string $current_provider      [optional] 
     * @param string $email_address         [optional] 
     * @param string $replication           [optional] Redundant services often have shared state--replication automatically propagates state changes between individual components.
     *
     * @return array
     */
    public function create($linode_plan = null, $customer_name = null, $web_server = null, $mail_transfer = null, $server_quantity = null, $provider_access = null, $monitoring = null, $web_cache = null, $database_server = null, $mail_filtering = null, $notes = null, $ticket_number = null, $content_management = null, $linode_datacenter = null, $mail_retrieval = null, $system_administration = null, $requested_service = null, $crossover = null, $phone_number = null, $application_quantity = null, $managed = null, $webmail = null, $current_provider = null, $email_address = null, $replication = null)
    {
        return $this->call('professionalservices.scope.create', [
            'linode_plan'           => $linode_plan,
            'customer_name'         => $customer_name,
            'web_server'            => $web_server,
            'mail_transfer'         => $mail_transfer,
            'server_quantity'       => $server_quantity,
            'provider_access'       => $provider_access,
            'monitoring'            => $monitoring,
            'web_cache'             => $web_cache,
            'database_server'       => $database_server,
            'mail_filtering'        => $mail_filtering,
            'notes'                 => $notes,
            'ticket_number'         => $ticket_number,
            'content_management'    => $content_management,
            'linode_datacenter'     => $linode_datacenter,
            'mail_retrieval'        => $mail_retrieval,
            'system_administration' => $system_administration,
            'requested_service'     => $requested_service,
            'crossover'             => $crossover,
            'phone_number'          => $phone_number,
            'application_quantity'  => $application_quantity,
            'managed'               => $managed,
            'webmail'               => $webmail,
            'current_provider'      => $current_provider,
            'email_address'         => $email_address,
            'replication'           => $replication,
        ]);
    }
}
