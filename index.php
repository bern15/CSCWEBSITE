<?php
SESSION_START();
$_SESSION['status'] = "not login";
include 'plugin.php';

?>



<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
   <img src="res/csclogo.png" alt="Avatar Logo" style="width:50px; margin:10px;" class="rounded-pill"> 
    <a class="navbar-brand" href="index.php" style="font-weight: bold;">COLLEGE STUDENT COUNCIL</a>
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
        <li class="nav-item">
          <a class="nav-link" href="tel:0915-4390-544">visit page</a>
        </li>
      </ul>

      
      <form class="d-flex">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" type="button">Admin</button>
      </form>
      

    </div>
  </div>
</nav>



<?php
if(isset($_SESSION['error'])) {
    ?>
	<div class="alert alert-danger">
	<strong>
	<?php
	echo $_SESSION['error'];
	?>
</strong></div>
<?php
unset ($_SESSION['error']);
}
?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <img src="res/csccover.jpg" class="img-fluid mx-auto d-block" alt="CSC Cover Image">
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ADMIN LOGIN</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
		 
		 <form method = "POST" action="config/loginAuth.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"required>
  </div>

      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
         <button type="submit" class="btn btn-primary">LOGIN</button>
     </form>
      </div>

    </div>
  </div>
</div>




<footer class="bg-dark text-center text-light">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-light" href="https://www.facebook.com/CollegeStudentCouncil.HCC">COLLEGE STUDENT COUNCIL</a>
  </div>
  <!-- Copyright -->
</footer>
