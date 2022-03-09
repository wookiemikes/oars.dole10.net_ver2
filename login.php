<?php 
	include 'db/server.php';
	//session_start();
	if (isset($_POST['comp_login'])) {	
		$comp_login_uname = $_POST["comp_login_uname"];
		$comp_login_pwd = $_POST["comp_login_pwd"];
		$_SESSION['aca_id'] = "";
		$dbusername = " ";
		$dbpassword = " ";
		$query = "SELECT * FROM `aep_comp_account_tbl` WHERE aca_email = '".$comp_login_uname."' AND aca_pw = '".$comp_login_pwd."' ";
		$result = mysqli_query($connect,$query);
		$row = mysqli_fetch_array($result);
			$cp_login = $row['aca_email'];
			$cp_pw = $row['aca_pw'];

			if($comp_login_uname==$cp_login && $comp_login_pwd==$cp_pw){
				$query2 = "SELECT acd_email from aep_comp_details_tbl where acd_email = '".$cp_login."'";
				$resultb = mysqli_query($connect, $query2);
					$_SESSION['acd_email'] = $row['acd_email'];


					$_SESSION['profile_status'] = "Logged In";
					header('Location: dashboard.php');
			}else{

				echo "<script>alert('Incorrect Login Credentials')</script>";
			}

		/*$row = mysqli_fetch_array($result);
			$comp_loginuname == $row['aca_email'];
			$comp_loginpwd == $row['aca_pw'];

			echo $comp_loginuname;

			/*if ($comp_login_uname == $comp_loginuname && $comp_login_pwd == $comp_loginpwd){
				$theform = "SELECT acd_email from aep_comp_details_tbl where acd_email = '". $comp_loginuname."'";
				$result1 = mysqli_query($connect,$theform);
					$_SESSION['acd_email'] = $row['acd_email'];


				$_SESSION['profile_status'] = "Logged In!";
				header('Location: dashboard.php');							
			}else{
				echo "<script>alert('Incorrect Username or Password!');</script>";
			}*/

}
?>