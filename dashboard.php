<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory_Management_System</title>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></script>
  
  <Script src="./assets/js/search.js"></Script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"> </script>

    <style>
    body{

      background-color: #dfe6e9;
    }
  </style>
</head>

<?php
include('./config/database.php');
?>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid"> 
    <a class="navbar-brand" href="javascript:void(0)" style="color: red; font-size: 15px;">
        <image src="./assets/img/logo.png" height="55"> 
    </a>
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active ">
          <a class="nav-link" href="/web-page/index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/web-page/Registration.php" >Registration</a>
        </li>
      
      </ul>
      <form class="d-flex">
        <input onkeyup="Search(this.value)" class="form-control me-2" type="text" placeholder="Search Pet Name Here...">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>


</html>

