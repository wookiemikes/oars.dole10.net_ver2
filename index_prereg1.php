<?php
$company_email = $_POST['company_email'];
$company_pwd = $_POST['company_pwd'];
$id_diff = $_POST['id_diff'];
$un_query = "SELECT * FROM `d0l310_aep` . `aep_company_accounts` WHERE company_email = '". $company_email."'";
$username_check = mysqli_query($connect,$un_query);
if ($username_check->num_rows != 0){
	echo "<script>alert('Username Already Exists!');</script>";
	header('Location: index.php');
}
else{
	// INSERT
	$sql_insert = "INSERT INTO `d0l310_aep` . `aep_company_accounts` set
				comp_id_reg = '".$id_diff."', 
				company_email = '". $company_email."',
				company_pwd = '". $company_pwd."'";	
	//After clicking submit and done inputting data, fields will be cleared
		if (mysqli_query($connect,$sql_insert)){
		    $_SESSION['company_email'] = $company_email;
		    $_SESSION['company_pwd'] = $company_pwd;
		    ?><script>window.location.href=" company_register.php";</script><?php
		
		}
		else {
			echo "<script>alert('Failed to Save, Try Again!');</script>";
			//$_SESSION['message'] = 'Registration failed!';
		}
}

?>