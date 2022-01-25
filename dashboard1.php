<?php 
include 'login.php';
$true = ",disabled: true;";
$readonly = "readonly"; /*All input type set to readonly*/
$disabled = "disabled"; /*Dropdaown and Date are Disabled*/
$sql_prof = "SELECT * FROM aep_company where company_email ='" . $_SESSION['company_email'] . "'";
$result = mysqli_query($connect,$sql_prof);
while ($list = mysqli_fetch_assoc($result)){
    $company_id = $list['company_id'];
    $company_email = $list['company_email'];
    $company_address = $list['company_address'];
    $nature_of_business = $list['nature_of_business'];
    $company_name = $list['company_name'];
    $company_contact = $list['company_contact'];
    $company_person = $list['company_person'];
    $ein = $list['ein'];
    $company_id = $list['company_id'];
    $_SESSION['company_email'] = $list['company_email'];
    $_SESSION['company_id'] = $list["company_id"];
		

}
