<?php

use App\Db\dbConnection;
use App\Books\BookFactory;

require_once 'vendor/autoload.php';

echo "Singleton example:\n";
$dbInstance = dbConnection::getInstance();
$conn = $dbInstance->getConnection();
echo $conn."\n\n";

echo "Factory example:\n";
$book01 = BookFactory::create('The Lord of the Rings', 'J. R. R. Tolkien');
$book02 = BookFactory::create('1984', 'George Orwell');
echo $book01->getNameAndAuthor();
echo $book02->getNameAndAuthor();
