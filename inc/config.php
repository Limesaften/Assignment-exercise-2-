<?php
session_start();

$DB_HOST = 'hoeimark.dk.mysql';
$DB_USER = 'hoeimark_dk';
$DB_PASS = 'wT5YKMpt';
$DB_NAME = 'hoeimark_dk';

$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($link->connect_error) {
    die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8');

require 'functions.php';
?>
