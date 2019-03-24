<?php
$usage = "usage: cp \"file 1\" \"file 2\" - copies a file.\n";

$quot = "\"";
if (substr_count ($argv, $quot) != 4) {
  echo $usage;
} else {
  $start_file1 = strpos($argv, $quot);
  $end_file1 = strpos($argv, $quot, $start_file1 + 1);

  $start_file2 = strpos($argv, $quot, $end_file1 + 1);
  $end_file2 = strpos($argv, $quot, $start_file2 + 1);

  $file1 = substr($argv, $start_file1 + 1, $end_file1 - $start_file1 - 1);
  $file2 = substr($argv, $start_file2 + 1, $end_file2 - $start_file2 - 1);
  
  if($debug) echo "DEBUG. file1: $file1 file2: $file2 \n";
  
  if(!file_exists($file1)) {
    echo "$file1 does not exist.\n";
  } else {
    if(file_exists($file2)) {
      echo "$file2 already exists.\n";
    } else {
      copy($file1, $file2);
      echo "$file1 was copied to $file2\n";  
    }
  }
}

// bool copy ( string $source , string $dest [, resource $context ] )

?>

