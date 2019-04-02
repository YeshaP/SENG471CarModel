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
                +"&name="+colour);
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
  xmlhttp.open("POST","showexteriorpics.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("modelnum="+'2');

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
  xmlhttp.send("modelnum="+'2');

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
