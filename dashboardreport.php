<?php

// Total Applicants

$total_applicant = 0;

$total_applicant_query = "SELECT * FROM `d0l310_aep` . `aep_user_details` where user_status = 'PENDING' or user_status = 'FOR EVALUATION' and company_id = '".$_SESSION['company_id']."' ";

$total_applicant_results = mysqli_query($connect, $total_applicant_query);


while ($list = mysqli_fetch_assoc($total_applicant_results)) {

    $total_applicant += 1;
}

//TOtal Approved

$total_approved = 0;

$total_approved_query = "SELECT * FROM `d0l310_aep` . `aep_user_details` where user_status = 'APPROVED' and company_id = '" . $_SESSION['company_id'] . "' ";

$total_approved_results = mysqli_query($connect, $total_approved_query);


while ($list = mysqli_fetch_assoc($total_approved_results)) {

    $total_approved += 1;
}

//Total

?>