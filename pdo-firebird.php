<?php
$str_conn="firebird:host=localhost;dbname=/var/lib/firebird/2.5/data/employee.fdb;charset=UTF8";
$dbh = new PDO($str_conn, "sysdba", "masterkey");
?>
