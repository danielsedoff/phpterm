<?php

$usage = "usage: newcom n [command_name] [php code] - makes a new command.\n";
$usage .= "example: newcom n dir print_r(scandir(\$argv));\n";
$usage .= "where \$argv are the arguments passed to dir.\n";
$usage .= "note: this is not the best solution for this command.\n";


if($debug) echo "DEBUG. newcom found argv: [$argv] \n";
$php_head = "<" . "?php\n";
$php_foot = "\n?" . ">";

if((strlen($argv) < 2) | (substr($argv, 0, 2) != "n ")) {
  echo $usage;
} else {
  $second_param_end = strpos($argv, " ", 2);
  if($debug) echo "DEBUG. second_param_end: [$second_param_end] \n";
  if($second_param_end < 1) {
    echo $usage;
  } else {
    $new_command_name = substr($argv, 2, $second_param_end - 2);
    if($debug) echo "DEBUG. new command: [$new_command_name]\n";
    
    $new_command_content = $php_head;
    $new_command_content .= substr($argv, $second_param_end);
    $new_command_content .= $php_foot;
    
    $new_file_path = $command_dir . "/" . $new_command_name . ".php"; 
    if(!file_exists($new_file_path)) {
      file_put_contents($new_file_path, $new_command_content);
      echo "$new_command_name created.\n";
    } else {
      echo "$new_command_name already exists.\n";
    }
  }
}
?>