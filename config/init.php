<?php 
require 'connection.php';
require 'helpers.php'; 
require 'dbquery.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}



