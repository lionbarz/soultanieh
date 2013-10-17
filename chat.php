<?php

require "db_info.php";

$link = mysql_connect($location, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die (mysql_error());
$update_token = $_GET["update_token"];
$sql = "SELECT * FROM chat where update_token > " . $update_token;
$result = mysql_query($sql) or die(mysql_error());

$data = array();
while ($row = mysql_fetch_array($result))
{
  array_push($data, array('user_id' => $row['user_id'], 'update_token' => (int)$row['update_token'], 'text' => $row['text'], 'time' => time()));
}

echo json_encode($data);
?>
