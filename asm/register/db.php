<?php
function connect() {
    $host = "127.0.0.1";
    $dbname = "users";
    $dbuser = "root";
    $dbpass = "";
    $conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
    if ($conn->connect_error) {
        die("Connect refused");
    }
    return $conn;
}
