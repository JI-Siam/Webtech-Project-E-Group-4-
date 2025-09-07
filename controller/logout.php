<?php
include('../model/constants.php');
session_destroy();

header('location:' .SITEURL. 'index.html');
?>