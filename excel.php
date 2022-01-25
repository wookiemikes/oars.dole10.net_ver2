<?php 
session_start();

require 'phpspreadsheet/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
include 'db/server.php';
$export = new Spreadsheet();

$export->setActiveSheetIndex(0);
$query = mysqli_query($connect, "SELECT * FROM `aep_user_details` JOIN aep_user_details_2 ON aep_user_details.id_comp = aep_user_details_2.id_comp JOIN aep_user_details_3 on aep_user_details_2.id_comp = aep_user_details_3.id_comp JOIN aep_user_employment ON aep_user_details_3.id_comp = aep_user_employment.id_comp JOIN aep_user_status ON aep_user_status.id_comp = aep_user_employment.id_comp WHERE aep_user_details.user_status = 'APPROVED'");
$row = 3;
while($list = mysqli_fetch_object($query)){
	
	$export->getActiveSheet()
	->setCellValue('A'.$row, $list->fname)
	->setCellValue('B'.$row, $list->mname)
	->setCellValue('C'.$row, $list->lname)
    ->setCellValue('D'.$row, $list->b_date)
    ->setCellValue('E'.$row, $list->address_ph)
    ->setCellValue('F' .$row, $list->contact_no)
    ->setCellValue('G'.$row, $list->email_add)
	->setCellValue('H'.$row, $list->nationality)
	->setCellValue('I'.$row, $list->gender)
	->setCellValue('J'.$row, $list->tin)
    ->setCellValue('K'.$row, $list->passport_no)
    ->setCellValue('L'.$row, $list->visa)
    ->setCellValue('M'.$row, $list->name_of_company)
    ->setCellValue('N'.$row, $list->position)
    ->setCellValue('O'.$row, $list->company_address)
    ->setCellValue('P'.$row, $list->application_type)
    ->setCellValue('Q'.$row, $list->aep_number)
    ->setCellValue('R'.$row, $list->date_approved);

	$row++;
}
$export->getActiveSheet()->getColumnDimension('A')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('B')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('C')->setwidth(10);
$export->getActiveSheet()->getColumnDimension('D')->setwidth(30);
$export->getActiveSheet()->getColumnDimension('E')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('F')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('G')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('H')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('I')->setwidth(30);
$export->getActiveSheet()->getColumnDimension('J')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('K')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('L')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('M')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('N')->setwidth(30);
$export->getActiveSheet()->getColumnDimension('O')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('P')->setwidth(40);
$export->getActiveSheet()->getColumnDimension('Q')->setwidth(20);
$export->getActiveSheet()->getColumnDimension('R')->setwidth(20);

$export->getActiveSheet()
->setCellValue('A1','AEP Report')
->setCellValue('A2','FIRST NAME')
->setCellValue('B2','MIDDLE NAME')
->setCellValue('C2','LAST NAME')
->setCellValue('D2','BIRTH DATE')
->setCellValue('F2','ADDRESS')
->setCellValue('E2','CONTACT NUMBER')
->setCellValue('G2','EMAIL ADDRESS')
->setCellValue('H2','NATIONALITY')
->setCellValue('I2','GENDER')
->setCellValue('J2','TIN')
->setCellValue('K2','PASSPORT NUMBER')
->setCellValue('L2','VISA')
->setCellValue('M2','NAME OF COMPANY')
->setCellValue('N2','POSITION')
->setCellValue('O2','COMPANY ADDRESS')
->setCellValue('P2','APPLICATION TYPE')
->setCellValue('Q2','AEP Number')
->setCellValue('R2','DATE APPROVED');



$export->getActiveSheet()->mergeCells('A1:R1');

$export->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
$export->getActiveSheet()->getStyle('A2:R2')->getAlignment()->setHorizontal('center');

$export->getActiveSheet()->getStyle('A1')->getFill()
    ->setFillType(PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR)
    ->setStartColor(new PhpOffice\PhpSpreadsheet\Style\Color(PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLUE))
    ->setEndColor(new PhpOffice\PhpSpreadsheet\Style\Color(PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE))
    ->setRotation(45);
$export->getActiveSheet()->getStyle('A1')->applyFromArray(
	array(
		'font'=>array(
			'size'=> 24,
			'bold'=>true,
		)
	)
);
$export->getActiveSheet()->getStyle('A2:R2')->applyFromArray(
	array(
		'font'=>array(
			'bold'=> true
		),
		'borders'=>array(
			'allborders'=>array(
				'style'=>PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
			)
		)
	)
);
$export->getActiveSheet()->getStyle('A3:R'.($row-1))->applyFromArray(
	array(
		'borders'=>array(
			'outline'=>array(
				'style'=>PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
			),
			'vertical'=> array(
				'style'=>PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
			)
		)
	)
);
header('Content-Type: application/vnd.openxmlformats-officedocumnets.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="AEP MASTERLIST.xlsx"');
header('Content-Control: max-age=0');
$file = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($export,'Xlsx');
$file->save('php://output');
