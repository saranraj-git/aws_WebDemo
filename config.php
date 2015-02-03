<?php
// Include the AWS SDK for PHP
require 'aws-sdk-for-php/aws-autoloader.php';
use Aws\S3\S3Client;

// Database connection parameters
$db_hostname = "localhost";
$db_database = "web_demo";
$db_username = "username";
$db_password = "password";

// Image upload options
$storage_option = "disk";
$hd_folder  = "uploads";
$s3_bucket  = "my_uploads_bucket";
$s3_baseurl = "https://s3-ap-southeast-2.amazonaws.com/";
?>