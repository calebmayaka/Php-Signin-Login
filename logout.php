<?php
include 'conenct.php';
session_start();
session_unset();
session_destroy();
header('location: LoginIndex.php');
?>