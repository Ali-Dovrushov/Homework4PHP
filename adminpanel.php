<?php
session_start();

require_once 'index1.php';
if (isset($_SESSION['admin']) && isset($_SESSION['adminPass']))
{
    echo " You are admin" . "</br>";
    echo '<input type="button" onclick="history.go(-1);" value="Back">';
}