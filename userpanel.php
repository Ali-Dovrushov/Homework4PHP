<?php
session_start();

require_once 'index1.php';
if (isset($_SESSION['user']) && isset($_SESSION['userPass']))
{
    echo " You are user" . "</br>";
    echo '<input type="button" onclick="history.go(-1);" value="Back">';
}