function changePics(colour) {
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("exterior").innerHTML = this.responseText;
          document.getElementById("interior").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","testscript.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("colour="+colorToHex(document.getElementById(colour).style.backgroundColor)
                +"&name="+colour+"&modelnum="+document.getElementById('modelnum').innerHTML);
}

function showExterior(){
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          document.getElementById("exterior").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","showexteriorpics.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("modelnum="+document.getElementById('modelnum').innerHTML);

}

function showInterior(){
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("interior").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("POST", "showinteriorpics.php", true);
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
  xmlhttp.send("modelnum="+document.getElementById('modelnum').innerHTML);

}

function saveSelection(){
  event.preventDefault();

  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("innerdiv").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST","saveselection.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("modelnum="+document.getElementById('modelnum').innerHTML+
                "&exterior="+document.getElementById('eximage').src);

}

function colorToHex(color) {
    if (color.substr(0, 1) === '#') {
        return color;
    }
    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

    var red = parseInt(digits[2]);
    var green = parseInt(digits[3]);
    var blue = parseInt(digits[4]);

    var rgb = blue | (green << 8) | (red << 16);
    return digits[1] + '#' + rgb.toString(16).padStart(6, '0');
};
