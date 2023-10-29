<?php
require 'vendor/autoload.php';


try {
    // Create MongoDB client
    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
    $mongoDatabaseName = 'mydb';
    $collection = 'users';
    // Select the database and collection
    $mongoDatabase = $mongoClient->selectDatabase($mongoDatabaseName);
    $mongoCollection = $mongoDatabase->selectCollection($collection);

} 
 catch (Exception $e) {
    echo "An error occurred. Error: " . $e->getMessage();
}
?>
