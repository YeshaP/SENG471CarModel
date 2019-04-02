<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <script src="changepics.js" type="text/javascript"></script>
    <link rel="stylesheet" href="format.css" type="text/css">
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

<body onload="showExterior(), showInterior(), showColours()">
  <div class="heading">
    <h1>Customize Your Model</h1>
  </div>

  <div class="subHeading">
    <h3> Please customize your model using the colour palette provided: </h3>
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
      <div id="interior">
      </div>
      <br><br>
      <div class="button-container" id="button-container">
      </div>
    </div>
  </div>

    <div id="innerdiv">
    </div>
</body>

</html>
