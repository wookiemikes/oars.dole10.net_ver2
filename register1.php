<?php

//$mysqli = new mysqli('localhost', 'd0l310_aep', 'd0l310_aep', 'd0l310_aep');
$mysqli = new mysqli('localhost', 'root', '', 'd0l310_aep');
if (isset($_POST['register'])) {
    $company_id = $_POST['company_id'];
    $id_comp = $_POST['id_comp'];
    $application_type = $_POST['application_type'];
    $user_firstname = $_POST['user_firstname'];
    $user_middlename = $_POST['user_middlename'];
    $user_lastname = $_POST['user_lastname'];
    $user_nationality = $_POST['user_nationality'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $user_tin = $_POST['user_tin'];
    $user_dob = $_POST['user_dob'];
    $user_place_birth = $_POST['user_place_birth'];
    $user_passport = $_POST['user_passport'];
    $user_place_issuance = $_POST['user_place_issuance'];
    $user_issuance_date = $_POST['user_issuance_date'];
    $user_pass_exp = $_POST['user_pass_exp'];
    $user_visa = $_POST['user_visa'];
    $user_visa_valid = $_POST['user_visa_valid'];
    $user_educ = $_POST['user_educ'];
    $user_course = $_POST['user_course'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_email = $_POST['user_email'];
    $user_abroad = $_POST['user_abroad'];
    $comp_position = $_POST['comp_position'];
    $comp_assign = $_POST['comp_assign'];
    $comp_name = $_POST['comp_name'];
    $comp_address = $_POST['comp_address'];
    $comp_contact = $_POST['comp_contact'];
    $comp_email = $_POST['comp_email'];
    $gdrive_link = $_POST['gdrive_link'];
    $nature = $_POST['nature'];
    $user_status = 'PENDING';
    $aep_number = 'NOT AVAILABLE';
    $date_created = date("Y-m-d");
    $date_approved = date("Y-m-d");

    $inserta = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_user_details` SET
        company_id = '" . $company_id . "',
        id_comp = '" . $id_comp . "',
        fname = '" . $user_firstname . "',
        mname = '" . $user_middlename . "',
        lname = '" . $user_lastname . "',
        nationality = '" . $user_nationality . "',
        gender = '" . $gender ."',
        marital_status = '" . $marital_status . "',
        tin = '" . $user_tin . "',
        b_date = '" . $user_dob . "',
        place_of_birth = '" . $user_place_birth ."',
        user_status = '" . $user_status . "',
        application_type = '" . $application_type . "'");


    $insertb = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_user_details_2` SET
        id_comp = '" . $id_comp . "',
        company_id = '" . $company_id . "',
        passport_no = '" . $user_passport . "',
        place_issuance = '" . $user_place_issuance . "',
        date_issuance = '" . $user_issuance_date . "',
        expiration_date = '" . $user_pass_exp . "',
        visa = '" . $user_visa . "',
        visa_validity = '" . $user_visa_valid . "'");
  

    $insertc = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_user_details_3` SET
        id_comp = '" . $id_comp . "',
        company_id = '" . $company_id . "',
        highest_educ = '" . $user_educ . "',
        course = '" . $user_course . "',
        address_ph = '" . $user_address . "',
        contact_no = '" . $user_contact . "',
        email_add = '" . $user_email . "',
        permanent_add_abroad = '" . $user_abroad . "'");



    $insertd = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_user_employment` SET
        id_comp = '" . $id_comp . "',
        company_id = '" . $company_id . "',
        position = '" . $comp_position . "',
        assignment = '" . $comp_assign . "',
        name_of_company = '" . $comp_name . "',
        company_address = '" . $comp_address . "',
        company_contact = '" . $comp_contact . "',
        company_email = '" . $comp_email . "',
        nature = '" . $nature . "'");



    $inserte = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_user_status` SET
        id_comp = '" . $id_comp . "',
        company_id = '" . $company_id . "',
        gdrive_link = '" . $gdrive_link . "',
        aep_number = '" . $aep_number . "',
        date_created = '" . $date_created . "',
        date_approved = '" . $date_approved . "'");

    if (mysqli_query($connect, $inserta)) {
        //echo "Upload Successful";
    } else {
       // echo "Upload Failed";
    }
    if (mysqli_query($connect, $insertb)) {
        //echo "Upload Successful";
    } else {
        //echo "Upload Failed";
    }
    if (mysqli_query($connect, $insertc)) {
        //echo "Upload Successful";
    } else {
        //echo "Upload Failed";
    }
    if (mysqli_query($connect, $insertd)) {
        //echo "Upload Successful";
    } else {
        //echo "Upload Failed";
    }


    if ($inserte) {
?>
        <script type="text/javascript">
            if (window.confirm('Added')) {
                window.location.href = 'dashboard.php';
            } else {
                window.confirm('Error, Please Try Again!');
                window.location.href = 'dashboardreg.php';
            }
        </script>
<?php
    }
}

?>