<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="custom.css">
</head>
<body>
  <style>
    #container1 {
    width: 240px;
    height: 150px;
  margin: 0px;
  position: absolute;
  top: 210px;
  left: 20px;
  border: 1px solid green;
  box-shadow: 5px 10px green;
  border-radius: 10px;
  background-color: lightgreen;
    }
    h4 {
      position: fixed;
      top: 170px;
      left: 330px;
    }
    h3 {
      position: fixed;
      top: 160px;
      left: 50px;
    }
    </style>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font color="white"><b>Welkom To My Shop</b></font></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="dbproductverwijderen.php"><font color="white">List</font></a></li>
      <li><a href="order.php"><font color="white">Order</font></a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
  </div>
</nav>

<ul>
 <li><a href="productadd.html"><font color="white">Add Product</font></a>
 <li>Menu item
 <li>Menu item
</ul>

<br>

<h3><font color="red">Product List</font></h3>

</body>
</html>
<div id=container1>
<?php
  include("showproducts.php");
?>
<div>
<br><br>

<h4><font color="red">Order Products</font></h4>


<?php

  include("order.php");
  
?>
