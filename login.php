<?php 
	include 'db/server.php';
	include 'company_register1.php';
	if (isset($_POST['comp_login'])) {
	$comp_login_uname = $_POST["comp_login_uname"];
	$comp_login_pwd = $_POST["comp_login_pwd"];
		$dbusername = " ";
		$dbpassword = " ";
		$_SESSION['company_email'] = "";
	$query = "SELECT * FROM `d0l310_aep` . `aep_company_accounts` WHERE company_email = '". $comp_login_uname. "' AND company_pwd = '".$comp_login_pwd."' ";
	$result = mysqli_query($connect,$query);
	if (!empty($query)){
		while ($row = mysqli_fetch_assoc($result)) {
			$comp_loginuname = $row['company_email'];
			$comp_loginpwd = $row['company_pwd'];
			}
			if ($comp_login_uname== $comp_loginuname&& $comp_login_pwd== $comp_loginpwd){
                $theform = "SELECT company_email from aep_company where company_email = '". $comp_loginuname."'";
                
				$result1 = mysqli_query($connect,$theform);
				while ($row = mysqli_fetch_assoc($result1)) {
					$_SESSION['company_email'] = $row['company_email'];
					
				}
				$_SESSION['profile_status'] = "Logged In!";
				header('Location: dashboard.php');							
			}
			else {
				echo "<script>alert('Incorrect Username or Password!');</script>";
			}
	}
	else{
		$_SESSION["company_email"] =" ";
		$_SESSION["company_pwd"] =" ";
		echo "<script>alert('Username or Password Doesn't exist!')</script>";
	}
}


