<?php
include ("menu.php");
?>
<title>Home</title>
<script>
    window.addEventListener("focus",()=>{
        document.title="Home";
    })
    window.addEventListener("blur",()=>{
        document.title="Study Hub";
    })
</script><br>
<div class="parallax" style="background-image: url('Team.jpg');"></div>
<h3 class="header">Semesters</h3><br>
<div class="container mt-3">
  <a href="Sem-1.php">
  <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-1</button></a>
  </div>
<div class="container mt-3">
    <a href="Sem-2.php">
    <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-2</button></a>
</div>
<div class="container mt-3">
    <a href="Sem-3.php">
    <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-3</button></a>
</div>
<div class="container mt-3">
    <a href="Sem-4.php">
    <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-4</button></a>
</div>
<div class="container mt-3">
    <a href="JoinUs.php">
    <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-5</button></a>
</div>
<div class="container mt-3">
    <a href="JoinUs.php">
    <button type="button" class="btn btn-outline-light block btn-primary" data-bs-toggle="collapse">Sem-6</button></a>
</div><br><br>