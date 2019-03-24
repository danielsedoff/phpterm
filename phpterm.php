<?php

$debug = false;

if(!empty($_POST)) {
  $command_dir = 'commands';
  $message = $_POST["message"];
  if($message == "") exit();
  echo "[request]\n$message\n[response]\n";

  if(!is_dir($command_dir)) {
    echo("Warning: no command directory. Trying to make it.\n");
    mkdir($command_dir);
  }
  $php_extension = ".php";
  $command_list = array_diff(scandir($command_dir), array('..', '.'));
  if(empty($command_list)) echo ("Warning: command directory empty.\n");
  
  $message .= " ";
  $current_command = substr($message, 0, strpos($message, " "));
  $current_command = strtolower($current_command);
  if(in_array($current_command .   $php_extension, $command_list)) {
    call_command($current_command, substr($message, strlen($current_command)));
  } else {
    echo "command $current_command does not exist.\n";
    exit();
  }
  exit();
}

function call_command($command, $argv){
  $php_extension = ".php";
  $argv = trim($argv);
  global $command_dir, $debug;
  if($debug) echo "DEBUG. command_dir: $command_dir \n";
  include($command_dir . "/" . $command .   $php_extension);
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
<style>
body, div, textarea, a, input {
  background-color:black; 
  color:lightgreen;
  line-height: 20px; font-size: 17px;
}
input[type=text], input[type=url], input[type=email], input[type=password], input[type=tel] {
  -webkit-appearance: none; -moz-appearance: none;
  display: block;
  margin: 0;
  width: 100%; height: 40px;
  line-height: 40px; font-size: 17px;
  border: 1px solid #bbb;
}
</style>
</head>
<body onload="render_text('phpterm v0.1 PHP Terminal by Daniel Sedoff, 2018. Type help for a list of commands.');">

<script type="text/javascript">

function gbi(e) { 
  return document.getElementById(e); 
}

function press_key(key) {
  php_address = "phpterm.php";
  if (!(key.which == 13 || key.keyCode == 13)) return;
  usr_input = gbi("usr_input");
  if(usr_input.type == "text") {
    message = usr_input.value;
  } 
  if(usr_input.type == "password") {
    message = "password sent";
  }
	send_request(php_address, message);
}

function render_text(server_response) { 
  usr_input = gbi("usr_input");
  output_div = gbi("terminal_out");
  if(server_response.length > 0) usr_input.value = "";  
  script_present = false;
  
  if(server_response.indexOf("[response]\n<nolist/>") == -1) { 
    /* debug alert(server_response.indexOf("<nolist/>")); */
    thisTextArea = document.createElement("textarea");
    output_div.appendChild(thisTextArea);
    thisTextArea.style = "width:100%";
    thisTextArea.innerHTML = server_response;
    thisTextArea.style.height = thisTextArea.scrollHeight + 10 + "px";
  } else {
    start_script = "<" + "script src=\"";
    end_script = "\"></" + "script" + ">";
    if((server_response.indexOf(start_script) > -1) && (server_response.indexOf(end_script) > -1)) {
      start_script_pos = server_response.indexOf(start_script);
      end_script_pos = server_response.indexOf(end_script);
      newScriptFilename = server_response.substring(start_script_pos + start_script.length, end_script_pos);
      head = document.getElementsByTagName('head')[0];
      newscript = document.createElement('script');
      newscript.type= 'text/javascript';
      newscript.src = newScriptFilename;
      head.appendChild(newscript);
      newSubdiv = document.createElement("div");
      output_div.appendChild(newSubdiv);
      newSubdiv.innerHTML = server_response.substr(end_script_pos + end_script.length);
      newSubdiv.style = "border: solid 1px black;"
      /* This means you can have only one script tag in one Command! */
    } else {
      newSubdiv = document.createElement("div");
      output_div.appendChild(newSubdiv);
      newSubdiv.innerHTML = server_response;
    }
  }
  output_div.scrollTop = output_div.scrollHeight;
}

function send_request(address, message){
  /* Sending a standard XMLHttpRequest, nothing new here. */
    var xhr = new XMLHttpRequest();
    var message2 = "";
    var tosend = 'message=' + encodeURIComponent(message) +
      '&message2=' + encodeURIComponent(message2); 
    xhr.open("POST", address, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (this.readyState != 4) return;
      render_text( this.responseText );
    }
    xhr.send(tosend);
}
</script>

<div id="main_div">
  <div style="width:100%; height:80%; overflow-y: scroll; " id="terminal_out">
  </div>
  <br>
  <input type="text" id="usr_input" style="width:100%; height:10%;" onkeypress="press_key(event);" autofocus/>
</div>
<?php if (file_exists("commands/keyb_en.php")) include("commands/keyb_en.php"); ?>
</body>
</html>