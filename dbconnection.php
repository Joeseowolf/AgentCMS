<?php

$serverName = "ANON\SQLEXPRESS";

$connectionInfo = array( "Database" => "master");
$conn = sqlsrv_connect ( $serverName, $connectionInfo);


if ($conn) {
    $contrue = "Connection estabilished.";
} else {
    $confail =  "Connection failed.";
    die( print_r(sqlsrv_errors(), true));
}
