@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <?php
                use App\Model\Customer;
                $customer =  $_POST['customer_id'];
                $customer_name = Customer::find($customer);
                $seller =  $_POST['target_Seller_id'];
                $alici =  $_POST['alici'];
                $accept_type =  $_POST['accept_type'];
                $year =  $_POST['year'];

                $offer_date =  $_POST['offer_date'];
                $explanation = $_POST['offer_explanation'];
                $month = $_POST['month'];
                $date = date("d.m.Y", strtotime($offer_date));





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

                // set the source file
                $pdf->setSourceFile('/home/morepayroll/arge.morepayroll.com/resources/views/backend/pdf/ikmetrik.pdf');
                // import page 1
                $pdf->AddPage();
                $tplId = $pdf->importPage(1);
                $pdf->useTemplate($tplId, 5, 0, 200);
                // use the imported page and place it at point 10,10 with a width of 100 mm

                $pdf->AddPage();
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('15'); // set font size
                $pdf->SetXY(12, 212); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');


                $pdf->SetXY(86, 230);
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',14);
                $pdf->SetFont('arial_tr');
                $pdf->Cell(0, 0, firma(), 0, 0, 'L');


                // set font size
                $pdf->SetXY(85, 247.5); // set the position of the box
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',14);
                $pdf->SetFont('arial_tr');
                $pdf->Cell(0, 0, alici(), 0, 0, 'L');




                $tplId = $pdf->importPage(2);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddPage();
                // set font size
                $pdf->SetXY(30, 62.2);
                // set the position of the box
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',14);
                $pdf->SetFont('arial_tr');
                $pdf->Cell(0, 0, alici(), 0, 0, 'L');

                $pdf->SetXY(61, 147);
                // set the position of the box
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',14);
                $pdf->SetFont('arial_tr');
                $pdf->Cell(0, 0, $adi, 0, 0, 'L');



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
                $pdf->SetFont('arial_tr','',11);
                $pdf->SetFont('arial_tr');
                $pdf->Cell(0, 0, accept_type(), 0, 0, 'C');



                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('11'); // set font size
                $pdf->SetXY(109.5, 128); // set the position of the box
                $pdf->Cell(1, 1, $a, 4, 3, 'C');


     $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(165, 128); // set the position of the box
        $pdf->Cell(1, 1, number_format($money,2,',','.'), 4, 3, 'C');





                $tplId = $pdf->importPage(6);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddPage();
                $tplId = $pdf->importPage(7);
                $pdf->useTemplate($tplId, 10, 0, 200);


                //$pdf->Output('D');

                $path = '/home/morepayroll/arge.morepayroll.com/public/pdf/'.$random.'.'.'pdf';
                //$date = $pdf->Output($path,'S');
                $date = $pdf->Output($path,'F');
                //$filePath = public_path().'/pdf/';
                //move_uploaded_file($path, $filePath);

                //$filename='ikmetrik.pdf';
                //$date =  $pdf->Output($filename,'F');
                //$pdf->Output('S','dosya.pdf');
               // ob_end_clean();
               // ob_end_flush();
                //$pdf->Output();


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











