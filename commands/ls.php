<?php

$usage = "usage: ls [directory] - prints the selected directory.\n";

 if(substr($argv,0,1) == "\"" && substr($argv, -1) == "\"") {
   $argv = substr($argv, 1, -1);
 }   
 
 if($argv == "") $argv = ".";
 
 if(is_dir($argv)) {
   $list = scandir($argv);
   foreach ($list as &$entry) {
     if(is_dir($entry)) {
     echo "[dir] " . $entry . "\n";
     } else {
       echo $entry . " -> size: " . filesize($argv . "/" . $entry) . "\n";
     }
   }
 } else {
   echo "$argv is not a directory.\n" . $usage;
 }
?>