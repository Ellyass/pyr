@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <?php
$egitim = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>HTML2PDF</title>
<style type="text/css">
input, textarea {
    font-family: lucida console;
    font-size: 9pt;
    border: 1px solid #B0B0B0;
}
body {
    font-family: lucida console;
    font-size: 9pt;
    background-color: #F0F0F0;
}
</style>
</head>
<body>
<h1>HTML2PDF</h1>
<div style="border: 1px solid black">
Supported tags are the following:
<ul type="square">
<li>&lt;br&gt; and &lt;p&gt;</li>
<li>&lt;b&gt;, &lt;i&gt; and &lt;u&gt;</li>
<li>&lt;img&gt; (src and width (or height) are mandatory)</li>
<li>&lt;a&gt; (href is mandatory)</li>
<li>&lt;font&gt;: possible attributes are
<ul>
<li>color: hex color code</li>
<li>face: available fonts are: arial, times, courier, helvetica, symbol</li>
</ul>
</li>
</ul>
To display these tags without interpreting them, use &amp;lt; and &amp;gt;
</div><br> </body>
</html>';
                $offer_date = '19.09.1999';
                $date = date("d.m.Y", strtotime($offer_date));

                // use App\Model\Customer;
                // $customer =  $_POST['customer_id'];
                // $customer_name = Customer::find($customer);
                // $date = date("d.m.Y", strtotime($offer_date));

                use setasign\Fpdi\Fpdi;
                require_once __DIR__ . '../../../../vendor/setasign/fpdi/src/autoload.php';
                require_once __DIR__ . '../../../../vendor/setasign/fpdf/fpdf.php';
               // require_once __DIR__ . '../../../../vendor/setasign/html2pdf.php';







              //  $home = iconv('utf-8','windows-1254',$egitim_icerigi);




                // initiate FPDI
                $pdf = new Fpdi();
                // add a page

                // set the source file
                $pdf->setSourceFile('C:\wamp64\www\payroll2\resources\views\backend\pdf/egitim.pdf');
                // import page 1
                $pdf->AddPage();
                $tplId = $pdf->importPage(1);
                $pdf->useTemplate($tplId, 5, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('15'); // set font size
                $pdf->SetXY(38, 215.5); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');



                $pdf->AddPage();
                $tplId = $pdf->importPage(2);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('11'); // set font size
                $pdf->SetXY(163, 82.8); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');




                $pdf->AddPage();
                $tplId = $pdf->importPage(3);
                $pdf->useTemplate($tplId, 10, 0, 200);


                $pdf->AddPage();
                $tplId = $pdf->importPage(4);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',14);
                $pdf->SetFont('arial_tr');
                $pdf->SetXY(0, 145);
                $pdf->WriteHTML('<font face="times">The </font><b><font color="#7070D0">FPDF</font></b><font face="times"> logo:</font>
<br><br>');


                $pdf->AddPage();
                $tplId = $pdf->importPage(5);
                $pdf->useTemplate($tplId, 10, 0, 200);





                //$pdf->Output('D');

                // $path = '/home/morepayroll/arge.morepayroll.com/public/pdf/'.$offer_id.'.'.'pdf';
                //$date = $pdf->Output($path,'S');
                // $date = $pdf->Output($path,'F');
                //$filePath = public_path().'/pdf/';
                //move_uploaded_file($path, $filePath);

                //$filename='ikmetrik.pdf';
                //$date =  $pdf->Output($filename,'F');
                //$pdf->Output('S','dosya.pdf');
                ob_end_clean();
                ob_end_flush();
                $pdf->Output();


                ?>


            </div>
        </div>
    </section>

@endsection
@section('css')@endsection
@section('js')

    <script>

        $(document).ready(function() {
            swal(
                'Tebrikler Pdf Oluşmuştur',
                'Teklif Tablomdan İndirebilirsiniz'

            )
        });
    </script>

@endsection




















