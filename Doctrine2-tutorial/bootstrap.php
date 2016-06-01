<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;require_once "vendor/autoload.php";// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, null, null, false);// database configuration parameters
$conn = array(
   'dbname' => 'dbtest',
   'user' => 'root',
   'password' => '12345',
   'host' => '127.0.0.1',
   'port' => '3306',
   'driver' => 'pdo_mysql'
);// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);