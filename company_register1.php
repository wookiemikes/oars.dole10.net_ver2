<?php

//$mysqli = new mysqli('localhost', 'd0l310_aep', 'd0l310_aep', 'd0l310_aep');
$mysqli = new mysqli("localhost", "root", "", "d0l310_aepdb");
if (isset($_POST['comp_register'])) {
    $aca_reg_no = $_POST['aca_reg_no'];
    $acd_reg_no = $_POST['acd_reg_no'];
    $acd_comp_name = $_POST['acd_comp_name'];
    $acd_st = $_POST['acd_st'];
    $acd_prov = $_POST['acd_prov'];
    $acd_muni = $_POST['acd_muni'];
    $acd_owner = $_POST['acd_owner'];
    $acd_position = $_POST['acd_position'];
    $acd_contact_no = $_POST['acd_contact_no'];
    $acd_email = $_POST['acd_email'];
    $acd_nob = $_POST['acd_nob'];

    $inserta = $mysqli->query("INSERT INTO `d0l310_aepdb` . `aep_comp_details_tbl` SET
        aca_reg_no = '" . $aca_reg_no . "',
        acd_reg_no = '" . $acd_reg_no . "',
        acd_comp_name = '" . $acd_comp_name . "',
        acd_st = '" . $acd_st . "',
        acd_prov = '" . $acd_prov . "',
        acd_muni = '" . $acd_muni . "',
        acd_owner = '" . $acd_owner . "',
        acd_position = '".$acd_position."',
        acd_contact_no = '" . $acd_contact_no . "',
        acd_email = '" . $acd_email . "',
        acd_nob = '" . $acd_nob . "'");


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