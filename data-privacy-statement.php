<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// curl data privacy statment
/*$url = "my-awesome-link-to-the-data-privacy-statment.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'http://example.com');
$body = curl_exec($ch);
curl_close($ch);
echo $body; */
require 'core/templates/data-privacy-statement.php';
?>
