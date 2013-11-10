<?php

function render($file, $layout) {
  $main_file = $file;
  include($layout);
}

function get_db_info() {
  if (exec('hostname') == "ip-10-251-64-80") {
    return array(
      "location" => "localhost",
      "user" => "lionbar7",
      "pass" => "passw0rd",
      "db" => "lionbar7_db"
    );
  } else {
    return array(
      "location" => "lionbarz.com",
      "user" => "lionbar7",
      "pass" => "passw0rd",
      "db" => "lionbar7_db"
    );
  }
}

?>
