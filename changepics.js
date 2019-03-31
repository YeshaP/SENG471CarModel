function changePics() {
  event.preventDefault();

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

function showExterior(){
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("exterior").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","showpics.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("modelnum="+'2');

}

function showColours(){
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("button-container").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","showcolours.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("modelnum="+'2');

}
