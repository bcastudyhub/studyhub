<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="icon" href="StudyHub.png">
<link href="style.css" rel="stylesheet">
</head>
<?php

?>
<body>
<div id="mySidenav" class="sidenav">
  <a class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/project">Home</a><br>
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#fy">FY.BCA</button>
  <div id="fy" class="collapse">
    <a href="Sem-1.php">Sem-1</a>
    <a href="Sem-2.php">Sem-2</a>
  </div><br>
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#sy">SY.BCA</button>
  <div id="sy" class="collapse">
    <a href="Sem-3.php">Sem-3</a>
    <a href="Sem-4.php">Sem-4</a>
  </div><br>
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#ty">TY.BCA</button>
  <div id="ty" class="collapse">
    <a href="JoinUs.php">Join Us</a>
  </div><br>
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#other">Others</button>
  <div id="other" class="collapse">
    <a href="Softwares.php">Softwares</a>
    <a href="ourteam.php">Our Team</a>
    <a href="">About Us</a>
    <a href="">Add Materials</a>
    <a href="">Events</a>
  </div>
</div>
<div id="main" align="left">
  <span id="navigator" style="position: fixed;top: 0;" onclick="openNav()">&#9776;</span>
</div>
<script src="node.js"></script>
</body>
</html> 
