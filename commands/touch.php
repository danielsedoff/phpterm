<?php

$usage = "usage: touch [file] - sets current date or creates file.\n";

 if(substr($argv,0,1) == "\"" && substr($argv, -1) == "\"") {
   $argv = substr($argv, 1, -1);
 }   
 touch($argv);

 ?>