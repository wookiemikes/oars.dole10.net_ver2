<?php
include 'db/server.php';

// HTML to PDF conversion
if(isset($_POST["print"])){
	$query = "SELECT * FROM `aep_user_details` JOIN aep_user_details_2 ON aep_user_details.user_name = aep_user_details_2.user_name JOIN aep_user_details_3 ON aep_user_details_2.user_name = aep_user_details_3.user_name JOIN aep_user_employment on aep_user_details_3.user_name = aep_user_employment.user_name JOIN aep_user_status ON aep_user_status.user_name = aep_user_employment.user_name WHERE aep_user_details.user_name = '".$_POST['user_name']."'";
	$result = mysqli_query($connect,$query);
	while ($list = mysqli_fetch_assoc($result)) {
		$fname = $list['fname'];
		$mname = $list['mname'];
		$lname = $list['lname'];
		$nationality = $list['nationality'];
		$gender = $list['gender'];
		$tin = $list['tin'];
		$marital_status =$list['marital_status'];
		$b_date = $list['b_date'];
		$place_of_birth = $list['place_of_birth'];
		$application_type = $list['application_type'];
		$passport_no = $list['passport_no'];
		$place_issuance = $list['place_issuance'];
		$date_issuance = $list['date_issuance'];
		$expiration_date = $list['expiration_date'];
		$visa = $list['visa'];
		$visa_validity = $list['visa_validity'];
		$highest_educ = $list['highest_educ'];
		$course = $list['course'];
		$address_ph = $list['address_ph'];
		$contact_no = $list['contact_no'];
		$email_add = $list['email_add'];
		$permanent_add_abroad = $list['permanent_add_abroad'];
		$position = $list['position'];
		$assignment = $list['assignment'];
		$name_of_company = $list['name_of_company'];
		$company_address = $list['company_address'];
		$company_contact = $list['company_contact'];
		$company_email = $list['company_email'];
		$nature = $list['nature'];
				
	}
	if ($result){
	require_once('tcpdf/tcpdf.php');// imports tcpdf library
	class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        $this->SetFont('helvetica', '', 8);
        // Title
		$content = '
		<p align="right">PM-NCR-3.01-F.02.R01</p>
		<p align="center">
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				REPUBLIC OF THE PHILIPPINES <br />
				DEPARTMENT OF LABOR AND EMPLOYMENT <br />
				Regional Office No. X <br />
				Northern Mindanao <br />
				<br>
				<br>
				<br>
				<br>
				
				<h2 align="center"><b>ALIEN EMPLOYMENT PERMIT APPLICATION FORM</b></h2>'; 
		$this->writeHTML($content);  
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$this->Image('assets/img/labor.png', 35, 13, 20, 20, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
     
    }
}

	$obj_pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
	$obj_pdf->SetCreator(PDF_CREATOR);  
	$obj_pdf->SetTitle("profile_pdf");  
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$obj_pdf->SetDefaultMonospacedFont('helvetica');  
	$obj_pdf->SetFooterMargin('15');  
	$obj_pdf->setHeaderMargin(3);
	$obj_pdf->setPrintFooter(false);  
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '40', PDF_MARGIN_RIGHT);  
	$obj_pdf->SetAutoPageBreak(TRUE, 10);  
	$obj_pdf->SetFont('helvetica', '', 8);  
	$obj_pdf->AddPage();  
	$content = '';  
	$content .= '  
	<style>
	table {
		border-collapse: collapse;
		border: 1px solid white;
	}
	</style>

	<table>
		<br>
		<br>
		<br>
		<p><b>Please supply all required information.</b> Misinterpretation, false statement or fraud in this application or in any supporting document is ground for denial/ revocation/cancellation of permit</p>
		<br>
		<tr >
            <td colspan="4" style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;"><h2><b>I. TYPE OF APPLICATION: </b></h2></td>
            <td colspan="4" style="border-top: 1px solid black; border-bottom: 1px solid black; border-right: 1px solid black;">'.$application_type.'</td>
		</tr>
		<tr >
            <td></td>
		</tr>

        <tr>
            <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;" colspan="8"><h2><b>II. PERSONAL DATA</b></h2></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid black;" colspan="1">
                <h3><b>Name:</b></h3>
			</td>
			<td style="border-bottom: 1px solid black;" colspan="2">
                <p>'.$lname.'</p>
			</td>
			<td style="border-bottom: 1px solid black;" colspan="2">
                <p>'.$fname.'</p>
			</td>
			<td style=" border-bottom: 1px solid black;" colspan="2">
                <p>'.$mname.'</p>
			</td>
			<td style="border-right: 1px solid black;" colspan="1">
                <h3><b></b></h3>
			</td>


			

		</tr>
		<tr>
			<td style="border-left: 1px solid black;" colspan="2">
                <p>.</p>
			</td>
			<td colspan="2"><i><p>(Last name)</p></i></td>
            <td colspan="2"><i><p>(First name)</p></i></td>
            <td colspan="2" style="border-right: 1px solid black;"><i><p>(Middle name)</p></i></td>


		</tr>
		<tr>
			<td style="width: 12%;border-left: 1px solid black;">
				<h3><b>Nationality:</b></h3>
			</td> 
			<td style="width: 13%;border-bottom: 1px solid black;">
				<p>'.$nationality.'</p>
			</td>
			<td style="width: 10%;">
				<h3><b>Sex:</b></h3>
			</td>
			<td style="border-bottom: 1px solid black;">
				<p>'.$gender.'</p>
			</td>
			<td style="width: 15%;">
				<h3><b>Marital Status:</b></h3>
			</td>
			<td style="width: 15%;border-bottom: 1px solid black;">
				<p></p>
			</td>
			<td style="width: 5%;">
				<h3><b>Tin:</b></h3>
			</td>
			<td style="width: 15%;border-bottom: 1px solid black;">
				<p>'.$tin.'</p>
			</td>
			<td style="border-right: 1px solid black;"><p></p></td>

		</tr>
		<tr>
			<td style="border-left: 1px solid black;" colspan="8"></td>
			<td style="border-right: 1px solid black;" colspan=""></td>
		</tr>	
		<tr>
			<td style="width: 15%; border-left: 1px solid black;"><h3> <b>Date of Birth:</b> </h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$b_date.'</td>
			<td style="width: 15%;"><h3><b>Place of Birth:</b></h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$place_of_birth.'</td>
			<td style="width: 20%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid black;border-right: 1px solid black;" colspan="5"></td>
			<td style="border-right: 1px solid black;" colspan=""></td>
		</tr>
		<tr>
			<td style="width: 15%;border-left: 1px solid black;">
				<h4><b>Passport Number:</b></h4>
			</td> 
			<td style="width: 15%;border-bottom: 1px solid black;">
				<p>'.$passport_no.'</p>
			</td>
			<td style="width: 15%;">
				<h4><b>Place of Issuance:</b></h4>
			</td>
			<td style="border-bottom: 1px solid black;">
				<p>'.$place_issuance.'</p>
			</td>
			<td style="width: 15%;">
				<h3><b>Issuance Date:</b></h3>
			</td>
			<td style="width: 10%;border-bottom: 1px solid black;">
				<p>'.$date_issuance.'</p>
			</td>
			<td style="border-right: 1px solid black;"><p></p></td>

		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="7"></td>
		</tr>
		<tr>
			<td style="width: 15%;border-left: 1px solid black;">
				<h4><b>Expiration Date:</b></h4>
			</td> 
			<td style="width: 10%;border-bottom: 1px solid black;">
				<p>'.$expiration_date.'</p>
			</td>
			<td style="width: 10%;">
				<h3><b>Visa:</b></h3>
			</td>
			<td style="border-bottom: 1px solid black;">
				<p>'.$visa. '</p>
			</td>
			<td style="width: 15%;">
				<h3><b>Visa Validity:</b></h3>
			</td>
			<td style="width: 20%;border-bottom: 1px solid black;">
				<p>' . $visa_validity . '</p>
			</td>
			<td style="border-right: 1px solid black;"><p></p></td>

		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="7"></td>
		</tr>
		<tr>
			<td style="width: 35%; border-left: 1px solid black;"><h3> <b>Highest Educational Attainment:</b> </h3></td>
			<td style="width: 10%;border-bottom: 1px solid black;">'.$highest_educ.'</td>
			<td style="width: 20%;"><h3><b>Course of Study:</b></h3></td>
			<td style="width: 20%;border-bottom: 1px solid black;">'.$course.'</td>
			<td style="width: 15%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td style="width: 35%;border-left: 1px solid black;"><h2><b>Address in the Philippines: </b></h2></td>
			<td style="width: 55%;border-bottom: 1px solid black;">'.$address_ph.'</td>
			<td style="width: 10%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="width: 20%; border-left: 1px solid black;"><h3> <b>Contact Number</b> </h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$contact_no.'</td>
			<td style="width: 20%;"><h3><b>Email Address</b></h3></td>
			<td style="width: 20%;border-bottom: 1px solid black;">'.$email_add.'</td>
			<td style="width: 15%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td style="width: 35%;border-left: 1px solid black;"><h3><b>Permanent Address Abroad: </b></h2></td>
			<td style="width: 55%;border-bottom: 1px solid black;">'.$permanent_add_abroad.'</td>
			<td style="width: 10%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr >
            <td></td>
		</tr>

        <tr>
            <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;" colspan="3"><h2><b>III. PRESENT EMPLOYMENT</b></h2></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="width: 20%; border-left: 1px solid black;"><h3> <b>Position</b> </h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$position.'</td>
			<td style="width: 20%;"><h3><b>Assignment</b></h3></td>
			<td style="width: 20%;border-bottom: 1px solid black;">'.$assignment.'</td>
			<td style="width: 15%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td style="width: 35%;border-left: 1px solid black;"><h3><b>Name Of Compnay/Employer:</b></h2></td>
			<td style="width: 60%;border-bottom: 1px solid black;">'.$name_of_company.'</td>
			<td style="width: 5%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr >
            <td style="width: 35%;border-left: 1px solid black;"><h3><b>Address of Company/Employer</b></h2></td>
			<td style="width: 60%;border-bottom: 1px solid black;">'.$company_address.'</td>
			<td style="width: 5%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="width: 20%; border-left: 1px solid black;"><h3> <b>Contact Number</b> </h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$company_contact.'</td>
			<td style="width: 15%;"><h3><b>Email Address</b></h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;">'.$company_email.'</td>
			<td style="width: 15%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td style="width: 25%;border-left: 1px solid black;"><h3><b>Nature of Business: </b></h2></td>
			<td style="width: 60%;border-bottom: 1px solid black;">'.$nature.'</td>
			<td style="width: 15%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr>
            <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;" colspan="3"><h3><b>IV. EMPLOYMENT HISTORY IN THE PHILIPPINES:</b> (Please attach additional sheet if necessary)</h3></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="width: 5%; border-left: 1px solid black;"></td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">Employers Name and Address</td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">Position</td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">Duration of Employment</td>
			<td style="width: 5%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="width: 5%; border-left: 1px solid black;"></td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;"></td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;"></td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;"></td>
			<td style="width: 5%; border-right: 1px solid black;"></td>
		</tr>
		
		<tr>
			<td style="width: 5%; border-left: 1px solid black;"></td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">
				
			</td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">
				
			</td>
			<td style="width: 30%;border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;">
				
			</td>
			<td style="width: 5%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr>
			<td style="width: 50%; border-left: 1px solid black;"><h3> <b>Have your application been previously denied?</b> </h3></td>
			<td style="width: 10%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%;"><h3><b>When?</b></h3></td>
			<td style="width: 20%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr>
			<td style="width: 45%; border-left: 1px solid black;"><h3> <b>Have your AEP been cancelled/revoked?</b> </h3></td>
			<td style="width: 15%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%;"><h3><b>When?</b></h3></td>
			<td style="width: 20%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td style="width: 50%;border-left: 1px solid black;"><h4><b>Please state reason for denial/cancellation/revocation:</b></h4></td>
			<td style="width: 40%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr >
            <td style="width: 25%;border-left: 1px solid black;"><h4><b>What actions have you taken?</b></h4></td>
			<td style="width: 65%;border-bottom: 1px solid black;"></td>
			<td style="width: 10%; border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;" colspan="3"></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr>
            <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;" colspan="3"><h3><b>V. DECLARATION:</b> </h3></td>
		</tr>

		<tr>
			<td style=" width: 100%;border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style=" width: 100%;border-right: 1px solid black;border-left: 1px solid black;" colspan="1"><h3>I declare statements made in this application are true and correct to the best of my knowledge and belief and I will abide the Philippine laws, rules and regulation.</h3></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="width: 15%; border-left: 1px solid black;"><h3> <b></b> </h3></td>
			<td style="width: 30%;border-bottom: 1px solid black;"></td>
			<td style="width: 15%;"><h3><b></b></h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;"></td>
			<td style="width: 15%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="width: 15%; border-left: 1px solid black;"><h3> <b></b> </h3></td>
			<td style="width: 30%;"><p>Name and Signature of the Applicant</p></td>
			<td style="width: 15%;"><h3><b></b></h3></td>
			<td style="width: 35%;">Date</td>
			<td style="width: 5%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;" colspan="5"></td>
		</tr>
		<tr >
            <td></td>
		</tr>
		<tr>
            <td style="border-top: 1px solid black; border-right: 1px solid black; border-left: 1px solid black;" colspan="5"><h3><b>V. ENDORSEMENT BY THE EMPLOYER:</b> </h3></td>
		</tr>

		<tr>
			<td style=" width: 100%;border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style=" width: 100%;border-right: 1px solid black;border-left: 1px solid black;" colspan="1"><h3>I certify that all the information writtern above are true and correct and currently I employ ____ Filipino nationals and _____ foreign nationals.</h3></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="1"></td>
		</tr>
		<tr>
			<td style="width: 5%; border-left: 1px solid black;"><h3> <b></b> </h3></td>
			<td style="width: 30%;border-bottom: 1px solid black;"></td>
			<td style="width: 5%;"><h3><b></b></h3></td>
			<td style="width: 25%;border-bottom: 1px solid black;"></td>
			<td style="width: 5%;"></td>
			<td style="width: 25%;border-bottom: 1px solid black;"></td>
			<td style="width: 5%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="width: 5%; border-left: 1px solid black;"><h3> <b></b> </h3></td>
			<td style="width: 30%;"><p>Name and Signature of the Applicant</p></td>
			<td style="width: 5%;"><h3><b></b></h3></td>
			<td style="width: 25%;"><p>Position</p></td>
			<td style="width: 5%;"></td>
			<td style="width: 25%;"><p>Date</p></td>
			<td style="width: 5%;border-right: 1px solid black;"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-left: 1px solid black;" colspan="7"></td>
		</tr>
		<tr>
			<td style="border-right: 1px solid black;border-bottom: 1px solid black;border-left: 1px solid black;" colspan="7"></td>
		</tr>


		
		


		
		



 
	 
	';  

	$content .= '</table>';  
	$obj_pdf->writeHTML($content);
	ob_end_clean();
	$obj_pdf->Output('aepform_tocomplete.pdf', 'I');  
	}
}
?>
