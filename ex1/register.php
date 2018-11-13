<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h2>Register</h2>
     <div class="container">
         

<?php include 'header.php';?>
 <form class="form-horizontal" method="post" action="save.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="user">  User Name :</label>
    <div class="col-sm-10">
      <input type="username" name="username"  class="form-control" id="user" placeholder="Enter Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="add">  Address :</label>
    <div class="col-sm-10">
      <input type="username" name="add"  class="form-control" id="user" placeholder="Enter Address">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="tele">  Telephone:</label>
    <div class="col-sm-10">
      <input type="username" name="tp"  class="form-control" id="user" placeholder="Enter Telephone">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="Email">  Email :</label>
    <div class="col-sm-10">
      <input type="username" name="email"  class="form-control" id="user" placeholder="Enter Email">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Register</button>
    </div>
  </div>
</form> 
     </div>
    </body>
</html>
