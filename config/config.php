<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$siteUrl='http://'.$_SERVER['HTTP_HOST'].'/training/resto';




$SiteTitle="Welcome to my project";

$dbhost= 'localhost';
$dbuser='root';
$dbpass='';
$dbname='project_db';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
	die('Database connection error!');
}
if (!isset($_SESSION['error'])) {
    $_SESSION['error'] = '';
}

if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = '';
}