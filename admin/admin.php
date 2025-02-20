<?php 
    SESSION_START();
	require_once "../config/dbcon.php";
	include "../plugin.php";
    if ($_SESSION['status'] == "LOGIN"){
		
		?>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">CSC WEBSITE ADMIN ACCOUNT HOLDER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">      </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">     </a>
        </li>
      </ul>
    
       <form method = "POST" action = "../index.php">
        <input type="submit" class="btn btn-danger" value="Logout">
        </form>
    </div>
  </div>
</nav>
    <?php
	if (isset($_SESSION['message'])){ ?>
	
	<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <?=$_SESSION['message']?>
</div>
		
		<?php
		unset($_SESSION['message']);
	}?>


     <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>AccType</th>
        <th>Username</th>
        <th>Password</th>
        <th>Account Holder</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$sql = "SELECT * FROM admincsc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $counter = $row['id'] + 1;
 ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['acctype']?></td>
        <td><?=$row['username']?></td>
        <td><?=$row['password']?></td>
        <td><?=$row['name']?></td>
		<form action ="../config/deleteUser.php" method ="POST">
		<input type="hidden" name="id" value = "<?= $row['id']?>">
		<td><input type="submit" value="delete" class= "btn btn-danger"></td>
		</form>
    </tr>
 
 
 
 <?php
 
  }
} else {
  
}
$conn->close();
?>
   <form action="../config/addUser.php" method="POST">
	<tr>
	<td> <?php if(isset($counter)) echo "$counter"; ?></td>
  <td><input type="text" placeholder = "account type" name="acctype" class="form-control" required> </td>
	<td><input type="text" placeholder = "username" name="username" class="form-control" required> </td>
	<td><input type="password" placeholder = "password" name="password" class="form-control"required></td>
  <td><input type="text" placeholder = "account holder name" name="name" class="form-control"required></td>
	<td><input type="submit" value="Add" class="btn btn-primary"></td>
	</tr>
	</form>
   </tbody>
  </table>


		<?php
		
		
		
	} else {
		$_SESSION['error'] = "YOU MUST LOG IN FIRST";
		Header('Location: ../index.php');
	}
?>