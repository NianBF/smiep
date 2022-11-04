<?php
session_start();
if ($_SESSION['email'] == null or $_SESSION["userName"] == null or
    $_SESSION["pass"] == null) {
    header("location:../../index.php");
} else {
    include_once("controller/main.php");
}