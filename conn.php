<?php
session_start();
$host = '127.0.0.1';
$user = 'root';
$passsword = 'root';
$dbname = 'yiban';

$db = new mysqli( $host,$user,$passsword,$dbname);


if ($db->connect_errno<>0) {
    die ("链接失败");
}

$db->query("SET NAMES UTF8");

$con=$db;
