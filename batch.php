<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Linode\Batch;
use Linode\LinodeApi;
use Linode\PaymentTerm;

// Your API key from the Linode profile.
$key = '...';

// Hardcode some IDs to make the example shorter.
// Normally you might want to use "Linode\AvailApi" class functions.
$datacenters = array(2, 3, 4, 6);   // all four US datacenters
$plan        = 1;                   // we will use the cheapest plan

// Create a batch.
$batch = new Batch($key);

// Create new linode on each of US datacenters.
$api = new LinodeApi($batch);

foreach ($datacenters as $datacenter) {
    $api->create($datacenter, $plan, PaymentTerm::ONE_MONTH);
}

// Execute batch.
$results = $batch->execute();

foreach ($results as $res) {
    printf("Linode #%d has been created.\n", $res['DATA']['LinodeID']);
}
