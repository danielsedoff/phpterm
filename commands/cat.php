<?php

$usage = "usage: cat [file] - displays the file. does not concatenate anything yet.\n";
 
 if(substr($argv,0,1) == "\"" && substr($argv, -1) == "\"") {
   $argv = substr($argv, 1, -1);
 }  
 if($argv == "") {
   echo "[no filename]"; 
 }
 if(!is_dir($argv) && file_exists($argv)) {
  echo file_get_contents($argv);
  } else {
   echo "$argv does not exist or is a directory.\n" . $usage;
 }
?>