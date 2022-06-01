<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['userName']);
unset($_SESSION['pass']);
session_unset();
session_destroy();

header("location:../index.php");