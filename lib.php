<?php

function render($file, $layout) {
  $main_file = $file;
  include($layout);
}

function get_db_info() {
  if (exec('cat domain') == "develop") {
    return array(
      "location" => "localhost",
      "user" => "lionbar7-develop",
      "pass" => "passw0rd",
      "db" => "soultanieh-develop"
    );
  } else {
    return array(
      "location" => "localhost",
      "user" => "lionbar7-prod",
      "pass" => "passw0rd",
      "db" => "soultanieh-prod"
    );
  }
}

?>
