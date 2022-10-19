<?php
include 'function.inc.php';
session_start();
//  unset($_SESSION['IS_LOGIN']);
session_destroy();

redirect('login.php');

   ?>