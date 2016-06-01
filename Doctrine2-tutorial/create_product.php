<?php
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];
$newProductCategory = $argv[2];
$product = new Products();
$product->setName($newProductName);
$product->setCategory($newProductCategory);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";