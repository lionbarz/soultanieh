<?php

require "db_info.php";

$link = mysql_connect($location, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die (mysql_error());
$sql = "SELECT * FROM chat";
$result = mysql_query($sql) or die(mysql_error());

while ($row = mysql_fetch_array($result))
{
  echo $row[0] . " and time is " . time();
}
?>
