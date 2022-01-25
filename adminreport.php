<?php

// Total Applicants

$total_applicant2 = 0;

$total_applicant_query2 = "SELECT * FROM `d0l310_aep` . `aep_user_details`";

$total_applicant_results2 = mysqli_query($connect, $total_applicant_query2);


while ($list = mysqli_fetch_assoc($total_applicant_results2)) {

    $total_applicant2 += 1;
}

// Total Pending

$total_applicant = 0;

$total_applicant_query = "SELECT * FROM `d0l310_aep` . `aep_user_details` where user_status = 'PENDING' or user_status = 'FOR EVALUATION'";

$total_applicant_results = mysqli_query($connect, $total_applicant_query);


while ($list = mysqli_fetch_assoc($total_applicant_results)) {

    $total_applicant += 1;
}
//TOtal Approved

$total_approved = 0;

$total_approved_query = "SELECT * FROM `d0l310_aep` . `aep_user_details` where user_status = 'APPROVED'";

$total_approved_results = mysqli_query($connect, $total_approved_query);


while ($list = mysqli_fetch_assoc($total_approved_results)) {

    $total_approved += 1;
}

//Total

?>