<?php

$usage = "usage: edit [file] - edit a file.\n";

if(!isset($_POST["filename"])) { 
  /* no POST; open a file, but do no submit */
  if(substr($argv, 0, 1) == "\"" && substr($argv, -1) == "\"") {
    $argv = substr($argv, 1, -1);
  }
  if(!file_exists($argv)) {
    try {
      if(basename($argv) != "") {
        touch($argv);
      } else {
        exit("Invalid filename $argv\n");
      }
    } catch (Exception $e) {
      exit ("Unable to create file: $argv \n");
    }
  }
  
  $filename = realpath($argv);
  if(file_exists($filename)) {
    $textarea_content = file_get_contents($filename);
  } else {
    $textarea_content = "";
  }
} else {  /* POST is not empty, submit text */
  $filename = $_POST["filename"];
  $content = $_POST["content"];
  file_put_contents($filename, $content);
  exit("saving $filename\n");
}

?><nolist/>

<script src="commands/edit.js"></script>
<div>
EDIT

<?php 
$new_id = preg_replace('/[^0-9]/', '', microtime());
?>

<textarea style="width:100%; height:40%;" id="content<?php echo $new_id; ?>"><?php echo $textarea_content; ?></textarea>
<br>
<table style="width:100%; height:10%;"><tr>
<td style="width:10%;">FILE: </td>
<td style="width:70%;">
<input type="text" style="width:100%" disabled id="filename<?php echo $new_id; ?>" value="<?php echo $filename; ?>"/>
</td><td style="width:20%;">
<input type="button" style="width:100%; height:100%;" value="save" onClick='editSave("<?php echo $new_id; ?>")'; return false;">
</td></tr></table>
</div>



