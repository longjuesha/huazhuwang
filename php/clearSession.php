<?php
session_start();
unset($_SESSION);
$_SESSION=array();
session_destroy();
?>