<!DOCTYPE html>
<?php
$carid = $_GET['id'];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <script src="changepics.js" type="text/javascript"></script>
    <link href="format.css" rel="stylesheet" type="text/css">
    <style>
      .button-container form,
      .button-container form div {
          display: inline;
      }

      .button-container button {
          display: inline;
          vertical-align: middle;
      }
    </style>
  </head>


<body onload="showExterior(), showColours()">
  <div id="header">
    <h1 class="heading"> Customize your Model </h1>
    <h2 class="heading"> Model Number:</h2>
    <h2 class="heading" id="modelnum"><?php echo $carid ?></h2>
    <hr>
  </div>

  <div class="row">
    <div class="column">
      <div id="exterior">
      </div>
      <br><br>
      <div class="button-container" id="button-container">
      </div>
    </div>

    <div class="column">

      </div>
    </div>
  </div>

  <div id="innerdiv">
  </div>

  <div>
    <button type="button" onclick="saveSelection()">Save Selection</button>
  </div>
</body>


</html>
