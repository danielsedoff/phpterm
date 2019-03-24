<?php

$usage = "usage: help - provides basic information.\n";
$command_dir = "commands";

echo "List of available commands:\n";

 if(is_dir($command_dir)) {
   $list = scandir($command_dir);
   foreach ($list as &$entry) {
     $line_start = 0; $line_end = 0;
     if(is_file($command_dir . "/" . $entry) && substr($entry, -4) == ".php") {
       $handle = fopen($command_dir . "/" . $entry, "r");
       $contents = fread($handle, 512);
       fclose($handle);
       $line_header = '$usage = "usage: ';
       $line_start = strpos($contents, $line_header);
       $line_end = strpos($contents, '.\n";', $line_start);
       if($line_start > 0 && $line_end > 0) {
         
         $help_message = substr($contents, $line_start + strlen($line_header), $line_end - $line_start - strlen($line_header) + 1);
         $help_message = str_replace("\\", "", $help_message);
        echo $help_message . "\n";
       }
     }
   }
 } else {
   echo "Sorry, the [commands] folder seems empty. Reinstall phpterm.\n";
 }

?>