<?php

return array (
  'VERSION' => 3.2999999999999998,
  'METHODS' => 
  array (
    'linode.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of all Linodes user has access or delete to, including some properties.  Status values are -1: Being Created, 0: Brand New, 1: Running, and 2: Powered Off.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'Limits the list to the specified LinodeID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'nodebalancer.node.update' => 
    array (
      'DESCRIPTION' => 'Updates a Node\'s properties',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'This backend Node\'s label',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'NodeID' => 
        array (
          'NAME' => 'NodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Mode' => 
        array (
          'NAME' => 'Mode',
          'DESCRIPTION' => 'The connections mode for this node.  One of \'accept\', \'reject\', or \'drain\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Weight' => 
        array (
          'NAME' => 'Weight',
          'DESCRIPTION' => 'Load balancing weight, 1-255. Higher means more connections.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Address' => 
        array (
          'NAME' => 'Address',
          'DESCRIPTION' => 'The address:port combination used to communicate with this Node',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'domain.update' => 
    array (
      'DESCRIPTION' => 'Update a domain record.',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Description' => 
        array (
          'NAME' => 'Description',
          'DESCRIPTION' => 'Currently undisplayed.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Retry_sec' => 
        array (
          'NAME' => 'Retry_sec',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Expire_sec' => 
        array (
          'NAME' => 'Expire_sec',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'status' => 
        array (
          'NAME' => 'status',
          'DESCRIPTION' => '0, 1, or 2 (disabled, active, edit mode)',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Refresh_sec' => 
        array (
          'NAME' => 'Refresh_sec',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'lpm_displayGroup' => 
        array (
          'NAME' => 'lpm_displayGroup',
          'DESCRIPTION' => 'Display group in the Domain list inside the Linode DNS Manager',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'master_ips' => 
        array (
          'NAME' => 'master_ips',
          'DESCRIPTION' => 'When type=slave, the zone\'s master DNS servers list, semicolon separated ',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'SOA_Email' => 
        array (
          'NAME' => 'SOA_Email',
          'DESCRIPTION' => 'Required when type=master',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'TTL_sec' => 
        array (
          'NAME' => 'TTL_sec',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Domain' => 
        array (
          'NAME' => 'Domain',
          'DESCRIPTION' => 'The zone\'s name',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Type' => 
        array (
          'NAME' => 'Type',
          'DESCRIPTION' => 'master or slave',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'axfr_ips' => 
        array (
          'NAME' => 'axfr_ips',
          'DESCRIPTION' => 'IP addresses allowed to AXFR the entire zone, semicolon separated',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'avail.datacenters' => 
    array (
      'DESCRIPTION' => 'Returns a list of Linode data center facilities.',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => '',
    ),
    'avail.linodeplans' => 
    array (
      'DESCRIPTION' => 'Returns a structure of Linode PlanIDs containing the Plan label and the availability in each Datacenter.',
      'PARAMETERS' => 
      array (
        'PlanID' => 
        array (
          'NAME' => 'PlanID',
          'DESCRIPTION' => 'Limits the list to the specified PlanID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.disk.delete' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'image.update' => 
    array (
      'DESCRIPTION' => 'Update an Image record.',
      'PARAMETERS' => 
      array (
        'label' => 
        array (
          'NAME' => 'label',
          'DESCRIPTION' => 'The label of the Image.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'description' => 
        array (
          'NAME' => 'description',
          'DESCRIPTION' => 'An optional description of the Image.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ImageID' => 
        array (
          'NAME' => 'ImageID',
          'DESCRIPTION' => 'The ID of the Image to modify.',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.webconsoletoken' => 
    array (
      'DESCRIPTION' => 'Generates a console token starting a web console LISH session for the requesting IP',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.create' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'This NodeBalancer\'s label',
          'default' => 'deflabel9000cakemix',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ClientConnThrottle' => 
        array (
          'NAME' => 'ClientConnThrottle',
          'DESCRIPTION' => 'To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'DatacenterID' => 
        array (
          'NAME' => 'DatacenterID',
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new NodeBalancer',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOACCESS,CCFAILED,VALIDATION',
    ),
    'linode.ip.addpublic' => 
    array (
      'DESCRIPTION' => 'Assigns a Public IP to a Linode.  Returns the IPAddressID and IPAddress that was added.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'The LinodeID of the Linode that will be assigned an additional public IP address',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'domain.create' => 
    array (
      'DESCRIPTION' => 'Create a domain record.',
      'PARAMETERS' => 
      array (
        'SOA_Email' => 
        array (
          'NAME' => 'SOA_Email',
          'DESCRIPTION' => 'Required when type=master',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Description' => 
        array (
          'NAME' => 'Description',
          'DESCRIPTION' => 'Currently undisplayed.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'TTL_sec' => 
        array (
          'NAME' => 'TTL_sec',
          'DESCRIPTION' => '',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Retry_sec' => 
        array (
          'NAME' => 'Retry_sec',
          'DESCRIPTION' => '',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Expire_sec' => 
        array (
          'NAME' => 'Expire_sec',
          'DESCRIPTION' => '',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Domain' => 
        array (
          'NAME' => 'Domain',
          'DESCRIPTION' => 'The zone\'s name',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'status' => 
        array (
          'NAME' => 'status',
          'DESCRIPTION' => '0, 1, or 2 (disabled, active, edit mode)',
          'default' => 1,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Type' => 
        array (
          'NAME' => 'Type',
          'DESCRIPTION' => 'master or slave',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'Refresh_sec' => 
        array (
          'NAME' => 'Refresh_sec',
          'DESCRIPTION' => '',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'lpm_displayGroup' => 
        array (
          'NAME' => 'lpm_displayGroup',
          'DESCRIPTION' => 'Display group in the Domain list inside the Linode DNS Manager',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'master_ips' => 
        array (
          'NAME' => 'master_ips',
          'DESCRIPTION' => 'When type=slave, the zone\'s master DNS servers list, semicolon separated ',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'axfr_ips' => 
        array (
          'NAME' => 'axfr_ips',
          'DESCRIPTION' => 'IP addresses allowed to AXFR the entire zone, semicolon separated',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOACCESS,VALIDATION',
    ),
    'account.estimateinvoice' => 
    array (
      'DESCRIPTION' => 'Estimates the invoice for adding a new Linode or NodeBalancer as well as resizing a Linode. This returns two fields: PRICE which is the estimated cost of the invoice, and INVOICE_TO which is the date invoice would be though with timezone set to America/New_York',
      'PARAMETERS' => 
      array (
        'PaymentTerm' => 
        array (
          'NAME' => 'PaymentTerm',
          'DESCRIPTION' => 'Subscription term in months. One of: 1, 12, or 24. This is required for modes \'linode_new\' and \'nodebalancer_new\'.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'mode' => 
        array (
          'NAME' => 'mode',
          'DESCRIPTION' => 'This is one of the following options: \'linode_new\', \'linode_resize\', or \'nodebalancer_new\'.',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'This is the LinodeID you want to resize and is required for mode \'linode_resize\'.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'PlanID' => 
        array (
          'NAME' => 'PlanID',
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans(). This is required for modes \'linode_new\' and \'linode_resize\'.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'VALIDATION',
    ),
    'account.updatecard' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'ccExpMonth' => 
        array (
          'NAME' => 'ccExpMonth',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ccExpYear' => 
        array (
          'NAME' => 'ccExpYear',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ccNumber' => 
        array (
          'NAME' => 'ccNumber',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => '',
    ),
    'stackscript.create' => 
    array (
      'DESCRIPTION' => 'Create a StackScript.',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The Label for this StackScript',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'rev_note' => 
        array (
          'NAME' => 'rev_note',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'script' => 
        array (
          'NAME' => 'script',
          'DESCRIPTION' => 'The actual script',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'isPublic' => 
        array (
          'NAME' => 'isPublic',
          'DESCRIPTION' => 'Whether this StackScript is published in the Library, for everyone to use',
          'default' => false,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Description' => 
        array (
          'NAME' => 'Description',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'DistributionIDList' => 
        array (
          'NAME' => 'DistributionIDList',
          'DESCRIPTION' => 'Comma delimited list of DistributionIDs that this script works on ',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOACCESS,VALIDATION',
    ),
    'linode.disk.update' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The display label for this Disk',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'isReadOnly' => 
        array (
          'NAME' => 'isReadOnly',
          'DESCRIPTION' => 'Enable forced read-only for this Disk',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'domain.resource.delete' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ResourceID' => 
        array (
          'NAME' => 'ResourceID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.disk.imagize' => 
    array (
      'DESCRIPTION' => 'Creates a gold-master image for future deployments',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'Sets the name of the image shown in the base image list, defaults to the source image label',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'Specifies the source Linode to create the image from',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Description' => 
        array (
          'NAME' => 'Description',
          'DESCRIPTION' => 'An optional description of the created image',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => 'Specifies the source Disk to create the image from',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => '',
    ),
    'professionalservices.scope.create' => 
    array (
      'DESCRIPTION' => 'Creates a new Professional Services scope submission',
      'PARAMETERS' => 
      array (
        'linode_plan' => 
        array (
          'NAME' => 'linode_plan',
          'DESCRIPTION' => 'Which Linode plans would you like to deploy?',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'customer_name' => 
        array (
          'NAME' => 'customer_name',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'web_server' => 
        array (
          'NAME' => 'web_server',
          'DESCRIPTION' => 'These provide network protocol handling for hosting websites.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'mail_transfer' => 
        array (
          'NAME' => 'mail_transfer',
          'DESCRIPTION' => 'Mail transfer agents facilitate message transfer between servers',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'server_quantity' => 
        array (
          'NAME' => 'server_quantity',
          'DESCRIPTION' => 'How many separate servers are involved in this migration?',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'provider_access' => 
        array (
          'NAME' => 'provider_access',
          'DESCRIPTION' => 'What types of server access do you have at your current provider?',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'monitoring' => 
        array (
          'NAME' => 'monitoring',
          'DESCRIPTION' => 'Constant monitoring of your deployed systems--these can also provide automatic notifications for service failures.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'web_cache' => 
        array (
          'NAME' => 'web_cache',
          'DESCRIPTION' => 'Caching mechanisms provide temporary storage for web requests--cached content can generally be retrieved faster.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'database_server' => 
        array (
          'NAME' => 'database_server',
          'DESCRIPTION' => 'Generally used by applications to provide an organized way to capture and manipulate data',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'mail_filtering' => 
        array (
          'NAME' => 'mail_filtering',
          'DESCRIPTION' => 'Services here manipulate recieved messages in various ways',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'notes' => 
        array (
          'NAME' => 'notes',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ticket_number' => 
        array (
          'NAME' => 'ticket_number',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'content_management' => 
        array (
          'NAME' => 'content_management',
          'DESCRIPTION' => 'Centralized interfaces for editing, organizing, and publishing content',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'linode_datacenter' => 
        array (
          'NAME' => 'linode_datacenter',
          'DESCRIPTION' => 'Which datacenters would you like your Linodes to be deployed in?',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'mail_retrieval' => 
        array (
          'NAME' => 'mail_retrieval',
          'DESCRIPTION' => 'User mail clients connect to these to retrieve delivered mail',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'system_administration' => 
        array (
          'NAME' => 'system_administration',
          'DESCRIPTION' => 'Various web interfaces for performing system administration tasks',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'requested_service' => 
        array (
          'NAME' => 'requested_service',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'crossover' => 
        array (
          'NAME' => 'crossover',
          'DESCRIPTION' => 'These can assist in providing reliable crossover--failures of individual components can be transparent to the application.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'phone_number' => 
        array (
          'NAME' => 'phone_number',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'application_quantity' => 
        array (
          'NAME' => 'application_quantity',
          'DESCRIPTION' => 'How many separate applications or websites are involved in this migration?',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'managed' => 
        array (
          'NAME' => 'managed',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'webmail' => 
        array (
          'NAME' => 'webmail',
          'DESCRIPTION' => 'Access and administrate mail via web interfaces',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'current_provider' => 
        array (
          'NAME' => 'current_provider',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'email_address' => 
        array (
          'NAME' => 'email_address',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'replication' => 
        array (
          'NAME' => 'replication',
          'DESCRIPTION' => 'Redundant services often have shared state--replication automatically propagates state changes between individual components.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.disk.createfromimage' => 
    array (
      'DESCRIPTION' => 'Creates a new disk from a previously imagized disk.',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'rootSSHKey' => 
        array (
          'NAME' => 'rootSSHKey',
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys upon image deployment',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'size' => 
        array (
          'NAME' => 'size',
          'DESCRIPTION' => 'The size of the disk image to creates. Defaults to the minimum size required for the requested image',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'Specifies the Linode to deploy on to',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'rootPass' => 
        array (
          'NAME' => 'rootPass',
          'DESCRIPTION' => 'Optionally sets the root password at deployment time. If a password is not provided the existing root password of the frozen image will not be modified',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ImageID' => 
        array (
          'NAME' => 'ImageID',
          'DESCRIPTION' => 'The ID of the frozen image to deploy from',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => '',
    ),
    'nodebalancer.delete' => 
    array (
      'DESCRIPTION' => 'Immediately removes a NodeBalancer from your account and issues a pro-rated credit back to your account, if applicable.',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => 'The NodeBalancerID to delete',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.create' => 
    array (
      'DESCRIPTION' => 'Creates a Linode and assigns you full privileges. There is a 75-linodes-per-hour limiter.',
      'PARAMETERS' => 
      array (
        'PlanID' => 
        array (
          'NAME' => 'PlanID',
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DatacenterID' => 
        array (
          'NAME' => 'DatacenterID',
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new Linode',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'PaymentTerm' => 
        array (
          'NAME' => 'PaymentTerm',
          'DESCRIPTION' => 'Subscription term in months for prepaid customers.  One of: 1, 12, or 24',
          'default' => 1,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOACCESS,CCFAILED,VALIDATION,LINODELIMITER,ACCOUNTLIMIT',
    ),
    'stackscript.delete' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'StackScriptID' => 
        array (
          'NAME' => 'StackScriptID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.disk.create' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'isReadOnly' => 
        array (
          'NAME' => 'isReadOnly',
          'DESCRIPTION' => 'Enable forced read-only for this Disk',
          'default' => false,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'rootPass' => 
        array (
          'NAME' => 'rootPass',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The display label for this Disk',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'rootSSHKey' => 
        array (
          'NAME' => 'rootSSHKey',
          'DESCRIPTION' => '',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'FromDistributionID' => 
        array (
          'NAME' => 'FromDistributionID',
          'DESCRIPTION' => '',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Size' => 
        array (
          'NAME' => 'Size',
          'DESCRIPTION' => 'The size in MB of this Disk.',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Type' => 
        array (
          'NAME' => 'Type',
          'DESCRIPTION' => 'The formatted type of this disk.  Valid types are: ext3, ext4, swap, raw',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.disk.createfromstackscript' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'StackScriptUDFResponses' => 
        array (
          'NAME' => 'StackScriptUDFResponses',
          'DESCRIPTION' => 'JSON encoded name/value pairs, answering this StackScript\'s User Defined Fields',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'DistributionID' => 
        array (
          'NAME' => 'DistributionID',
          'DESCRIPTION' => 'Which Distribution to apply this StackScript to.  Must be one from the script\'s DistributionIDList',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'rootPass' => 
        array (
          'NAME' => 'rootPass',
          'DESCRIPTION' => 'The root user\'s password',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'rootSSHKey' => 
        array (
          'NAME' => 'rootSSHKey',
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys upon distribution configuration.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'Size' => 
        array (
          'NAME' => 'Size',
          'DESCRIPTION' => 'Size of this disk image in MB',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'StackScriptID' => 
        array (
          'NAME' => 'StackScriptID',
          'DESCRIPTION' => 'The StackScript to create this image from',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.ip.setrdns' => 
    array (
      'DESCRIPTION' => 'Sets the rDNS name of a Public IP.  Returns the IPAddressID and IPAddress that were updated.',
      'PARAMETERS' => 
      array (
        'IPAddressID' => 
        array (
          'NAME' => 'IPAddressID',
          'DESCRIPTION' => 'The IPAddressID of the address to update',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Hostname' => 
        array (
          'NAME' => 'Hostname',
          'DESCRIPTION' => 'The hostname to set the reverse DNS to',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.update' => 
    array (
      'DESCRIPTION' => 'Updates a Linode\'s properties.',
      'PARAMETERS' => 
      array (
        'Alert_cpu_enabled' => 
        array (
          'NAME' => 'Alert_cpu_enabled',
          'DESCRIPTION' => 'Enable the cpu usage email alert',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'ms_ssh_user' => 
        array (
          'NAME' => 'ms_ssh_user',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Alert_bwin_enabled' => 
        array (
          'NAME' => 'Alert_bwin_enabled',
          'DESCRIPTION' => 'Enable the incoming bandwidth email alert',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Alert_cpu_threshold' => 
        array (
          'NAME' => 'Alert_cpu_threshold',
          'DESCRIPTION' => 'CPU Alert threshold, percentage 0-800',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Alert_bwquota_enabled' => 
        array (
          'NAME' => 'Alert_bwquota_enabled',
          'DESCRIPTION' => 'Enable the bw quote email alert',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Alert_diskio_threshold' => 
        array (
          'NAME' => 'Alert_diskio_threshold',
          'DESCRIPTION' => 'IO ops/sec',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'This Linode\'s label',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'backupWindow' => 
        array (
          'NAME' => 'backupWindow',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'backupWeeklyDay' => 
        array (
          'NAME' => 'backupWeeklyDay',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'watchdog' => 
        array (
          'NAME' => 'watchdog',
          'DESCRIPTION' => 'Enable the Lassie shutdown watchdog',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Alert_diskio_enabled' => 
        array (
          'NAME' => 'Alert_diskio_enabled',
          'DESCRIPTION' => 'Enable the disk IO email alert',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'lpm_displayGroup' => 
        array (
          'NAME' => 'lpm_displayGroup',
          'DESCRIPTION' => 'Display group in the Linode list inside the Linode Manager',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ms_ssh_port' => 
        array (
          'NAME' => 'ms_ssh_port',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'ms_ssh_disabled' => 
        array (
          'NAME' => 'ms_ssh_disabled',
          'DESCRIPTION' => '',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Alert_bwquota_threshold' => 
        array (
          'NAME' => 'Alert_bwquota_threshold',
          'DESCRIPTION' => 'Percentage of monthly bw quota',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'ms_ssh_ip' => 
        array (
          'NAME' => 'ms_ssh_ip',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Alert_bwin_threshold' => 
        array (
          'NAME' => 'Alert_bwin_threshold',
          'DESCRIPTION' => 'Mb/sec',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Alert_bwout_threshold' => 
        array (
          'NAME' => 'Alert_bwout_threshold',
          'DESCRIPTION' => 'Mb/sec',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Alert_bwout_enabled' => 
        array (
          'NAME' => 'Alert_bwout_enabled',
          'DESCRIPTION' => 'Enable the outgoing bandwidth email alert',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.config.create' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'Stickiness' => 
        array (
          'NAME' => 'Stickiness',
          'DESCRIPTION' => 'Session persistence.  One of \'none\', \'table\', \'http_cookie\'',
          'default' => 'table',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_path' => 
        array (
          'NAME' => 'check_path',
          'DESCRIPTION' => 'When check=http, the path to request',
          'default' => '/',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_body' => 
        array (
          'NAME' => 'check_body',
          'DESCRIPTION' => 'When check=http, a regex to match within the first 16,384 bytes of the response body',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_interval' => 
        array (
          'NAME' => 'check_interval',
          'DESCRIPTION' => 'Seconds between health check probes.  2-3600',
          'default' => 5,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'cipher_suite' => 
        array (
          'NAME' => 'cipher_suite',
          'DESCRIPTION' => 'SSL cipher suite to enforce. One of \'recommended\', \'legacy\'',
          'default' => 'recommended',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Algorithm' => 
        array (
          'NAME' => 'Algorithm',
          'DESCRIPTION' => 'Balancing algorithm.  One of \'roundrobin\', \'leastconn\', \'source\'',
          'default' => 'roundrobin',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => 'The parent NodeBalancer\'s ID',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'check_attempts' => 
        array (
          'NAME' => 'check_attempts',
          'DESCRIPTION' => 'Number of failed probes before taking a node out of rotation. 1-30',
          'default' => 2,
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Port' => 
        array (
          'NAME' => 'Port',
          'DESCRIPTION' => 'Port to bind to on the public interfaces. 1-65534',
          'default' => 80,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'check' => 
        array (
          'NAME' => 'check',
          'DESCRIPTION' => 'Perform active health checks on the backend nodes.  One of \'connection\', \'http\', \'http_body\'',
          'default' => 'connection',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_passive' => 
        array (
          'NAME' => 'check_passive',
          'DESCRIPTION' => 'Enable passive checks based on observing communication with back-end nodes.',
          'default' => 1,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'ssl_key' => 
        array (
          'NAME' => 'ssl_key',
          'DESCRIPTION' => 'Unpassphrased private key for the SSL certificate when protocol is \'https\'',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Protocol' => 
        array (
          'NAME' => 'Protocol',
          'DESCRIPTION' => 'Either \'tcp\', \'http\', or \'https\'',
          'default' => 'http',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_timeout' => 
        array (
          'NAME' => 'check_timeout',
          'DESCRIPTION' => 'Seconds to wait before considering the probe a failure. 1-30.  Must be less than check_interval.',
          'default' => 3,
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ssl_cert' => 
        array (
          'NAME' => 'ssl_cert',
          'DESCRIPTION' => 'SSL certificate served by the NodeBalancer when the protocol is \'https\'',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.ip.list' => 
    array (
      'DESCRIPTION' => 'Returns the IP addresses of all Linodes you have access to.',
      'PARAMETERS' => 
      array (
        'IPAddressID' => 
        array (
          'NAME' => 'IPAddressID',
          'DESCRIPTION' => 'If specified, limits the result to this IPAddressID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'If specified, limits the result to this LinodeID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'avail.stackscripts' => 
    array (
      'DESCRIPTION' => 'Returns a list of available public StackScripts.',
      'PARAMETERS' => 
      array (
        'DistributionID' => 
        array (
          'NAME' => 'DistributionID',
          'DESCRIPTION' => 'Limit the results to StackScripts that can be applied to this DistributionID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'keywords' => 
        array (
          'NAME' => 'keywords',
          'DESCRIPTION' => 'Search terms',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'DistributionVendor' => 
        array (
          'NAME' => 'DistributionVendor',
          'DESCRIPTION' => 'Debian, Ubuntu, Fedora, etc.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'api.spec' => 
    array (
      'DESCRIPTION' => 'Returns a data structure of the entire Linode API specification.  This method does not require authorization.<br><br>For example: <a target="_blank" href="https://api.linode.com/?api_action=api.spec">https://api.linode.com/?api_action=api.spec</a>',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => '',
    ),
    'image.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a gold-master image',
      'PARAMETERS' => 
      array (
        'ImageID' => 
        array (
          'NAME' => 'ImageID',
          'DESCRIPTION' => 'The ID of the gold-master image to delete',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.disk.list' => 
    array (
      'DESCRIPTION' => 'Status values are 1: Ready and 2: Being Deleted.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.clone' => 
    array (
      'DESCRIPTION' => 'Creates a new Linode, assigns you full privileges, and then clones the specified LinodeID to the new Linode. There is a limit of 5 active clone operations per source Linode.  It is recommended that the source Linode be powered down during the clone.',
      'PARAMETERS' => 
      array (
        'PaymentTerm' => 
        array (
          'NAME' => 'PaymentTerm',
          'DESCRIPTION' => 'Subscription term in months for prepaid customers.  One of: 1, 12, or 24',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'DatacenterID' => 
        array (
          'NAME' => 'DatacenterID',
          'DESCRIPTION' => 'The DatacenterID from avail.datacenters() where you wish to place this new Linode',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'The LinodeID that you want cloned',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'PlanID' => 
        array (
          'NAME' => 'PlanID',
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOACCESS,NOTFOUND,CCFAILED,VALIDATION,LINODELIMITER,ACCOUNTLIMIT',
    ),
    'user.getapikey' => 
    array (
      'DESCRIPTION' => 'Authenticates a Linode Manager user against their username, password, and two-factor token (when enabled), and then returns a new API key, which can be used until it expires.  The number of active keys is limited to 20.  Batch requests will be rejected if they include this API action.',
      'PARAMETERS' => 
      array (
        'label' => 
        array (
          'NAME' => 'label',
          'DESCRIPTION' => 'An optional label for this key.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'expires' => 
        array (
          'NAME' => 'expires',
          'DESCRIPTION' => 'Number of hours the key will remain valid, between 0 and 8760. 0 means no expiration. Defaults to 168.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'username' => 
        array (
          'NAME' => 'username',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'password' => 
        array (
          'NAME' => 'password',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'token' => 
        array (
          'NAME' => 'token',
          'DESCRIPTION' => 'Required when two-factor authentication is enabled.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'AUTHFAIL,NEEDTOKEN,PASSWORDEXPIRED,KEYLIMIT',
    ),
    'linode.delete' => 
    array (
      'DESCRIPTION' => 'Immediately removes a Linode from your account and issues a pro-rated credit back to your account, if applicable.  To prevent accidental deletes, this requires the Linode has no Disk images.  You must first delete its disk images."',
      'PARAMETERS' => 
      array (
        'skipChecks' => 
        array (
          'NAME' => 'skipChecks',
          'DESCRIPTION' => 'Skips the safety checks and will always delete the Linode',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => 'The LinodeID to delete',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,LINODENOTEMPTY',
    ),
    'domain.resource.list' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ResourceID' => 
        array (
          'NAME' => 'ResourceID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'nodebalancer.config.update' => 
    array (
      'DESCRIPTION' => 'Updates a Config\'s properties',
      'PARAMETERS' => 
      array (
        'Stickiness' => 
        array (
          'NAME' => 'Stickiness',
          'DESCRIPTION' => 'Session persistence.  One of \'none\', \'table\', \'http_cookie\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_path' => 
        array (
          'NAME' => 'check_path',
          'DESCRIPTION' => 'When check=http, the path to request',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Port' => 
        array (
          'NAME' => 'Port',
          'DESCRIPTION' => 'Port to bind to on the public interfaces. 1-65534',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'check_body' => 
        array (
          'NAME' => 'check_body',
          'DESCRIPTION' => 'When check=http, a regex to match within the first 16,384 bytes of the response body',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check' => 
        array (
          'NAME' => 'check',
          'DESCRIPTION' => 'Perform active health checks on the backend nodes.  One of \'connection\', \'http\', \'http_body\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_interval' => 
        array (
          'NAME' => 'check_interval',
          'DESCRIPTION' => 'Seconds between health check probes.  2-3600',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'check_passive' => 
        array (
          'NAME' => 'check_passive',
          'DESCRIPTION' => 'Enable passive checks based on observing communication with back-end nodes.',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'ssl_key' => 
        array (
          'NAME' => 'ssl_key',
          'DESCRIPTION' => 'Unpassphrased private key for the SSL certificate when protocol is \'https\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'cipher_suite' => 
        array (
          'NAME' => 'cipher_suite',
          'DESCRIPTION' => 'SSL cipher suite to enforce. One of \'recommended\', \'legacy\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Protocol' => 
        array (
          'NAME' => 'Protocol',
          'DESCRIPTION' => 'Either \'tcp\', \'http\', or \'https\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Algorithm' => 
        array (
          'NAME' => 'Algorithm',
          'DESCRIPTION' => 'Balancing algorithm.  One of \'roundrobin\', \'leastconn\', \'source\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_timeout' => 
        array (
          'NAME' => 'check_timeout',
          'DESCRIPTION' => 'Seconds to wait before considering the probe a failure. 1-30.  Must be less than check_interval.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'check_attempts' => 
        array (
          'NAME' => 'check_attempts',
          'DESCRIPTION' => 'Number of failed probes before taking a node out of rotation. 1-30',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ssl_cert' => 
        array (
          'NAME' => 'ssl_cert',
          'DESCRIPTION' => 'SSL certificate served by the NodeBalancer when the protocol is \'https\'',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.reboot' => 
    array (
      'DESCRIPTION' => 'Issues a shutdown, and then boot job for a given LinodeID.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.config.list' => 
    array (
      'DESCRIPTION' => 'Lists a Linode\'s Configuration Profiles.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.disk.createfromdistribution' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The label of this new disk image',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'rootSSHKey' => 
        array (
          'NAME' => 'rootSSHKey',
          'DESCRIPTION' => 'Optionally sets this string into /root/.ssh/authorized_keys upon distribution configuration.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Size' => 
        array (
          'NAME' => 'Size',
          'DESCRIPTION' => 'Size of this disk image in MB',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DistributionID' => 
        array (
          'NAME' => 'DistributionID',
          'DESCRIPTION' => 'The DistributionID to create this disk from.  Found in avail.distributions()',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'rootPass' => 
        array (
          'NAME' => 'rootPass',
          'DESCRIPTION' => 'The root user\'s password',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.resize' => 
    array (
      'DESCRIPTION' => 'Resizes a Linode from one plan to another.  Immediately shuts the Linode down, charges/credits the account, and issue a migration to another host server.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'PlanID' => 
        array (
          'NAME' => 'PlanID',
          'DESCRIPTION' => 'The desired PlanID available from avail.LinodePlans()',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,CCFAILED,VALIDATION',
    ),
    'nodebalancer.node.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of Nodes associated with a NodeBalancer Config',
      'PARAMETERS' => 
      array (
        'NodeID' => 
        array (
          'NAME' => 'NodeID',
          'DESCRIPTION' => 'Limits the list to the specified NodeID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.job.list' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'JobID' => 
        array (
          'NAME' => 'JobID',
          'DESCRIPTION' => 'Limits the list to the specified JobID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'pendingOnly' => 
        array (
          'NAME' => 'pendingOnly',
          'DESCRIPTION' => '',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'domain.list' => 
    array (
      'DESCRIPTION' => 'Lists domains you have access to.',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => 'Limits the list to the specified DomainID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'domain.resource.create' => 
    array (
      'DESCRIPTION' => 'Create a domain record.',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Port' => 
        array (
          'NAME' => 'Port',
          'DESCRIPTION' => '',
          'default' => 80,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Name' => 
        array (
          'NAME' => 'Name',
          'DESCRIPTION' => 'The hostname or FQDN.  When Type=MX the subdomain to delegate to the Target MX server.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Weight' => 
        array (
          'NAME' => 'Weight',
          'DESCRIPTION' => '',
          'default' => 5,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Target' => 
        array (
          'NAME' => 'Target',
          'DESCRIPTION' => 'When Type=MX the hostname.  When Type=CNAME the target of the alias.  When Type=TXT the value of the record. When Type=A or AAAA the token of \'[remote_addr]\' will be substituted with the IP address of the request.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Priority' => 
        array (
          'NAME' => 'Priority',
          'DESCRIPTION' => 'Priority for MX and SRV records, 0-255',
          'default' => 10,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'TTL_sec' => 
        array (
          'NAME' => 'TTL_sec',
          'DESCRIPTION' => 'TTL.  Leave as 0 to accept our default.',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Protocol' => 
        array (
          'NAME' => 'Protocol',
          'DESCRIPTION' => 'The protocol to append to an SRV record.  Ignored on other record types.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Type' => 
        array (
          'NAME' => 'Type',
          'DESCRIPTION' => 'One of: NS, MX, A, AAAA, CNAME, TXT, or SRV',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOACCESS,VALIDATION',
    ),
    'linode.config.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a Linode Configuration Profile.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.config.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a NodeBalancer\'s Config',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => 'The ConfigID to delete',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'avail.nodebalancers' => 
    array (
      'DESCRIPTION' => 'Returns NodeBalancer pricing information.',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => '',
    ),
    'linode.ip.swap' => 
    array (
      'DESCRIPTION' => 'Exchanges Public IP addresses between two Linodes within a Datacenter.  The destination of the IP Address can be designated by either the toLinodeID or withIPAddressID parameter.  Returns the resulting relationship of the Linode and IP Address parameters.  When performing a one directional swap, the source is represented by the first of the two resultant array members.',
      'PARAMETERS' => 
      array (
        'toLinodeID' => 
        array (
          'NAME' => 'toLinodeID',
          'DESCRIPTION' => 'The LinodeID of the Linode where IPAddressID will be transfered',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'IPAddressID' => 
        array (
          'NAME' => 'IPAddressID',
          'DESCRIPTION' => 'The IPAddressID of an IP Address to transfer or swap',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'withIPAddressID' => 
        array (
          'NAME' => 'withIPAddressID',
          'DESCRIPTION' => 'The IP Address ID to swap',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.boot' => 
    array (
      'DESCRIPTION' => 'Issues a boot job for the provided ConfigID.  If no ConfigID is provided boots the last used configuration profile, or the first configuration profile if this Linode has never been booted.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => 'The ConfigID to boot, available from linode.config.list().',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'avail.distributions' => 
    array (
      'DESCRIPTION' => 'Returns a list of available Linux Distributions.',
      'PARAMETERS' => 
      array (
        'DistributionID' => 
        array (
          'NAME' => 'DistributionID',
          'DESCRIPTION' => 'Limits the results to the specified DistributionID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.disk.duplicate' => 
    array (
      'DESCRIPTION' => 'Performs a bit-for-bit copy of a disk image.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'avail.kernels' => 
    array (
      'DESCRIPTION' => 'List available kernels.',
      'PARAMETERS' => 
      array (
        'isXen' => 
        array (
          'NAME' => 'isXen',
          'DESCRIPTION' => 'Show or hide Xen compatible kernels',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'isKVM' => 
        array (
          'NAME' => 'isKVM',
          'DESCRIPTION' => 'Show or hide KVM compatible kernels',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'stackscript.update' => 
    array (
      'DESCRIPTION' => 'Update a StackScript.',
      'PARAMETERS' => 
      array (
        'rev_note' => 
        array (
          'NAME' => 'rev_note',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'script' => 
        array (
          'NAME' => 'script',
          'DESCRIPTION' => 'The actual script',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'DistributionIDList' => 
        array (
          'NAME' => 'DistributionIDList',
          'DESCRIPTION' => 'Comma delimited list of DistributionIDs that this script works on ',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Description' => 
        array (
          'NAME' => 'Description',
          'DESCRIPTION' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The Label for this StackScript',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'StackScriptID' => 
        array (
          'NAME' => 'StackScriptID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'isPublic' => 
        array (
          'NAME' => 'isPublic',
          'DESCRIPTION' => 'Whether this StackScript is published in the Library, for everyone to use',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.node.create' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'This backend Node\'s label',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => 'The parent ConfigID to attach this Node to',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Mode' => 
        array (
          'NAME' => 'Mode',
          'DESCRIPTION' => 'The connections mode for this node.  One of \'accept\', \'reject\', or \'drain\'',
          'default' => 'accept',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Weight' => 
        array (
          'NAME' => 'Weight',
          'DESCRIPTION' => 'Load balancing weight, 1-255. Higher means more connections.',
          'default' => 100,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Address' => 
        array (
          'NAME' => 'Address',
          'DESCRIPTION' => 'The address:port combination used to communicate with this Node',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'account.info' => 
    array (
      'DESCRIPTION' => 'Shows information about your account such as the date your account was opened as well as your network utilization for the current month in gigabytes.',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => '',
    ),
    'linode.ip.addprivate' => 
    array (
      'DESCRIPTION' => 'Assigns a Private IP to a Linode.  Returns the IPAddressID that was added.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'linode.disk.resize' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'size' => 
        array (
          'NAME' => 'size',
          'DESCRIPTION' => 'The requested new size of this Disk in MB',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'DiskID' => 
        array (
          'NAME' => 'DiskID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.mutate' => 
    array (
      'DESCRIPTION' => 'Upgrades a Linode to its next generation.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.update' => 
    array (
      'DESCRIPTION' => 'Updates a NodeBalancer\'s properties',
      'PARAMETERS' => 
      array (
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'This NodeBalancer\'s label',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'ClientConnThrottle' => 
        array (
          'NAME' => 'ClientConnThrottle',
          'DESCRIPTION' => 'To help mitigate abuse, throttle connections per second, per client IP. 0 to disable. Max of 20.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'nodebalancer.config.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of NodeBalancers this user has access or delete to, including their properties',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => 'Limits the list to the specified ConfigID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'linode.config.update' => 
    array (
      'DESCRIPTION' => 'Updates a Linode Configuration Profile.',
      'PARAMETERS' => 
      array (
        'RootDeviceCustom' => 
        array (
          'NAME' => 'RootDeviceCustom',
          'DESCRIPTION' => 'A custom root device setting.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Comments' => 
        array (
          'NAME' => 'Comments',
          'DESCRIPTION' => 'Comments you wish to save along with this profile',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'helper_distro' => 
        array (
          'NAME' => 'helper_distro',
          'DESCRIPTION' => 'Enable the Distro filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you\'re booting.  You want this.',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'devtmpfs_automount' => 
        array (
          'NAME' => 'devtmpfs_automount',
          'DESCRIPTION' => 'Controls if pv_ops kernels should automount devtmpfs at boot. ',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The Label for this profile',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'helper_disableUpdateDB' => 
        array (
          'NAME' => 'helper_disableUpdateDB',
          'DESCRIPTION' => 'Enable the disableUpdateDB filesystem helper',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'ConfigID' => 
        array (
          'NAME' => 'ConfigID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'helper_network' => 
        array (
          'NAME' => 'helper_network',
          'DESCRIPTION' => 'Automatically creates network configuration files for your distro and places them into your filesystem.',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'DiskList' => 
        array (
          'NAME' => 'DiskList',
          'DESCRIPTION' => 'A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'RootDeviceRO' => 
        array (
          'NAME' => 'RootDeviceRO',
          'DESCRIPTION' => 'Enables the \'ro\' kernel flag.  Modern distros want this. ',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'RunLevel' => 
        array (
          'NAME' => 'RunLevel',
          'DESCRIPTION' => 'One of \'default\', \'single\', \'binbash\' ',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'RootDeviceNum' => 
        array (
          'NAME' => 'RootDeviceNum',
          'DESCRIPTION' => 'Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'helper_xen' => 
        array (
          'NAME' => 'helper_xen',
          'DESCRIPTION' => 'Deprecated - use helper_distro.',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'RAMLimit' => 
        array (
          'NAME' => 'RAMLimit',
          'DESCRIPTION' => 'RAMLimit in MB.  0 for max.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'virt_mode' => 
        array (
          'NAME' => 'virt_mode',
          'DESCRIPTION' => 'Controls the virtualization mode. One of \'paravirt\', \'fullvirt\' ',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'KernelID' => 
        array (
          'NAME' => 'KernelID',
          'DESCRIPTION' => 'The KernelID for this profile.  Found in avail.kernels()',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'helper_depmod' => 
        array (
          'NAME' => 'helper_depmod',
          'DESCRIPTION' => 'Creates an empty modprobe file for the kernel you\'re booting. ',
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.shutdown' => 
    array (
      'DESCRIPTION' => 'Issues a shutdown job for a given LinodeID.',
      'PARAMETERS' => 
      array (
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'domain.delete' => 
    array (
      'DESCRIPTION' => '',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'image.list' => 
    array (
      'DESCRIPTION' => 'Lists available gold-master images',
      'PARAMETERS' => 
      array (
        'ImageID' => 
        array (
          'NAME' => 'ImageID',
          'DESCRIPTION' => 'Request information for a specific gold-master image',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'pending' => 
        array (
          'NAME' => 'pending',
          'DESCRIPTION' => 'Show images currently being created.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'account.paybalance' => 
    array (
      'DESCRIPTION' => 'Pays current balance on file, returning it in the response.',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => 'CCEXPIRED,CCFAILED,NOACCESS,PAYMENTLIMITER,VALIDATION',
    ),
    'nodebalancer.node.delete' => 
    array (
      'DESCRIPTION' => 'Deletes a Node from a NodeBalancer Config',
      'PARAMETERS' => 
      array (
        'NodeID' => 
        array (
          'NAME' => 'NodeID',
          'DESCRIPTION' => 'The NodeID to delete',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
      ),
      'THROWS' => 'NOTFOUND',
    ),
    'nodebalancer.list' => 
    array (
      'DESCRIPTION' => 'Returns a list of NodeBalancers this user has access or delete to, including their properties',
      'PARAMETERS' => 
      array (
        'NodeBalancerID' => 
        array (
          'NAME' => 'NodeBalancerID',
          'DESCRIPTION' => 'Limits the list to the specified NodeBalancerID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'test.echo' => 
    array (
      'DESCRIPTION' => 'Echos back parameters that were passed in.',
      'PARAMETERS' => 
      array (
      ),
      'THROWS' => '',
    ),
    'stackscript.list' => 
    array (
      'DESCRIPTION' => 'Lists StackScripts you have access to.',
      'PARAMETERS' => 
      array (
        'StackScriptID' => 
        array (
          'NAME' => 'StackScriptID',
          'DESCRIPTION' => 'Limits the list to the specified StackScriptID',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => '',
    ),
    'domain.resource.update' => 
    array (
      'DESCRIPTION' => 'Update a domain record.',
      'PARAMETERS' => 
      array (
        'DomainID' => 
        array (
          'NAME' => 'DomainID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Port' => 
        array (
          'NAME' => 'Port',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'ResourceID' => 
        array (
          'NAME' => 'ResourceID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'Name' => 
        array (
          'NAME' => 'Name',
          'DESCRIPTION' => 'The hostname or FQDN.  When Type=MX the subdomain to delegate to the Target MX server.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Weight' => 
        array (
          'NAME' => 'Weight',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Target' => 
        array (
          'NAME' => 'Target',
          'DESCRIPTION' => 'When Type=MX the hostname.  When Type=CNAME the target of the alias.  When Type=TXT the value of the record. When Type=A or AAAA the token of \'[remote_addr]\' will be substituted with the IP address of the request.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Priority' => 
        array (
          'NAME' => 'Priority',
          'DESCRIPTION' => 'Priority for MX and SRV records, 0-255',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'TTL_sec' => 
        array (
          'NAME' => 'TTL_sec',
          'DESCRIPTION' => 'TTL.  Leave as 0 to accept our default.',
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'Protocol' => 
        array (
          'NAME' => 'Protocol',
          'DESCRIPTION' => 'The protocol to append to an SRV record.  Ignored on other record types.',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
    'linode.config.create' => 
    array (
      'DESCRIPTION' => 'Creates a Linode Configuration Profile.',
      'PARAMETERS' => 
      array (
        'RootDeviceCustom' => 
        array (
          'NAME' => 'RootDeviceCustom',
          'DESCRIPTION' => 'A custom root device setting.',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'Comments' => 
        array (
          'NAME' => 'Comments',
          'DESCRIPTION' => 'Comments you wish to save along with this profile',
          'default' => '',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'helper_distro' => 
        array (
          'NAME' => 'helper_distro',
          'DESCRIPTION' => 'Enable the Distro filesystem helper.  Corrects fstab and inittab/upstart entries depending on the kernel you\'re booting.  You want this.',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'devtmpfs_automount' => 
        array (
          'NAME' => 'devtmpfs_automount',
          'DESCRIPTION' => 'Controls if pv_ops kernels should automount devtmpfs at boot. ',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'helper_disableUpdateDB' => 
        array (
          'NAME' => 'helper_disableUpdateDB',
          'DESCRIPTION' => 'Enable the disableUpdateDB filesystem helper',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'Label' => 
        array (
          'NAME' => 'Label',
          'DESCRIPTION' => 'The Label for this profile',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'helper_network' => 
        array (
          'NAME' => 'helper_network',
          'DESCRIPTION' => 'Automatically creates network configuration files for your distro and places them into your filesystem.',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'DiskList' => 
        array (
          'NAME' => 'DiskList',
          'DESCRIPTION' => 'A comma delimited list of DiskIDs; position reflects device node.  The 9th element for specifying the initrd.',
          'TYPE' => 'string',
          'REQUIRED' => true,
        ),
        'RootDeviceRO' => 
        array (
          'NAME' => 'RootDeviceRO',
          'DESCRIPTION' => 'Enables the \'ro\' kernel flag.  Modern distros want this. ',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'RunLevel' => 
        array (
          'NAME' => 'RunLevel',
          'DESCRIPTION' => 'One of \'default\', \'single\', \'binbash\' ',
          'default' => 'default',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'RootDeviceNum' => 
        array (
          'NAME' => 'RootDeviceNum',
          'DESCRIPTION' => 'Which device number (1-8) that contains the root partition.  0 to utilize RootDeviceCustom.',
          'default' => 1,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'helper_xen' => 
        array (
          'NAME' => 'helper_xen',
          'DESCRIPTION' => 'Deprecated - use helper_distro.',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
        'RAMLimit' => 
        array (
          'NAME' => 'RAMLimit',
          'DESCRIPTION' => 'RAMLimit in MB.  0 for max.',
          'default' => 0,
          'TYPE' => 'numeric',
          'REQUIRED' => false,
        ),
        'virt_mode' => 
        array (
          'NAME' => 'virt_mode',
          'DESCRIPTION' => 'Controls the virtualization mode. One of \'paravirt\', \'fullvirt\' ',
          'default' => 'paravirt',
          'TYPE' => 'string',
          'REQUIRED' => false,
        ),
        'LinodeID' => 
        array (
          'NAME' => 'LinodeID',
          'DESCRIPTION' => '',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'KernelID' => 
        array (
          'NAME' => 'KernelID',
          'DESCRIPTION' => 'The KernelID for this profile.  Found in avail.kernels()',
          'TYPE' => 'numeric',
          'REQUIRED' => true,
        ),
        'helper_depmod' => 
        array (
          'NAME' => 'helper_depmod',
          'DESCRIPTION' => 'Creates an empty modprobe file for the kernel you\'re booting. ',
          'default' => true,
          'TYPE' => 'boolean',
          'REQUIRED' => false,
        ),
      ),
      'THROWS' => 'NOTFOUND,VALIDATION',
    ),
  ),
);
