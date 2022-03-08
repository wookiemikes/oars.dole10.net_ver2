<?php
$company_email = $_POST['company_email'];
$company_pwd = $_POST['company_pwd'];
$comp_reg_no = $_POST['comp_reg_no'];
$date_reg = date("Y-m-d");
$ein = $_POST['ein'];	
$un_query = "SELECT * FROM `d0l310_aepdb` . `aep_comp_account_tbl` WHERE aca_email = '". $company_email."'";
$username_check = mysqli_query($connect,$un_query);
if ($username_check->num_rows != 0){
	echo "<script>alert('Username Already Exists!');</script>";
	header('Location: index.php');
}
else{
	// INSERT
	$sql_insert = "INSERT INTO `d0l310_aepdb` . `aep_comp_account_tbl` set
				aca_reg_no = '".$comp_reg_no."', 
				aca_email = '". $company_email."',
				aca_pw = '". $company_pwd."',
				aca_date_reg = '".$date_reg."',
				aca_1020_ein = '". $ein."',
				aca_is_validated = 'NOT VALIDATED' ";	
	//After clicking submit and done inputting data, fields will be cleared
		if (mysqli_query($connect,$sql_insert)){
		    $_SESSION['aca_email'] = $company_email;
		    $_SESSION['aca_pw'] = $company_pwd;
			$_SESSION['aca_reg_no'] = $comp_reg_no;
		    ?><script>window.location.href=" company_register.php";</script><?php
		
		}
		else {
			echo "<script>alert('Failed to Save, Try Again!');</script>";
			//$_SESSION['message'] = 'Registration failed!';
		}
}

?>