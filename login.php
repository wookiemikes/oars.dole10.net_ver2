<?php 
	include 'db/server.php';
	include 'company_register1.php';
	if (isset($_POST['comp_login'])) {
	$comp_login_uname = $_POST["comp_login_uname"];
	$comp_login_pwd = $_POST["comp_login_pwd"];
		$dbusername = " ";
		$dbpassword = " ";
		$_SESSION['company_email'] = "";
	$query = "SELECT * FROM `d0l310_aepdb` . `aep_comp_account_tbl` WHERE aca_email = '".$comp_login_uname."' AND aca_pw = '".$comp_login_pwd."' ";
	$result = mysqli_query($connect,$query);
	if (!empty($query)){
		while ($row = mysqli_fetch_assoc($result)) {
			$comp_email = $row['aca_email'];
			$comp_pw = $row['aca_pw'];
			}
			if ($comp_login_uname == $comp_email && $comp_login_pwd == $comp_pw){
                $theform = "SELECT aca_email from aep_comp_account_tbl where aca_email = '". $comp_email."'";
                
				$result1 = mysqli_query($connect,$theform);
				while ($row = mysqli_fetch_assoc($result1)) {
					$_SESSION['aca_email'] = $row['aca_email'];
					
				}
				$_SESSION['profile_status'] = "Logged In!";
				header('Location: dashboard.php');							
			}
			else {
				echo "<script>alert('Incorrect Username or Password!');</script>";
			}
	}
	else{
		$_SESSION["aca_email"] =" ";
		$_SESSION["aca_pw"] =" ";
		echo "<script>alert('Username or Password Doesn't exist!')</script>";
	}
}


