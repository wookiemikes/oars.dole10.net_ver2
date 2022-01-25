<?php
include "db/server.php";
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $letter = $characters[rand(0, $charactersLength - 1)];
 $output = "AEPINDIV-REG-NO-" . date('ymd') . mt_rand(100,1000) . $letter;



?>