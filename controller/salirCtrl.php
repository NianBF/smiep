<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['userName']);
unset($_SESSION['pass']);
unset($_SESSION['rol']);
unset($_SESSION['docUsu']);
session_unset();
session_destroy();

header("location:../");