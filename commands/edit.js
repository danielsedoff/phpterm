function editSave(new_id){ 
  /* with XHR */
  var xhr = new XMLHttpRequest();
  var tosend = 'filename=' + encodeURIComponent(gbi('filename' + new_id).value) +
    '&content=' + encodeURIComponent(gbi('content' + new_id).value);
  xhr.open("POST", "commands/edit.php", true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState != 4) return;
    render_text( this.responseText );
  }
  xhr.send(tosend);
}