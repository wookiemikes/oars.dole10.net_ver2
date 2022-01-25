<?php 

$mysqli = new mysqli('localhost', 'root', '', 'd0l310_aep');
//upload 1
if (isset($_POST['upload1'])) {

		$username = $_POST['username'];
		$date_uploaded = date('Y-m-d');

        $file1 = $_FILES['file1']['name'];
	    $target =  "uploads/1/".basename($_FILES['file1']['name']);
	    move_uploaded_file($_FILES["file1"]["tmp_name"], $target );
	    if ($_FILES["file1"]["size"] > 5000000) // Max File Size: 5MB
	    {
	    echo "File size exceeds maximum.";
		}

		$sqlfile1 = "INSERT INTO `aep_user_files` (`aep_file_id`, `user_name`, `file_name`, `date_uploaded`)
		 VALUES ('', '".$username."', '$file1', '".$date_uploaded."');";


	    if (mysqli_query($connect,$sqlfile1)){
	            echo "<script>File Uploaded Successfully</script>";
	        } else {
	            echo "Upload Failed";
	        }
}


?>