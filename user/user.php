<?php
SESSION_START();
$_SESSION['status'] = "not login";
include '../plugin.php';

?>



<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
   <img src="../res/csclogo.png" alt="Avatar Logo" style="width:50px; margin:10px;" class="rounded-pill"> 
    <a class="navbar-brand" href="javascript:void(0)">CSC BLOGSPOT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://holycrosscollegepampanga.com/">INFO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/CollegeStudentCouncil.HCC">FB PAGE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tel:0915-4390-544">CONTACT</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" type="button">Login</button>
      </form>
    </div>
  </div>
</nav>