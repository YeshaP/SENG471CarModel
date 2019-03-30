<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <script src="changepics.js" type="text/javascript"></script>
    <link href="format.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <h1 class="heading"> Customize your Model </h1>
  <hr>

  <div class="row">
    <div class="column">
      <img src="https://media.wired.com/photos/59bafdf204afdc5248726f5c/master/w_2400,c_limit/BMW-TA.jpg" class="carpic" alt="exterior">
      <br><br>
      <div class="colourbutton">
        <button onclick="changePics()">
           <img src="https://hoseco.com.au/chwp/wp-content/uploads/2018/03/Light-Blue-Box.jpg"
             alt="blue" class="colour"/>
        </button>
        <button onclick="changePics()">
           <img src="https://hoseco.com.au/chwp/wp-content/uploads/2018/03/Light-Blue-Box.jpg"
             alt="blue" class="colour"/>
        </button>
        <button onclick="changePics()">
           <img src="https://hoseco.com.au/chwp/wp-content/uploads/2018/03/Light-Blue-Box.jpg"
             alt="blue" class="colour"/>
        </button>
      </div>
    </div>

    <div class="column">
      
      </div>
    </div>
  </div>

  <div id="innerdiv">
  </div>
</body>

<?php
require_once "connectdb.php";
// <h1 class="heading">Test</h1>

// <button onclick="changePics()">
//   <img src="https://hoseco.com.au/chwp/wp-content/uploads/2018/03/Light-Blue-Box.jpg"
//     alt="blue" class="colourbutton"/>
// </button>

// <img src="https://s3.amazonaws.com/external_clips/attachments/1413701/original/interior.png?1504612523" class="interior" alt="interior">

// .column img {
//   margin-top: 8px;
//   vertical-align: middle;
// }
?>
</html>
