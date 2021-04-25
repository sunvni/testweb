<?php
$connStr = "host=localhost port=5432 dbname=demo user=demo_user";
//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from pg_stat_activity");
var_dump(pg_fetch_all($result));
