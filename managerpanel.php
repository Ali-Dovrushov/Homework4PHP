<?php
session_start();

require_once 'index1.php';
if (isset($_SESSION['manager']) && isset($_SESSION['managerPass']))
{
    echo " You are manager" . "</br>";
    echo '<input type="button" onclick="history.go(-1);" value="Back">';
}