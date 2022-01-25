<?php

//$mysqli = new mysqli('localhost', 'd0l310_aep', 'd0l310_aep', 'd0l310_aep');
$mysqli = new mysqli("localhost", "root", "", "d0l310_aep");
if (isset($_POST['comp_register'])) {
    $company_id = $_POST['company_id'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $company_contact = $_POST['company_contact'];
    $company_person = $_POST['company_person'];
    $company_email = $_POST['company_email'];
    $nature_of_business = $_POST['nature_of_business'];
    $ein = $_POST['ein'];
    $date_registered = date("Y-m-d");

    $inserta = $mysqli->query("INSERT INTO `d0l310_aep` . `aep_company` SET
        company_id = '".$company_id."',
        company_name = '" . $company_name . "',
        company_address = '" . $company_address . "',
        company_contact = '" . $company_contact . "',
        company_person = '" . $company_person . "',
        company_email = '" . $company_email . "',
        nature_of_business = '" . $nature_of_business . "',
        ein = '".$ein."',
        date_registered = '" . $date_registered . "'");


    if (mysqli_query($connect, $inserta)) {
        echo "Upload Successful";
    } else {
        echo "Upload Unsuccessful";
    }


    if ($inserta) {
?>
        <script type="text/javascript">
            if (window.confirm('Login to Continue.')) {
                window.location.href = 'index.php';
            } else {
                window.confirm('Error, Please Try Again!');
                window.location.href = 'company_register.php';
            }
        </script>
<?php
    }
}

?>