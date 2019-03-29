<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <script src="changepics.js" type="text/javascript"></script>
    <link href="test.css" rel="stylesheet" type="text/css">
  </head>

<div class="row">
  <div class="column">
    <img src="https://media.wired.com/photos/59bafdf204afdc5248726f5c/master/w_2400,c_limit/BMW-TA.jpg" class="exterior" alt="exterior">
  </div>
  <div class="column">
    <img src="https://s3.amazonaws.com/external_clips/attachments/1413701/original/interior.png?1504612523" class="interior" alt="interior">
  </div>
</div>

<div class="row">
  <div class="column">
    <button onclick="changePics()">
      <img src="https://hoseco.com.au/chwp/wp-content/uploads/2018/03/Light-Blue-Box.jpg"
        alt="blue" class="colourbutton"/>
    </button>
  </div>
</div>


<?php
require_once "connectdb.php";
// <h1 class="heading">Test</h1>
?>
</html>
