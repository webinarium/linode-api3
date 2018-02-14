<?php

return array (
  'VERSION' => 3.3,
  'METHODS' => 
  array (
    'avail.kernels' => 
    array (
      'DESCRIPTION' => 'List available kernels.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'isXen' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Show or hide Xen compatible kernels',
          'TYPE' => 'boolean',
          'NAME' => 'isXen',
        ),
        'isKVM' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Show or hide KVM compatible kernels',
          'TYPE' => 'boolean',
          'NAME' => 'isKVM',
        ),
      ),
    ),
    'nodebalancer.create' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOACCESS,CCFAILED,VALIDATION',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'This NodeBalancer\'s label',
          'TYPE' => 'string',
          'default' => 'deflabel9000cakemix',
          'NAME' => 'Label',
        ),
        'ClientConnThrottle' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'ClientConnThrottle',
        ),
        'DatacenterID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new NodeBalancer',
          'TYPE' => 'numeric',
          'NAME' => 'DatacenterID',
        ),
      ),
    ),
    'stackscript.delete' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'StackScriptID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'StackScriptID',
        ),
      ),
    ),
    'nodebalancer.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of NodeBalancers this user has access or delete to, including their properties',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified NodeBalancerID',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
      ),
    ),
    'image.list' => 
    array (
      'DESCRIPTION' => 'Lists available gold-master images',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'ImageID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Request information for a specific gold-master image',
          'TYPE' => 'numeric',
          'NAME' => 'ImageID',
        ),
        'pending' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Show images currently being created.',
          'TYPE' => 'numeric',
          'NAME' => 'pending',
        ),
      ),
    ),
    'linode.resize' => 
    array (
      'DESCRIPTION' => 'Resizes a Linode from one plan to another.  Immediately shuts the Linode down, charges/credits the account, and issue a migration to another host server.',
      'THROWS' => 'NOTFOUND,CCFAILED,VALIDATION',
      'PARAMETERS' => 
      array (
        'PlanID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'NAME' => 'PlanID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.reboot' => 
    array (
      'DESCRIPTION' => 'Issues a shutdown, and then boot job for a given LinodeID.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'ConfigID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'avail.linodeplans' => 
    array (
      'DESCRIPTION' => 'Returns a structure of Linode PlanIDs containing the Plan label and the availability in each Datacenter.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'PlanID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified PlanID',
          'TYPE' => 'numeric',
          'NAME' => 'PlanID',
        ),
      ),
    ),
    'avail.distributions' => 
    array (
      'DESCRIPTION' => 'Returns a list of available Linux Distributions.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'DistributionID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the results to the specified DistributionID',
          'TYPE' => 'numeric',
          'NAME' => 'DistributionID',
        ),
      ),
    ),
    'volume.clone' => 
    array (
      'DESCRIPTION' => 'Clones an existing Block Storage Volume.',
      'THROWS' => 'NOACCESS, VALIDATION, VOLUMEBUSY, VOLUMELIMIT',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'A unique name for the new Volume',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'CloneFromID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'CloneFromID',
        ),
      ),
    ),
    'linode.disk.duplicate' => 
    array (
      'DESCRIPTION' => 'Performs a bit-for-bit copy of a disk image.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
      ),
    ),
    'nodebalancer.node.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of Nodes associated with a NodeBalancer Config',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'NodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified NodeID',
          'TYPE' => 'numeric',
          'NAME' => 'NodeID',
        ),
      ),
    ),
    'linode.disk.delete' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
      ),
    ),
    'nodebalancer.config.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a NodeBalancer\'s Config',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The ConfigID to delete',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
      ),
    ),
    'linode.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of all Linodes user has access or delete to, including some properties.  Status values are -1: Being Created, 0: Brand New, 1: Running, and 2: Powered Off.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified LinodeID',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.config.create' => 
    array (
      'DESCRIPTION' => 'Creates a Linode Configuration Profile.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'RootDeviceNum' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.',
          'TYPE' => 'numeric',
          'default' => 1,
          'NAME' => 'RootDeviceNum',
        ),
        'RootDeviceCustom' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'A custom root device setting.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'RootDeviceCustom',
        ),
        'RunLevel' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'One of \'default\', \'single\', \'binbash\' ',
          'TYPE' => 'string',
          'default' => 'default',
          'NAME' => 'RunLevel',
        ),
        'helper_xen' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Deprecated - use helper_distro.',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'helper_xen',
        ),
        'virt_mode' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Controls the virtualization mode. One of \'paravirt\', \'fullvirt\' ',
          'TYPE' => 'string',
          'default' => 'paravirt',
          'NAME' => 'virt_mode',
        ),
        'DiskList' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.',
          'TYPE' => 'string',
          'NAME' => 'DiskList',
        ),
        'KernelID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The KernelID for this profile.  Found in avail.kernels()',
          'TYPE' => 'numeric',
          'NAME' => 'KernelID',
        ),
        'helper_network' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Automatically creates network configuration files for your distro and places them into your filesystem.',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'helper_network',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Comments' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Comments you wish to save along with this profile',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Comments',
        ),
        'RootDeviceRO' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enables the \'ro\' kernel flag.  Modern distros want this. ',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'RootDeviceRO',
        ),
        'devtmpfs_automount' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Controls if pv_ops kernels should automount devtmpfs at boot. ',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'devtmpfs_automount',
        ),
        'helper_disableUpdateDB' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the disableUpdateDB filesystem helper',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'helper_disableUpdateDB',
        ),
        'helper_depmod' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Creates an empty modprobe file for the kernel you\'re booting. ',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'helper_depmod',
        ),
        'RAMLimit' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'RAMLimit in MB.  0 for max.',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'RAMLimit',
        ),
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The Label for this profile',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'helper_distro' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the Distro filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you\'re booting.  You want this.',
          'TYPE' => 'boolean',
          'default' => true,
          'NAME' => 'helper_distro',
        ),
      ),
    ),
    'linode.disk.resize' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
        'size' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The requested new size of this Disk in MB',
          'TYPE' => 'numeric',
          'NAME' => 'size',
        ),
      ),
    ),
    'domain.delete' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
      ),
    ),
    'domain.update' => 
    array (
      'DESCRIPTION' => 'Update a domain record.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Domain' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The zone\'s name',
          'TYPE' => 'string',
          'NAME' => 'Domain',
        ),
        'TTL_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'TTL_sec',
        ),
        'axfr_ips' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'IP addresses allowed to AXFR the entire zone, semicolon separated',
          'TYPE' => 'string',
          'NAME' => 'axfr_ips',
        ),
        'DomainID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
        'SOA_Email' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Required when type=master',
          'TYPE' => 'string',
          'NAME' => 'SOA_Email',
        ),
        'Expire_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'Expire_sec',
        ),
        'Retry_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'Retry_sec',
        ),
        'status' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '0, 1, or 2 (disabled, active, edit mode)',
          'TYPE' => 'numeric',
          'NAME' => 'status',
        ),
        'Description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Currently undisplayed.',
          'TYPE' => 'string',
          'NAME' => 'Description',
        ),
        'lpm_displayGroup' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Display group in the Domain list inside the Linode DNS Manager',
          'TYPE' => 'string',
          'NAME' => 'lpm_displayGroup',
        ),
        'Refresh_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'Refresh_sec',
        ),
        'Type' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'master or slave',
          'TYPE' => 'string',
          'NAME' => 'Type',
        ),
        'master_ips' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When type=slave, the zone\'s master DNS servers list, semicolon separated ',
          'TYPE' => 'string',
          'NAME' => 'master_ips',
        ),
      ),
    ),
    'nodebalancer.node.create' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'This backend Node\'s label',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The parent ConfigID to attach this Node to',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'Weight' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Load balancing weight, 1-255. Higher means more connections.',
          'TYPE' => 'numeric',
          'default' => 100,
          'NAME' => 'Weight',
        ),
        'Address' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The address:port combination used to communicate with this Node',
          'TYPE' => 'string',
          'NAME' => 'Address',
        ),
        'Mode' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The connections mode for this node.  One of \'accept\', \'reject\', or \'drain\'',
          'TYPE' => 'string',
          'default' => 'accept',
          'NAME' => 'Mode',
        ),
      ),
    ),
    'avail.nodebalancers' => 
    array (
      'DESCRIPTION' => 'Returns NodeBalancer pricing information.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
      ),
    ),
    'linode.disk.update' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'isReadOnly' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable forced read-only for this Disk',
          'TYPE' => 'boolean',
          'NAME' => 'isReadOnly',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The display label for this Disk',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
      ),
    ),
    'stackscript.list' => 
    array (
      'DESCRIPTION' => 'Lists StackScripts you have access to.',
      'THROWS' => 'STACKSCRIPTLIMIT',
      'PARAMETERS' => 
      array (
        'StackScriptID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified StackScriptID',
          'TYPE' => 'numeric',
          'NAME' => 'StackScriptID',
        ),
      ),
    ),
    'nodebalancer.config.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of NodeBalancers this user has access or delete to, including their properties',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
        'ConfigID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified ConfigID',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
      ),
    ),
    'domain.list' => 
    array (
      'DESCRIPTION' => 'Lists domains you have access to.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified DomainID',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
      ),
    ),
    'domain.resource.delete' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
        'ResourceID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ResourceID',
        ),
      ),
    ),
    'linode.config.list' => 
    array (
      'DESCRIPTION' => 'Lists a Linode\'s Configuration Profiles.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'ConfigID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'image.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a gold-master image',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'ImageID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The ID of the gold-master image to delete',
          'TYPE' => 'numeric',
          'NAME' => 'ImageID',
        ),
      ),
    ),
    'linode.ip.swap' => 
    array (
      'DESCRIPTION' => 'Exchanges Public IP addresses between two Linodes within a Datacenter.  The destination of the IP Address can be designated by either the toLinodeID or withIPAddressID parameter.  Returns the resulting relationship of the Linode and IP Address parameters.  When performing a one directional swap, the source is represented by the first of the two resultant array members.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'withIPAddressID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The IP Address ID to swap',
          'TYPE' => 'numeric',
          'NAME' => 'withIPAddressID',
        ),
        'IPAddressID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The IPAddressID of an IP Address to transfer or swap',
          'TYPE' => 'numeric',
          'NAME' => 'IPAddressID',
        ),
        'toLinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The LinodeID of the Linode where IPAddressID will be transfered',
          'TYPE' => 'numeric',
          'NAME' => 'toLinodeID',
        ),
      ),
    ),
    'linode.clone' => 
    array (
      'DESCRIPTION' => 'Creates a new Linode, assigns you full privileges, and then clones the specified LinodeID to the new Linode. There is a limit of 5 active clone operations per source Linode.  It is recommended that the source Linode be powered down during the clone.',
      'THROWS' => 'NOACCESS,NOTFOUND,CCFAILED,VALIDATION,LINODELIMITER,ACCOUNTLIMIT',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The LinodeID that you want cloned',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'PaymentTerm' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Subscription term in months for prepaid customers.  One of: 1, 12, or 24',
          'TYPE' => 'numeric',
          'NAME' => 'PaymentTerm',
        ),
        'DatacenterID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new Linode',
          'TYPE' => 'numeric',
          'NAME' => 'DatacenterID',
        ),
        'PlanID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'NAME' => 'PlanID',
        ),
      ),
    ),
    'linode.update' => 
    array (
      'DESCRIPTION' => 'Updates a Linode\'s properties.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Alert_diskio_enabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the disk IO email alert',
          'TYPE' => 'boolean',
          'NAME' => 'Alert_diskio_enabled',
        ),
        'Alert_bwquota_enabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the bw quote email alert',
          'TYPE' => 'boolean',
          'NAME' => 'Alert_bwquota_enabled',
        ),
        'Alert_bwout_enabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the outgoing bandwidth email alert',
          'TYPE' => 'boolean',
          'NAME' => 'Alert_bwout_enabled',
        ),
        'Alert_cpu_threshold' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'CPU Alert threshold, percentage 0-800',
          'TYPE' => 'numeric',
          'NAME' => 'Alert_cpu_threshold',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'watchdog' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the Lassie shutdown watchdog',
          'TYPE' => 'boolean',
          'NAME' => 'watchdog',
        ),
        'Alert_bwout_threshold' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Mb/sec',
          'TYPE' => 'numeric',
          'NAME' => 'Alert_bwout_threshold',
        ),
        'backupWindow' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'backupWindow',
        ),
        'ms_ssh_ip' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'ms_ssh_ip',
        ),
        'Alert_bwin_enabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the incoming bandwidth email alert',
          'TYPE' => 'boolean',
          'NAME' => 'Alert_bwin_enabled',
        ),
        'ms_ssh_disabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'boolean',
          'NAME' => 'ms_ssh_disabled',
        ),
        'ms_ssh_port' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ms_ssh_port',
        ),
        'Alert_bwquota_threshold' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Percentage of monthly bw quota',
          'TYPE' => 'numeric',
          'NAME' => 'Alert_bwquota_threshold',
        ),
        'backupWeeklyDay' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'backupWeeklyDay',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'This Linode\'s label',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'lpm_displayGroup' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Display group in the Linode list inside the Linode Manager',
          'TYPE' => 'string',
          'NAME' => 'lpm_displayGroup',
        ),
        'Alert_diskio_threshold' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'IO ops/sec',
          'TYPE' => 'numeric',
          'NAME' => 'Alert_diskio_threshold',
        ),
        'Alert_cpu_enabled' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the cpu usage email alert',
          'TYPE' => 'boolean',
          'NAME' => 'Alert_cpu_enabled',
        ),
        'Alert_bwin_threshold' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Mb/sec',
          'TYPE' => 'numeric',
          'NAME' => 'Alert_bwin_threshold',
        ),
        'ms_ssh_user' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'ms_ssh_user',
        ),
      ),
    ),
    'account.paybalance' => 
    array (
      'DESCRIPTION' => 'Pays current balance on file, returning it in the response.',
      'THROWS' => 'CCEXPIRED,CCFAILED,NOACCESS,PAYMENTLIMITER,VALIDATION',
      'PARAMETERS' => 
      array (
      ),
    ),
    'nodebalancer.config.update' => 
    array (
      'DESCRIPTION' => 'Updates a Config\'s properties',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'check_passive' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable passive checks based on observing communication with back-end nodes.',
          'TYPE' => 'boolean',
          'NAME' => 'check_passive',
        ),
        'Port' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Port to bind to on the public interfaces. 1-65534',
          'TYPE' => 'numeric',
          'NAME' => 'Port',
        ),
        'check_body' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When check=http, a regex to match within the first 16,384 bytes of the response body',
          'TYPE' => 'string',
          'NAME' => 'check_body',
        ),
        'ssl_cert' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'SSL certificate served by the NodeBalancer when the protocol is \'https\'',
          'TYPE' => 'string',
          'NAME' => 'ssl_cert',
        ),
        'Algorithm' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Balancing algorithm.  One of \'roundrobin\', \'leastconn\', \'source\'',
          'TYPE' => 'string',
          'NAME' => 'Algorithm',
        ),
        'Protocol' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Either \'tcp\', \'http\', or \'https\'',
          'TYPE' => 'string',
          'NAME' => 'Protocol',
        ),
        'cipher_suite' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'SSL cipher suite to enforce. One of \'recommended\', \'legacy\'',
          'TYPE' => 'string',
          'NAME' => 'cipher_suite',
        ),
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'check_interval' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Seconds between health check probes.  2-3600',
          'TYPE' => 'numeric',
          'NAME' => 'check_interval',
        ),
        'ssl_key' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Unpassphrased private key for the SSL certificate when protocol is \'https\'',
          'TYPE' => 'string',
          'NAME' => 'ssl_key',
        ),
        'Stickiness' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Session persistence.  One of \'none\', \'table\', \'http_cookie\'',
          'TYPE' => 'string',
          'NAME' => 'Stickiness',
        ),
        'check_attempts' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Number of failed probes before taking a node out of rotation. 1-30',
          'TYPE' => 'string',
          'NAME' => 'check_attempts',
        ),
        'check' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Perform active health checks on the backend nodes.  One of \'connection\', \'http\', \'http_body\'',
          'TYPE' => 'string',
          'NAME' => 'check',
        ),
        'check_path' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When check=http, the path to request',
          'TYPE' => 'string',
          'NAME' => 'check_path',
        ),
        'check_timeout' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Seconds to wait before considering the probe a failure. 1-30.  Must be less than check_interval.',
          'TYPE' => 'string',
          'NAME' => 'check_timeout',
        ),
      ),
    ),
    'linode.disk.list' => 
    array (
      'DESCRIPTION' => 'Status values are 1: Ready and 2: Being Deleted.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
      ),
    ),
    'stackscript.update' => 
    array (
      'DESCRIPTION' => 'Update a StackScript.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'rev_note' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'rev_note',
        ),
        'script' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The actual script',
          'TYPE' => 'string',
          'NAME' => 'script',
        ),
        'Description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'Description',
        ),
        'StackScriptID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'StackScriptID',
        ),
        'isPublic' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Whether this StackScript is published in the Library, for everyone to use',
          'TYPE' => 'boolean',
          'NAME' => 'isPublic',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The Label for this StackScript',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'DistributionIDList' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Comma delimited list of DistributionIDs that this script works on ',
          'TYPE' => 'string',
          'NAME' => 'DistributionIDList',
        ),
      ),
    ),
    'linode.boot' => 
    array (
      'DESCRIPTION' => 'Issues a boot job for the provided ConfigID.  If no ConfigID is provided boots the last used configuration profile, or the first configuration profile if this Linode has never been booted.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'ConfigID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The ConfigID to boot, available from linode.config.list().',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.ip.addpublic' => 
    array (
      'DESCRIPTION' => 'Assigns a Public IP to a Linode.  Returns the IPAddressID and IPAddress that was added.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The LinodeID of the Linode that will be assigned an additional public IP address',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.job.list' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'pendingOnly' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'boolean',
          'NAME' => 'pendingOnly',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'JobID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified JobID',
          'TYPE' => 'numeric',
          'NAME' => 'JobID',
        ),
      ),
    ),
    'linode.ip.list' => 
    array (
      'DESCRIPTION' => 'Returns the IP addresses of all Linodes you have access to.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'If specified, limits the result to this LinodeID',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'IPAddressID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'If specified, limits the result to this IPAddressID',
          'TYPE' => 'numeric',
          'NAME' => 'IPAddressID',
        ),
      ),
    ),
    'linode.disk.createfromdistribution' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'rootPass' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The root (or core) user\'s password',
          'TYPE' => 'string',
          'NAME' => 'rootPass',
        ),
        'rootSSHKey' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys (or /home/core/.ssh/authorized_keys) upon distribution configuration.',
          'TYPE' => 'string',
          'NAME' => 'rootSSHKey',
        ),
        'DistributionID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The DistributionID to create this disk from.  Found in avail.distributions()',
          'TYPE' => 'numeric',
          'NAME' => 'DistributionID',
        ),
        'Size' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Size of this disk image in MB',
          'TYPE' => 'numeric',
          'NAME' => 'Size',
        ),
      ),
    ),
    'linode.disk.create' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'isReadOnly' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable forced read-only for this Disk',
          'TYPE' => 'boolean',
          'default' => false,
          'NAME' => 'isReadOnly',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The display label for this Disk',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'Type' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The formatted type of this disk.  Valid types are: ext3, ext4, swap, raw',
          'TYPE' => 'string',
          'NAME' => 'Type',
        ),
        'Size' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The size in MB of this Disk.',
          'TYPE' => 'numeric',
          'NAME' => 'Size',
        ),
      ),
    ),
    'linode.config.update' => 
    array (
      'DESCRIPTION' => 'Updates a Linode Configuration Profile.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'RootDeviceNum' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.',
          'TYPE' => 'numeric',
          'NAME' => 'RootDeviceNum',
        ),
        'RootDeviceCustom' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'A custom root device setting.',
          'TYPE' => 'string',
          'NAME' => 'RootDeviceCustom',
        ),
        'RunLevel' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'One of \'default\', \'single\', \'binbash\' ',
          'TYPE' => 'string',
          'NAME' => 'RunLevel',
        ),
        'helper_xen' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Deprecated - use helper_distro.',
          'TYPE' => 'boolean',
          'NAME' => 'helper_xen',
        ),
        'virt_mode' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Controls the virtualization mode. One of \'paravirt\', \'fullvirt\' ',
          'TYPE' => 'string',
          'NAME' => 'virt_mode',
        ),
        'DiskList' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.',
          'TYPE' => 'string',
          'NAME' => 'DiskList',
        ),
        'KernelID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The KernelID for this profile.  Found in avail.kernels()',
          'TYPE' => 'numeric',
          'NAME' => 'KernelID',
        ),
        'helper_network' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Automatically creates network configuration files for your distro and places them into your filesystem.',
          'TYPE' => 'boolean',
          'NAME' => 'helper_network',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Comments' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Comments you wish to save along with this profile',
          'TYPE' => 'string',
          'NAME' => 'Comments',
        ),
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'RootDeviceRO' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enables the \'ro\' kernel flag.  Modern distros want this. ',
          'TYPE' => 'boolean',
          'NAME' => 'RootDeviceRO',
        ),
        'devtmpfs_automount' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Controls if pv_ops kernels should automount devtmpfs at boot. ',
          'TYPE' => 'boolean',
          'NAME' => 'devtmpfs_automount',
        ),
        'helper_disableUpdateDB' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the disableUpdateDB filesystem helper',
          'TYPE' => 'boolean',
          'NAME' => 'helper_disableUpdateDB',
        ),
        'helper_depmod' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Creates an empty modprobe file for the kernel you\'re booting. ',
          'TYPE' => 'boolean',
          'NAME' => 'helper_depmod',
        ),
        'RAMLimit' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'RAMLimit in MB.  0 for max.',
          'TYPE' => 'numeric',
          'NAME' => 'RAMLimit',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The Label for this profile',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'helper_distro' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable the Distro filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you\'re booting.  You want this.',
          'TYPE' => 'boolean',
          'NAME' => 'helper_distro',
        ),
      ),
    ),
    'volume.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a Block Storage Volume',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'VolumeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The Volume to delete',
          'TYPE' => 'numeric',
          'NAME' => 'VolumeID',
        ),
      ),
    ),
    'linode.config.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a Linode Configuration Profile.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'ConfigID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ConfigID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.webconsoletoken' => 
    array (
      'DESCRIPTION' => 'Generates a console token starting a web console LISH session for the requesting IP',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.mutate' => 
    array (
      'DESCRIPTION' => 'Upgrades a Linode to its next generation.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'test.echo' => 
    array (
      'DESCRIPTION' => 'Echos back parameters that were passed in.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
      ),
    ),
    'volume.update' => 
    array (
      'DESCRIPTION' => 'Updates a Volume\'s properties',
      'THROWS' => 'NOTFOUND,VALIDATION,VOLUMEBUSY,VOLUMELIMIT',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'A unique name for the Volume',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The Linode to attach this Volume to',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'VolumeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The Volume to modify',
          'TYPE' => 'numeric',
          'NAME' => 'VolumeID',
        ),
        'Size' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Sets the new size of the new Volume in GiB; Volumes can only be made larger',
          'TYPE' => 'numeric',
          'NAME' => 'Size',
        ),
      ),
    ),
    'domain.resource.create' => 
    array (
      'DESCRIPTION' => 'Create a domain record.',
      'THROWS' => 'NOACCESS,VALIDATION',
      'PARAMETERS' => 
      array (
        'Target' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When Type=MX the hostname.  When Type=CNAME the target of the alias.  When Type=TXT or CAA the value of the record. When Type=A or AAAA the token of \'[remote_addr]\' will be substituted with the IP address of the request.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Target',
        ),
        'TTL_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'TTL.  Leave as 0 to accept our default.',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'TTL_sec',
        ),
        'Port' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 80,
          'NAME' => 'Port',
        ),
        'DomainID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
        'Protocol' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The protocol to append to an SRV record.  Ignored on other record types.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Protocol',
        ),
        'Priority' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Priority for MX and SRV records, 0-65535',
          'TYPE' => 'numeric',
          'default' => 10,
          'NAME' => 'Priority',
        ),
        'Tag' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The tag attribute for a CAA record.  One of issue, issuewild, iodef.  Ignored on other record types.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Tag',
        ),
        'Weight' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 5,
          'NAME' => 'Weight',
        ),
        'Type' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'One of: NS, MX, A, AAAA, CNAME, TXT, SRV or CAA',
          'TYPE' => 'string',
          'NAME' => 'Type',
        ),
        'Name' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The hostname or FQDN.  When Type=MX the subdomain to delegate to the Target MX server.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Name',
        ),
      ),
    ),
    'linode.ip.setrdns' => 
    array (
      'DESCRIPTION' => 'Sets the rDNS name of a Public IP.  Returns the IPAddressID and IPAddress that were updated.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Hostname' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The hostname to set the reverse DNS to',
          'TYPE' => 'string',
          'NAME' => 'Hostname',
        ),
        'IPAddressID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The IPAddressID of the address to update',
          'TYPE' => 'numeric',
          'NAME' => 'IPAddressID',
        ),
      ),
    ),
    'nodebalancer.node.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a Node from a NodeBalancer Config',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'NodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The NodeID to delete',
          'TYPE' => 'numeric',
          'NAME' => 'NodeID',
        ),
      ),
    ),
    'volume.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of block storage Volumes',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'VolumeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limits the list to the specified Volume',
          'TYPE' => 'numeric',
          'NAME' => 'VolumeID',
        ),
      ),
    ),
    'nodebalancer.delete' => 
    array (
      'DESCRIPTION' => 'Immediately removes a NodeBalancer from your account and issues a pro-rated credit back to your account, if applicable.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The NodeBalancerID to delete',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
      ),
    ),
    'linode.kvmify' => 
    array (
      'DESCRIPTION' => 'Changes a Linode\'s hypervisor from Xen to KVM.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The LinodeID to migrate to KVM.',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'stackscript.create' => 
    array (
      'DESCRIPTION' => 'Create a StackScript.',
      'THROWS' => 'NOACCESS,VALIDATION,STACKSCRIPTLIMIT',
      'PARAMETERS' => 
      array (
        'rev_note' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'rev_note',
        ),
        'isPublic' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Whether this StackScript is published in the Library, for everyone to use',
          'TYPE' => 'boolean',
          'default' => false,
          'NAME' => 'isPublic',
        ),
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The Label for this StackScript',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'script' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The actual script',
          'TYPE' => 'string',
          'NAME' => 'script',
        ),
        'Description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Description',
        ),
        'DistributionIDList' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Comma delimited list of DistributionIDs that this script works on ',
          'TYPE' => 'string',
          'NAME' => 'DistributionIDList',
        ),
      ),
    ),
    'linode.create' => 
    array (
      'DESCRIPTION' => 'Creates a Linode and assigns you full privileges. There is a 250-linodes-per-hour limiter.',
      'THROWS' => 'NOACCESS,CCFAILED,VALIDATION,LINODELIMITER,ACCOUNTLIMIT',
      'PARAMETERS' => 
      array (
        'PlanID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'NAME' => 'PlanID',
        ),
        'PaymentTerm' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Subscription term in months for prepaid customers.  One of: 1, 12, or 24',
          'TYPE' => 'numeric',
          'default' => 1,
          'NAME' => 'PaymentTerm',
        ),
        'DatacenterID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new Linode',
          'TYPE' => 'numeric',
          'NAME' => 'DatacenterID',
        ),
      ),
    ),
    'account.info' => 
    array (
      'DESCRIPTION' => 'Shows information about your account such as the date your account was opened as well as your network utilization for the current month in gigabytes.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
      ),
    ),
    'domain.resource.list' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
        'ResourceID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ResourceID',
        ),
      ),
    ),
    'nodebalancer.config.create' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'check_passive' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Enable passive checks based on observing communication with back-end nodes.',
          'TYPE' => 'boolean',
          'default' => 1,
          'NAME' => 'check_passive',
        ),
        'Port' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Port to bind to on the public interfaces. 1-65534',
          'TYPE' => 'numeric',
          'default' => 80,
          'NAME' => 'Port',
        ),
        'check_body' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When check=http, a regex to match within the first 16,384 bytes of the response body',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'check_body',
        ),
        'ssl_cert' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'SSL certificate served by the NodeBalancer when the protocol is \'https\'',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'ssl_cert',
        ),
        'Algorithm' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Balancing algorithm.  One of \'roundrobin\', \'leastconn\', \'source\'',
          'TYPE' => 'string',
          'default' => 'roundrobin',
          'NAME' => 'Algorithm',
        ),
        'Protocol' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Either \'tcp\', \'http\', or \'https\'',
          'TYPE' => 'string',
          'default' => 'http',
          'NAME' => 'Protocol',
        ),
        'cipher_suite' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'SSL cipher suite to enforce. One of \'recommended\', \'legacy\'',
          'TYPE' => 'string',
          'default' => 'recommended',
          'NAME' => 'cipher_suite',
        ),
        'NodeBalancerID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The parent NodeBalancer\'s ID',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
        'check_interval' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Seconds between health check probes.  2-3600',
          'TYPE' => 'numeric',
          'default' => 5,
          'NAME' => 'check_interval',
        ),
        'ssl_key' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Unpassphrased private key for the SSL certificate when protocol is \'https\'',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'ssl_key',
        ),
        'Stickiness' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Session persistence.  One of \'none\', \'table\', \'http_cookie\'',
          'TYPE' => 'string',
          'default' => 'table',
          'NAME' => 'Stickiness',
        ),
        'check_attempts' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Number of failed probes before taking a node out of rotation. 1-30',
          'TYPE' => 'string',
          'default' => 2,
          'NAME' => 'check_attempts',
        ),
        'check' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Perform active health checks on the backend nodes.  One of \'connection\', \'http\', \'http_body\'',
          'TYPE' => 'string',
          'default' => 'connection',
          'NAME' => 'check',
        ),
        'check_path' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When check=http, the path to request',
          'TYPE' => 'string',
          'default' => '/',
          'NAME' => 'check_path',
        ),
        'check_timeout' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Seconds to wait before considering the probe a failure. 1-30.  Must be less than check_interval.',
          'TYPE' => 'string',
          'default' => 3,
          'NAME' => 'check_timeout',
        ),
      ),
    ),
    'avail.stackscripts' => 
    array (
      'DESCRIPTION' => 'Returns a list of available public StackScripts.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'DistributionID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Limit the results to StackScripts that can be applied to this DistributionID',
          'TYPE' => 'numeric',
          'NAME' => 'DistributionID',
        ),
        'DistributionVendor' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Debian, Ubuntu, Fedora, etc.',
          'TYPE' => 'string',
          'NAME' => 'DistributionVendor',
        ),
        'keywords' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Search terms',
          'TYPE' => 'string',
          'NAME' => 'keywords',
        ),
      ),
    ),
    'linode.ip.addprivate' => 
    array (
      'DESCRIPTION' => 'Assigns a Private IP to a Linode.  Returns the IPAddressID that was added.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'linode.disk.createfromimage' => 
    array (
      'DESCRIPTION' => 'Creates a new disk from a previously imagized disk.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Specifies the Linode to deploy on to',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'rootPass' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Optionally sets the root password at deployment time. If a password is not provided the existing root password of the frozen image will not be modified',
          'TYPE' => 'string',
          'NAME' => 'rootPass',
        ),
        'rootSSHKey' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys upon image deployment',
          'TYPE' => 'string',
          'NAME' => 'rootSSHKey',
        ),
        'ImageID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The ID of the frozen image to deploy from',
          'TYPE' => 'numeric',
          'NAME' => 'ImageID',
        ),
        'size' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The size of the disk image to creates. Defaults to the minimum size required for the requested image',
          'TYPE' => 'numeric',
          'NAME' => 'size',
        ),
      ),
    ),
    'linode.disk.imagize' => 
    array (
      'DESCRIPTION' => 'Creates a gold-master image for future deployments',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Specifies the source Linode to create the image from',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Sets the name of the image shown in the base image list, defaults to the source image label',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'Description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'An optional description of the created image',
          'TYPE' => 'string',
          'NAME' => 'Description',
        ),
        'DiskID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Specifies the source Disk to create the image from',
          'TYPE' => 'numeric',
          'NAME' => 'DiskID',
        ),
      ),
    ),
    'linode.shutdown' => 
    array (
      'DESCRIPTION' => 'Issues a shutdown job for a given LinodeID.',
      'THROWS' => 'NOTFOUND',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
      ),
    ),
    'domain.create' => 
    array (
      'DESCRIPTION' => 'Create a domain record.',
      'THROWS' => 'NOACCESS,VALIDATION',
      'PARAMETERS' => 
      array (
        'Domain' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The zone\'s name',
          'TYPE' => 'string',
          'NAME' => 'Domain',
        ),
        'Retry_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'Retry_sec',
        ),
        'status' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '0, 1, or 2 (disabled, active, edit mode)',
          'TYPE' => 'numeric',
          'default' => 1,
          'NAME' => 'status',
        ),
        'TTL_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'TTL_sec',
        ),
        'axfr_ips' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'IP addresses allowed to AXFR the entire zone, semicolon separated',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'axfr_ips',
        ),
        'Description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Currently undisplayed.',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'Description',
        ),
        'lpm_displayGroup' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Display group in the Domain list inside the Linode DNS Manager',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'lpm_displayGroup',
        ),
        'Refresh_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'Refresh_sec',
        ),
        'SOA_Email' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Required when type=master',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'SOA_Email',
        ),
        'Type' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'master or slave',
          'TYPE' => 'string',
          'NAME' => 'Type',
        ),
        'Expire_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'default' => 0,
          'NAME' => 'Expire_sec',
        ),
        'master_ips' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When type=slave, the zone\'s master DNS servers list, semicolon separated ',
          'TYPE' => 'string',
          'default' => '',
          'NAME' => 'master_ips',
        ),
      ),
    ),
    'linode.delete' => 
    array (
      'DESCRIPTION' => 'Immediately removes a Linode from your account and issues a pro-rated credit back to your account, if applicable.  To prevent accidental deletes, this requires the Linode has no Disk images.  You must first delete its disk images."',
      'THROWS' => 'NOTFOUND,LINODENOTEMPTY',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The LinodeID to delete',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'skipChecks' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Skips the safety checks and will always delete the Linode',
          'TYPE' => 'boolean',
          'NAME' => 'skipChecks',
        ),
      ),
    ),
    'domain.resource.update' => 
    array (
      'DESCRIPTION' => 'Update a domain record.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Target' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'When Type=MX the hostname.  When Type=CNAME the target of the alias.  When Type=TXT or CAA the value of the record. When Type=A or AAAA the token of \'[remote_addr]\' will be substituted with the IP address of the request.',
          'TYPE' => 'string',
          'NAME' => 'Target',
        ),
        'TTL_sec' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'TTL.  Leave as 0 to accept our default.',
          'TYPE' => 'numeric',
          'NAME' => 'TTL_sec',
        ),
        'Port' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'Port',
        ),
        'DomainID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'DomainID',
        ),
        'Protocol' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The protocol to append to an SRV record.  Ignored on other record types.',
          'TYPE' => 'string',
          'NAME' => 'Protocol',
        ),
        'Priority' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Priority for MX and SRV records, 0-65535',
          'TYPE' => 'numeric',
          'NAME' => 'Priority',
        ),
        'Tag' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The tag attribute for a CAA record.  One of issue, issuewild, iodef.  Ignored on other record types.',
          'TYPE' => 'string',
          'NAME' => 'Tag',
        ),
        'Weight' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'Weight',
        ),
        'ResourceID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ResourceID',
        ),
        'Name' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The hostname or FQDN.  When Type=MX the subdomain to delegate to the Target MX server.',
          'TYPE' => 'string',
          'NAME' => 'Name',
        ),
      ),
    ),
    'image.update' => 
    array (
      'DESCRIPTION' => 'Update an Image record.',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'description' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'An optional description of the Image.',
          'TYPE' => 'string',
          'NAME' => 'description',
        ),
        'label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The label of the Image.',
          'TYPE' => 'string',
          'NAME' => 'label',
        ),
        'ImageID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The ID of the Image to modify.',
          'TYPE' => 'numeric',
          'NAME' => 'ImageID',
        ),
      ),
    ),
    'volume.create' => 
    array (
      'DESCRIPTION' => 'Creates a new Block Storage Volume. One of DatacenterID or LinodeID is required.',
      'THROWS' => 'NOACCESS, VALIDATION, ACCOUNTLIMIT, VOLUMELIMIT',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'A unique name for the Volume',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The Linode to attach this Volume to',
          'TYPE' => 'numeric',
          'default' => '',
          'NAME' => 'LinodeID',
        ),
        'DatacenterID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Sets the datacenter where the Volume should be provisioned',
          'TYPE' => 'numeric',
          'default' => '',
          'NAME' => 'DatacenterID',
        ),
        'Size' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Sets the size of the new Volume in GiB',
          'TYPE' => 'numeric',
          'NAME' => 'Size',
        ),
      ),
    ),
    'api.spec' => 
    array (
      'DESCRIPTION' => 'Returns a data structure of the entire Linode API specification.  This method does not require authorization.<br><br>For example: <a target="_blank" href="https://api.linode.com/?api_action=api.spec">https://api.linode.com/?api_action=api.spec</a>',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
      ),
    ),
    'linode.disk.createfromstackscript' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'StackScriptUDFResponses' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'JSON encoded name/value pairs, answering this StackScript\'s User Defined Fields',
          'TYPE' => 'string',
          'NAME' => 'StackScriptUDFResponses',
        ),
        'rootPass' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The root user\'s password',
          'TYPE' => 'string',
          'NAME' => 'rootPass',
        ),
        'Size' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Size of this disk image in MB',
          'TYPE' => 'numeric',
          'NAME' => 'Size',
        ),
        'StackScriptID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The StackScript to create this image from',
          'TYPE' => 'numeric',
          'NAME' => 'StackScriptID',
        ),
        'LinodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'Label' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'rootSSHKey' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys upon distribution configuration.',
          'TYPE' => 'string',
          'NAME' => 'rootSSHKey',
        ),
        'DistributionID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'Which Distribution to apply this StackScript to.  Must be one from the script\'s DistributionIDList',
          'TYPE' => 'numeric',
          'NAME' => 'DistributionID',
        ),
      ),
    ),
    'nodebalancer.update' => 
    array (
      'DESCRIPTION' => 'Updates a NodeBalancer\'s properties',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'NodeBalancerID',
        ),
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'This NodeBalancer\'s label',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'ClientConnThrottle' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.',
          'TYPE' => 'numeric',
          'NAME' => 'ClientConnThrottle',
        ),
      ),
    ),
    'avail.datacenters' => 
    array (
      'DESCRIPTION' => 'Returns a list of Linode data center facilities.',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
      ),
    ),
    'account.estimateinvoice' => 
    array (
      'DESCRIPTION' => 'Estimates the invoice for adding a new Linode or NodeBalancer as well as resizing a Linode. This returns two fields: PRICE which is the estimated cost of the invoice, and INVOICE_TO which is the date invoice would be though with timezone set to America/New_York',
      'THROWS' => 'VALIDATION',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'This is the LinodeID you want to resize and is required for mode \'linode_resize\'.',
          'TYPE' => 'numeric',
          'NAME' => 'LinodeID',
        ),
        'PaymentTerm' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Subscription term in months. One of: 1, 12, or 24. This is required for modes \'linode_new\' and \'nodebalancer_new\'.',
          'TYPE' => 'numeric',
          'NAME' => 'PaymentTerm',
        ),
        'PlanID' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans(). This is required for modes \'linode_new\' and \'linode_resize\'.',
          'TYPE' => 'numeric',
          'NAME' => 'PlanID',
        ),
        'mode' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => 'This is one of the following options: \'linode_new\', \'linode_resize\', or \'nodebalancer_new\'.',
          'TYPE' => 'string',
          'NAME' => 'mode',
        ),
      ),
    ),
    'user.getapikey' => 
    array (
      'DESCRIPTION' => 'Authenticates a Linode Manager user against their username, password, and two-factor token (when enabled), and then returns a new API key, which can be used until it expires.  The number of active keys is limited to 20.  Batch requests will be rejected if they include this API action.',
      'THROWS' => 'AUTHFAIL,NEEDTOKEN,PASSWORDEXPIRED,KEYLIMIT,TOTPEXPIRED,NOACCESS',
      'PARAMETERS' => 
      array (
        'username' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'username',
        ),
        'label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'An optional label for this key.',
          'TYPE' => 'string',
          'NAME' => 'label',
        ),
        'password' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'NAME' => 'password',
        ),
        'token' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Required when two-factor authentication is enabled. Emergency scratch codes are not permitted.',
          'TYPE' => 'string',
          'NAME' => 'token',
        ),
        'expires' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Number of hours the key will remain valid, between 0 and 8760. 0 means no expiration. Defaults to 168.',
          'TYPE' => 'numeric',
          'NAME' => 'expires',
        ),
      ),
    ),
    'nodebalancer.node.update' => 
    array (
      'DESCRIPTION' => 'Updates a Node\'s properties',
      'THROWS' => 'NOTFOUND,VALIDATION',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'This backend Node\'s label',
          'TYPE' => 'string',
          'NAME' => 'Label',
        ),
        'Weight' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'Load balancing weight, 1-255. Higher means more connections.',
          'TYPE' => 'numeric',
          'NAME' => 'Weight',
        ),
        'NodeID' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'NodeID',
        ),
        'Address' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The address:port combination used to communicate with this Node',
          'TYPE' => 'string',
          'NAME' => 'Address',
        ),
        'Mode' => 
        array (
          'REQUIRED' => false,
          'DESCRIPTION' => 'The connections mode for this node.  One of \'accept\', \'reject\', or \'drain\'',
          'TYPE' => 'string',
          'NAME' => 'Mode',
        ),
      ),
    ),
    'account.updatecard' => 
    array (
      'DESCRIPTION' => '',
      'THROWS' => '',
      'PARAMETERS' => 
      array (
        'ccNumber' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ccNumber',
        ),
        'ccExpYear' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ccExpYear',
        ),
        'ccExpMonth' => 
        array (
          'REQUIRED' => true,
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'NAME' => 'ccExpMonth',
        ),
      ),
    ),
  ),
);
