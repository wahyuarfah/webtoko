<?php
session_start();
error_reporting(0);
include "../app/functions.php";
include "../app/config.php";
if (!isset($_SESSION["loginAdmin"]) || $_SESSION["loginAdmin"] == '') {
    include "login.php";
} else {
    include "route.php";
}
