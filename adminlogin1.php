<?php

	  session_start();

	  if (isset($_SESSION['loggedIN'])) {
	    header('Location:admindashboard.php');
	    exit();
	    # code...
	  }


	if (isset($_POST['adminlogin'])) {
		//$conn = new mysqli('localhost','d0l310_aep','d0l310_aep', 'd0l310_aep');
		$conn = mysqli_connect("localhost", "root", "", "d0l310_aep");

		$username = $_POST['uname'];
		$password = $_POST['pwd'];

		$data = $conn->query("SELECT admin_id from aep_admin WHERE admin_username='$username' and admin_pwd ='$password'");
		if ($data->num_rows >0){
			$_SESSION['loggedIN'] = '1';
            $_SESSION['uname'] = $username;
            header("Location:admindashboard.php");
			exit;
		}else{
			exit("Login Failed");	
		}
		
	}


 ?>
