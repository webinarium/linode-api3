#!/usr/bin/env php
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

// Some known strings to replace with camelCase.

$vocabulary = array(

    // reservered words
    'clone'                  => 'duplicate',
    'echo'                   => 'test',
    'list'                   => 'getList',

    // classes
    'nodebalancer'           => 'NodeBalancer',
    'professionalservices'   => 'ProfessionalServices',
    'stackscript'            => 'StackScript',

    // methods
    'addprivate'             => 'addPrivate',
    'addpublic'              => 'addPublic',
    'createfromdistribution' => 'createFromDistribution',
    'createfromimage'        => 'createFromImage',
    'createfromstackscript'  => 'createFromStackScript',
    'datacenters'            => 'dataCenters',
    'estimateinvoice'        => 'estimateInvoice',
    'getapikey'              => 'getApiKey',
    'linodeplans'            => 'linodePlans',
    'nodebalancers'          => 'nodeBalancers',
    'paybalance'             => 'payBalance',
    'setrdns'                => 'setReverseDNS',
    'stackscripts'           => 'stackScripts',
    'updatecard'             => 'updateCard',
    'webconsoletoken'        => 'webConsoleToken',
);

// The spec doesn't keep the order of parameters in consistency.
// To avoid changing of the order on each update we store predefined order for known functions.

$params_order = array(
    'account.estimateinvoice'            => array('mode', 'LinodeID', 'PlanID', 'PaymentTerm'),
    'account.updatecard'                 => array('ccNumber', 'ccExpMonth', 'ccExpYear'),
    'avail.distributions'                => array('DistributionID'),
    'avail.kernels'                      => array('KernelID', 'isXen'),
    'avail.linodeplans'                  => array('PlanID'),
    'avail.stackscripts'                 => array('DistributionID', 'DistributionVendor', 'keywords'),
    'domain.create'                      => array('Domain', 'Type', 'SOA_Email', 'Description', 'Refresh_sec', 'Retry_sec', 'Expire_sec', 'TTL_sec', 'lpm_displayGroup', 'status', 'master_ips', 'axfr_ips'),
    'domain.delete'                      => array('DomainID'),
    'domain.list'                        => array('DomainID'),
    'domain.resource.create'             => array('DomainID', 'Type', 'Name', 'Target', 'Priority', 'Weight', 'Port', 'Protocol', 'TTL_sec'),
    'domain.resource.delete'             => array('DomainID', 'ResourceID'),
    'domain.resource.list'               => array('DomainID', 'ResourceID'),
    'domain.resource.update'             => array('DomainID', 'ResourceID', 'Name', 'Target', 'Priority', 'Weight', 'Port', 'Protocol', 'TTL_sec'),
    'domain.update'                      => array('DomainID', 'Domain', 'Type', 'SOA_Email', 'Description', 'Refresh_sec', 'Retry_sec', 'Expire_sec', 'TTL_sec', 'lpm_displayGroup', 'status', 'master_ips', 'axfr_ips'),
    'image.delete'                       => array('ImageID'),
    'image.list'                         => array('ImageID', 'pending'),
    'image.update'                       => array('ImageID', 'label', 'description'),
    'linode.boot'                        => array('LinodeID', 'ConfigID'),
    'linode.clone'                       => array('LinodeID', 'DatacenterID', 'PlanID', 'PaymentTerm', 'hypervisor'),
    'linode.config.create'               => array('LinodeID', 'Label', 'KernelID', 'DiskList', 'RunLevel', 'RAMLimit', 'virt_mode', 'RootDeviceNum', 'RootDeviceCustom', 'RootDeviceRO', 'devtmpfs_automount', 'helper_distro', 'helper_xen', 'helper_disableUpdateDB', 'helper_depmod', 'helper_network', 'Comments'),
    'linode.config.delete'               => array('LinodeID', 'ConfigID'),
    'linode.config.list'                 => array('LinodeID', 'ConfigID'),
    'linode.config.update'               => array('LinodeID', 'ConfigID', 'Label', 'KernelID', 'DiskList', 'RunLevel', 'RAMLimit', 'virt_mode', 'RootDeviceNum', 'RootDeviceCustom', 'RootDeviceRO', 'devtmpfs_automount', 'helper_distro', 'helper_xen', 'helper_disableUpdateDB', 'helper_depmod', 'helper_network', 'Comments'),
    'linode.create'                      => array('DatacenterID', 'PlanID', 'PaymentTerm'),
    'linode.delete'                      => array('LinodeID', 'skipChecks'),
    'linode.disk.create'                 => array('LinodeID', 'Label', 'Type', 'Size', 'isReadOnly', 'FromDistributionID', 'rootPass', 'rootSSHKey'),
    'linode.disk.createfromdistribution' => array('LinodeID', 'DistributionID', 'Label', 'Size', 'rootPass', 'rootSSHKey'),
    'linode.disk.createfromimage'        => array('LinodeID', 'ImageID', 'Label', 'size', 'rootPass', 'rootSSHKey'),
    'linode.disk.createfromstackscript'  => array('LinodeID', 'StackScriptID', 'StackScriptUDFResponses', 'DistributionID', 'Label', 'Size', 'rootPass', 'rootSSHKey'),
    'linode.disk.delete'                 => array('LinodeID', 'DiskID'),
    'linode.disk.duplicate'              => array('LinodeID', 'DiskID'),
    'linode.disk.imagize'                => array('LinodeID', 'DiskID', 'Label', 'Description'),
    'linode.disk.list'                   => array('LinodeID', 'DiskID'),
    'linode.disk.resize'                 => array('LinodeID', 'DiskID', 'size'),
    'linode.disk.update'                 => array('LinodeID', 'DiskID', 'Label', 'isReadOnly'),
    'linode.ip.addprivate'               => array('LinodeID'),
    'linode.ip.addpublic'                => array('LinodeID'),
    'linode.ip.list'                     => array('LinodeID', 'IPAddressID'),
    'linode.ip.setrdns'                  => array('IPAddressID', 'Hostname'),
    'linode.ip.swap'                     => array('IPAddressID', 'withIPAddressID', 'toLinodeID'),
    'linode.job.list'                    => array('LinodeID', 'JobID', 'pendingOnly'),
    'linode.list'                        => array('LinodeID'),
    'linode.mutate'                      => array('LinodeID'),
    'linode.reboot'                      => array('LinodeID', 'ConfigID'),
    'linode.resize'                      => array('LinodeID', 'PlanID'),
    'linode.shutdown'                    => array('LinodeID'),
    'linode.update'                      => array('LinodeID', 'Label', 'lpm_displayGroup', 'Alert_cpu_enabled', 'Alert_cpu_threshold', 'Alert_diskio_enabled', 'Alert_diskio_threshold', 'Alert_bwin_enabled', 'Alert_bwin_threshold', 'Alert_bwout_enabled', 'Alert_bwout_threshold', 'Alert_bwquota_enabled', 'Alert_bwquota_threshold', 'backupWindow', 'backupWeeklyDay', 'watchdog', 'ms_ssh_disabled', 'ms_ssh_user', 'ms_ssh_ip', 'ms_ssh_port'),
    'linode.webconsoletoken'             => array('LinodeID'),
    'nodebalancer.config.create'         => array('NodeBalancerID', 'Port', 'Protocol', 'Algorithm', 'Stickiness', 'check', 'check_interval', 'check_timeout', 'check_attempts', 'check_path', 'check_body', 'ssl_cert', 'ssl_key'),
    'nodebalancer.config.delete'         => array('NodeBalancerID', 'ConfigID'),
    'nodebalancer.config.list'           => array('NodeBalancerID', 'ConfigID'),
    'nodebalancer.config.update'         => array('ConfigID', 'Port', 'Protocol', 'Algorithm', 'Stickiness', 'check', 'check_interval', 'check_timeout', 'check_attempts', 'check_path', 'check_body', 'ssl_cert', 'ssl_key'),
    'nodebalancer.create'                => array('DatacenterID', 'Label', 'ClientConnThrottle'),
    'nodebalancer.delete'                => array('NodeBalancerID'),
    'nodebalancer.list'                  => array('NodeBalancerID'),
    'nodebalancer.node.create'           => array('ConfigID', 'Label', 'Address', 'Weight', 'Mode'),
    'nodebalancer.node.delete'           => array('NodeID'),
    'nodebalancer.node.list'             => array('ConfigID', 'NodeID'),
    'nodebalancer.node.update'           => array('NodeID', 'Label', 'Address', 'Weight', 'Mode'),
    'nodebalancer.update'                => array('NodeBalancerID', 'Label', 'ClientConnThrottle'),
    'stackscript.create'                 => array('script', 'DistributionIDList', 'Label', 'Description', 'isPublic', 'rev_note'),
    'stackscript.delete'                 => array('StackScriptID'),
    'stackscript.list'                   => array('StackScriptID'),
    'stackscript.update'                 => array('StackScriptID', 'script', 'DistributionIDList', 'Label', 'Description', 'isPublic', 'rev_note'),
    'user.getapikey'                     => array('username', 'password', 'token', 'expires', 'label'),
);

// Get API specification.

$json = file_get_contents('https://api.linode.com/?api_action=api.spec');

$api = json_decode($json, true);
$api = $api['DATA'];

$version = $api['VERSION'];

// Array of classes with nested arrays of methods.

$classes = array();

// Convert "linode.disk.createfromstackscript" names to ["Linode.Disk"]["createFromStackScript"].

foreach (array_keys($api['METHODS']) as $entry) {

    if ($entry == 'test.echo') {
        continue;
    }

    $parts = explode('.', $entry);

    $method = array_pop($parts);

    if (array_key_exists($method, $vocabulary)) {
        $method = $vocabulary[$method];
    }

    foreach ($parts as $key => $value) {

        if (array_key_exists($value, $vocabulary)) {
            $value = $vocabulary[$value];
        }

        $parts[$key] = ucfirst($value);
    }

    $class = implode('.', $parts);

    if (!array_key_exists($class, $classes)) {
        $classes[$class] = array();
    }

    $classes[$class][$method] = $api['METHODS'][$entry];
    $classes[$class][$method]['ACTION'] = $entry;
}

// Generate classes.

$class_template    = file_get_contents(__DIR__ . '/class.txt');
$function_template = file_get_contents(__DIR__ . '/function.txt');

foreach ($classes as $class => $methods) {

    ksort($methods);

    // Source code of class methods.
    $php = null;

    // Add spec version info into "Linode\Api" class.
    if ($class == 'Api') {
        $php .= "\n";
        $php .= "    /** API version */\n";
        $php .= "    const VERSION = '{$api['VERSION']}';\n";
    }

    // Enumerate class methods.
    foreach ($methods as $method => $meta) {

        // The original API spec contains optional and required parameters unordered.

        $parameters = array();

        // If we have predefined order for this function, use it.
        if (array_key_exists($meta['ACTION'], $params_order)) {

            foreach ($params_order[$meta['ACTION']] as $parameter) {
                $parameters[] = $meta['PARAMETERS'][$parameter];
            }
        }
        // Otherwise we have to pull required parameters to the top of parameters list.
        else {

            // Pick up required parameters first.
            foreach ($meta['PARAMETERS'] as $key => $parameter) {
                if ($parameter['REQUIRED']) {
                    $parameters[] = $parameter;
                }
            }

            // Now gather optional parameters.
            foreach ($meta['PARAMETERS'] as $key => $parameter) {
                if (!$parameter['REQUIRED']) {
                    $parameters[] = $parameter;
                }
            }
        }

        // Replace original parameters with reordered ones.
        $meta['PARAMETERS'] = $parameters;

        // Parameters annotation.
        $annotation = null;

        // Function parameters.
        $function_params = array();

        // API call parameters.
        $call_params = null;

        // Enumnerate method parameters.
        foreach ($meta['PARAMETERS'] as $parameter) {

            // Map of spec types to PHP types.
            $types = array(
                'boolean' => 'bool',
                'numeric' => 'int',
                'string'  => 'string',
            );

            // Add parameter's annotation.
            $annotation .= sprintf("%s* @param %s $%s [%s] %s\n",
                str_repeat(' ', 5),
                $types[$parameter['TYPE']],
                $parameter['NAME'],
                $parameter['REQUIRED'] ? 'required' : 'optional',
                $parameter['DESCRIPTION']
            );

            // Add parameter to function's declaration.
            $function_params[] = sprintf('$%s%s',
                $parameter['NAME'],
                $parameter['REQUIRED'] ? null : ' = null'
            );

            // Add parameter to API call inside the function.
            $call_params .= sprintf("%s'%s' => $%s,\n",
                str_repeat(' ', 12),
                $parameter['NAME'],
                $parameter['NAME']
            );
        }

        // Split long descriptions - each sentence goes to a separated line.
        $description = explode("\n", str_replace('. ', ".\n", $meta['DESCRIPTION']));

        foreach ($description as $i => $line) {
            $description[$i] = trim($line);
        }

        // Generate complete function.
        $function = sprintf($function_template,
            implode("\n     * ", $description),
            $annotation,
            $method,
            implode(', ', $function_params),
            $meta['ACTION'],
            $call_params
        );

        // Remove empty array from API call.
        $function = str_replace(", array(\n        )", null, $function);

        $php .= $function;
    }

    // Convert class name into fully-qualified namespace (e.g. "NodeBalancer.Node" => "Linode\NodeBalancer\Node").
    $class     = explode('.' , 'Linode.' . $class);
    $classname = array_pop($class);
    $namespace = implode('\\', $class);

    // Append class name with "Api" suffix.
    if ($classname != 'Api') {
        $classname .= 'Api';
    }

    // Convert namespace into FS path.
    $dir = str_replace('\\', '/', $namespace);
    $dir = substr($dir, 6);

    // Combine all parts into file contents.
    $php = sprintf($class_template, $namespace, $version, $classname, $php);

    // Remove unnecessary "use" operators.
    if ($namespace == 'Linode') {
        $php = str_replace("use Linode\\BaseLinodeApi;\n\n", null, $php);
    }

    // Flush the generated file contents.
    if (!file_exists("src{$dir}")) {
        mkdir("src{$dir}");
    }

    file_put_contents("src{$dir}/{$classname}.php", $php);
}
