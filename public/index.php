<?php session_start();
include "../app/config.php";
include "../app/functions.php";

if (!isset($_SESSION['visit_id'])) {
    if (mysqli_query($conn, "INSERT INTO visitor VALUES(null, current_timestamp)"));
    $_SESSION['visit_id'] = true;
}

require_once "route.php";
