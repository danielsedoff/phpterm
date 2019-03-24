<?php
$usage = "usage: rm [filename] - deletes one file.\n";
 
 if(substr($argv,0,1) == "\"" && substr($argv, -1) == "\"") {
   $argv = substr($argv, 1, -1);
 }   
 
 if(__FILE__ == realpath($argv)) {
   echo "rm will not remove itself.\n";
   $argv = "";
 }
   
 if(strlen($argv) > 0) {
  if(file_exists($argv)) {
    unlink($argv);
    echo "$argv unlinked.\n";
  } else {
    echo "$argv does not exist.\n";
  }
 } else {
   echo $usage;
 }
?>