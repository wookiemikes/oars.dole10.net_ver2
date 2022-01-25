<?php
$user_name = $_POST['user_name'];
$userpassword = $_POST['userpassword'];
$un_query = "SELECT * FROM `d0l310_aep` . `aep_user_accounts` WHERE user_name = '" . $username . "'";
$username_check = mysqli_query($connect, $un_query);
if ($username_check->num_rows != 0) {
    echo "<script>alert('Username Already Exists!');</script>";
    header('Location: index.php');
} else {
    // INSERT
    $sql_insert = "INSERT INTO `d0l310_aep` . `aep_user_accounts` set 
				user_name = '" . $user_name . "',
				password = '" . $userpassword . "'";
    //After clicking submit and done inputting data, fields will be cleared
    if (mysqli_query($connect, $sql_insert)) {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['userpassword'] = $userpassword;
?><script>
            window.location.href = " register.php";
        </script><?php

                } else {
                    echo "<script>alert('Failed to Save, Try Again!');</script>";
                    //$_SESSION['message'] = 'Registration failed!';
                }
            }

                    ?>