<?php

 $usage = "usage: keys [on|off]:  switch the keyboard on or off.\n";

 $active_file = "commands/keyb_en.php";
 $unactive_file = "commands/keyb_en_.php";
 
 if($argv != "on" && $argv != "off") {
    echo $usage;
 }

 if($argv == "on") {
   if(file_exists($unactive_file)) {
   rename($unactive_file, $active_file);
    echo "Keyboard switched on. Reset page.\n";   
   } else {
    echo "Keyboard is either switched on or unavailable.\n";
   }
 } 

 if($argv == "off") {
   if(file_exists($active_file)) {
    rename ($active_file, $unactive_file); 
    echo "Keyboard switched off. Reset page.\n";   
   } else {
    echo "Keyboard is unavailable.\n";
   }
 } 
 
?>