<?php

require 'vendor/autoload.php'; // Make sure this path is correct based on your project structure

use Predis\Client;

// Sahil-free-db

// poKchLxtDPfxcpDhnDYPZAB0ftXiXjnO

// 12657

try {
    // Connecting to Redis
    $redis = new Client([
        'scheme' => 'tcp',
        'host'   => 'redis-12657.c100.us-east-1-4.ec2.cloud.redislabs.com', // or 'localhost'
        'port'   => 12657,
        'password' => 'poKchLxtDPfxcpDhnDYPZAB0ftXiXjnO', // No password for localhost by default
    ]);
} catch (Exception $e) {
    throw new Exception('Redis connection error: ' . $e->getMessage());
}

// Now you can use $redis to interact with Redis
