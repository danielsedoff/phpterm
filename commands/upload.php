<?php

$usage = "usage: upload - shows a file upload form.\n";
$new_id = preg_replace('/[^0-9]/', '', microtime());

if(!empty($_FILES)) {
  $upload_dir = '../uploads/';
  
  $upload_file = $upload_dir . $new_id . "_" . basename($_FILES['userfile']['name']);
  move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file);
  exit("success");
}
?><nolist/>

<script src="commands/upload.js"></script>
<div>
<form>
<input type="file" name="userfile" /><input type="button" value="[UPLOAD]" onClick="fileUpload(this.form,'commands/upload.php','upload<?php echo $new_id; ?>')"; return false;" >
<div id="upload<?php echo $new_id; ?>"></div>
</form>
</div>