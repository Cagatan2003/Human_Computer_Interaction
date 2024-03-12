<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Portal </title>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></script>
  
  <Script src="./assets/js/search.js"></Script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"> </script>
<link rel="stylesheet" href="./assets/css/style.css">
   
</head> 

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark "> 

<div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#"> <image src="./assets/img/sitc.png" height="60" style="color": red; font-size: 30px;>  St. Ignatius Technical College, Inc. </a>
    </ul>
</nav>
<div class="card"><div class="card-header" style="text-align: Center;"><p class="h2">Registration Form</p>Fill out the form carefully for registration</div>
<div class="container-fluid">
<div class="row mt-3">

<div class="col-md-3">
    <label class="md-3">First Name: <b class="text-danger">*</b></label>
    <input name="inp_fname" required type="text" placeholder="Enter first Name here..." class="form-control mt-2">
</div>
<div class="col-md-3">
    <label>Middle Name: <b class="text-danger">*</b></label>
    <input name="inp_mname" required  type="text" placeholder="Enter middle name here..." class="form-control mt-2">
</div>
<div class="col-md-3">
    <label>Last Name: <b class="text-danger">*</b></label>
    <input name="inp_lname"  required type="text" placeholder="Enter last name here..." class="form-control mt-2">
</div>
<div class="col-md-3">
    <label>Ext Name: <small>(OPtional)</small></label>
    <input name="inp_extname"  type="text" placeholder="Enter Ext name here..." class="form-control mt-2">
</div>
<div class="col-md-3 mt-3">
            <label>Gender:  <b class="text-danger">*</b></label>
            <select name="inp_pgender" required  class="form-control  mt-2">
    <div class="col-md-3 mt-3">
                <option value="" disabled select> ---Select Gender---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="col-md-3 mt-3">
    <label>Birt of Date:  <b class="text-danger">*</b></label>
    <input name="inp_add" required  type="text" placeholder="dd/mm/yyyy" class="form-control mt-2"> 
</div>

<div class="col-md-3 mt-3">
    <label>Address:  <b class="text-danger">*</b></label>
    <input name="inp_add" required  type="text" placeholder="Enter address here..." class="form-control mt-2"> 
</div>
<div class="col-md-3 mt-3">
    <label>Contact No.: <b class="text-danger">*</b></label>
    <input name="inp_num" required  type="text" placeholder="09 XXXX XXXX" class="form-control mt-2">
</div>
</div>



</body>


</html>

