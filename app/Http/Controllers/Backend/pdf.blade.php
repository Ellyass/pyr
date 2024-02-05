@extends('backend.layout')
@section('content')

@endsection
@section('css')@endsection
@section('js')@endsection

<?php
use App\Model\Customer;
$customer =  $_POST['customer_id'];
$customer_name = Customer::find($customer);
$seller =  $_POST['target_Seller_id'];
$alici =  $_POST['alici'];
$accept_type =  $_POST['accept_type'];
$year =  $_POST['year'];$_POST['offer_explanation'];
$offer_date =  $_POST['offer_date'];
$explanation = $_POST['offer_explanation'];
$month = $_POST['month'];
$date = date("m-d-Y", strtotime($offer_date));
if ($month==50)
{
    $a = '0-20';
}
if ($month==5)
{
    $a='21-30';
}
if ($month==4)
{
    $a='301-1000';
}
function firma()
{
    $customer =  $_POST['customer_id'];
    $customer_name = Customer::find($customer);
    $name = $customer_name->name;
    return iconv('utf-8','windows-1254',$name);
}
function alici()
{
    $alici =  $_POST['alici'];


    return iconv('utf-8','windows-1254',$alici);
}
function accept_type()
{
    $accept_type =  $_POST['accept_type'];


    return iconv('utf-8','windows-1254',$accept_type);
}

use setasign\Fpdi\Fpdi;
require_once __DIR__ . '../../../../vendor/setasign/fpdi/src/autoload.php';
require_once __DIR__ . '../../../../vendor/setasign/fpdf/fpdf.php';


function turkce($k)
{
    return iconv('utf-8','windows-1254',$k);
}

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('/home/morepayroll/arge.morepayroll.com/resources/views/backend/pdf/ikmetrik.pdf');
// import page 1
$tplId = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm

$pdf->AddPage();
$pdf->SetFont('Helvetica');
$pdf->SetFontSize('15'); // set font size
$pdf->SetXY(12, 212); // set the position of the box
$pdf->Cell(0, 0, $date, 0, 0, 'C');
$pdf->SetXY(75, 230);
$pdf->AddFont('arial_tr','','arial_tr.php');
$pdf->AddFont('arial_tr','B','arial_tr_bold.php');
$pdf->SetFont('arial_tr','',14);
$pdf->SetFont('arial_tr');
$pdf->Cell(0, 0, firma(), 0, 0, 'C');


// set font size
$pdf->SetXY(0, 247.5); // set the position of the box
$pdf->AddFont('arial_tr','','arial_tr.php');
$pdf->AddFont('arial_tr','B','arial_tr_bold.php');
$pdf->SetFont('arial_tr','',14);
$pdf->SetFont('arial_tr');
$pdf->Cell(0, 0, alici(), 0, 0, 'C');




$tplId = $pdf->importPage(2);
$pdf->useTemplate($tplId, 10, 0, 200);
$pdf->AddPage();
// set font size
$pdf->SetXY(-317, 62.2);
// set the position of the box
$pdf->AddFont('arial_tr','','arial_tr.php');
$pdf->AddFont('arial_tr','B','arial_tr_bold.php');
$pdf->SetFont('arial_tr','',14);
$pdf->SetFont('arial_tr');
$pdf->Cell(0, 0, alici(), 0, 0, 'C');



$tplId = $pdf->importPage(3);
$pdf->useTemplate($tplId, 10, 0, 200);




$pdf->AddPage();
$tplId = $pdf->importPage(4);
$pdf->useTemplate($tplId, 10, 0, 200);





$pdf->AddPage();
$tplId = $pdf->importPage(5);
$pdf->useTemplate($tplId, 10, 0, 200);







$pdf->AddPage();
$pdf->SetXY(-317, 62.2);
// set the position of the box
$pdf->SetXY(-305, 128); // set the position of the box
$pdf->AddFont('arial_tr','','arial_tr.php');
$pdf->AddFont('arial_tr','B','arial_tr_bold.php');
$pdf->SetFont('arial_tr','',16);
$pdf->SetFont('arial_tr');
$pdf->Cell(0, 0, accept_type(), 0, 0, 'C');



$pdf->SetFont('Helvetica');
$pdf->SetFontSize('20'); // set font size
$pdf->SetXY(109.5, 128); // set the position of the box
$pdf->Cell(1, 1, $a, 4, 3, 'C');
$pdf->SetFont('Helvetica');
$pdf->SetFontSize('20'); // set font size
$pdf->SetXY(165, 128); // set the position of the box
$pdf->Cell(1, 1, $month, 4, 3, 'C');
$tplId = $pdf->importPage(6);
$pdf->useTemplate($tplId, 10, 0, 200);


         //$pdf->Output('D');

$path = $offer_id.'.'.'pdf';
//$date = $pdf->Output($path,'S');
$date = $pdf->Output($path,'F');
//$filename='ikmetrik.pdf';
//$date =  $pdf->Output($filename,'F');
//$pdf->Output('S','dosya.pdf');

// $deneme = $pdf->Output('D',firma());


?>











