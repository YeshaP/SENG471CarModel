function changePics() {

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          document.getElementById("innerdiv").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","testscript.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
  // xmlhttp.send("school="+document.getElementById("school").value+"&format="+document.getElementById("format").value);
}
