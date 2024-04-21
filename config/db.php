<?php

/**
 *  Database configuration
 */

$Username = 'root';
$Password = '';
$Host = 'localhost';
$Database = 'stripe';

$conn = new mysqli($Host, $Username, $Password, $Database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
