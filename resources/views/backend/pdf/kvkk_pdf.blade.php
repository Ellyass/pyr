@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <?php

                $date = date("d.m.Y", strtotime($offer_date));

                // use App\Model\Customer;
                // $customer =  $_POST['customer_id'];
                // $customer_name = Customer::find($customer);
                // $date = date("d.m.Y", strtotime($offer_date));

                use setasign\Fpdi\Fpdi;
                require_once __DIR__ . '../../../../vendor/setasign/fpdi/src/autoload.php';
                require_once __DIR__ . '../../../../vendor/setasign/fpdf/fpdf.php';
                if ($konaklama=='yok')
                {
                    $konaklama=' ';
                }

                 $name = iconv('utf-8','windows-1254',$customer_name);

                  $home = iconv('utf-8','windows-1254',$konaklama);
                  $not = iconv('utf-8','windows-1254',$nots);


                if ($penetrasyon == 'yok')
                {
                    $pdf = new Fpdi();
                    // add a page

                    // set the source file
                    $pdf->setSourceFile('/home/morepayroll/public_html/arge/resources/views/backend/pdf/kvkk2.pdf');
                    // import page 1
                    $pdf->AddPage();
                    $tplId = $pdf->importPage(1);
                    $pdf->useTemplate($tplId, 5, 0, 200);
                    $pdf->SetFont('Helvetica');
                    $pdf->SetFontSize('15'); // set font size
                    $pdf->SetXY(38, 213.5); // set the position of the box
                    $pdf->Cell(0, 0, $date, 0, 0, 'C');



                    $pdf->AddPage();
                    $tplId = $pdf->importPage(2);
                    $pdf->useTemplate($tplId, 10, 0, 200);
                    $pdf->SetFont('Helvetica');
                    $pdf->SetFontSize('11'); // set font size
                    $pdf->SetXY(165, 80); // set the position of the box
                    $pdf->Cell(0, 0, $date, 0, 0, 'C');




                    $pdf->AddPage();
                    $tplId = $pdf->importPage(3);
                    $pdf->useTemplate($tplId, 10, 0, 200);


                    $pdf->AddPage();
                    $tplId = $pdf->importPage(4);
                    $pdf->useTemplate($tplId, 10, 0, 200);


                    $pdf->AddPage();
                    $tplId = $pdf->importPage(5);
                    $pdf->useTemplate($tplId, 10, 0, 200);



                    // set the position of the box

                    $pdf->AddPage();
                    $tplId = $pdf->importPage(6);
                    $pdf->useTemplate($tplId, 10, 0, 200);

                    // set the position of the box
                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',12);
                    $pdf->SetFont('arial_tr','B');
                    $pdf->SetXY(33, 75);
                    $pdf->Cell(0, 0, $name, 0, 0, 'L');

                    // set the position of the box
                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(56, 82.8);
                    $pdf->Cell(0, 0, number_format($money,2,',','.').' '.'TL'.' '.$kdv, 0, 0, 'L');






                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(33, 103);
                    $pdf->Cell(0, 0, $home, 0, 0, 'L');


                    // set the position of the box
                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(-286, 97.6);
                    $pdf->Cell(0, 0, $yuzdelik, 0, 0, 'C');


                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',12);
                    $pdf->SetFont('arial_tr','B');
                    $pdf->SetXY(33, 102.5);
                    $pdf->Cell(0, 0,$not, 0, 0, 'L');




                    //$pdf->Output('D');

                    $path = '/home/morepayroll/public_html/arge/public/pdf/'.$random.'.'.'pdf';
                    //$date = $pdf->Output($path,'S');
                    $date = $pdf->Output($path,'F');
                    //$filePath = public_path().'/pdf/';
                    //move_uploaded_file($path, $filePath);

                    //$filename='ikmetrik.pdf';
                    //$date =  $pdf->Output($filename,'F');
                    //$pdf->Output('S','dosya.pdf');
                    ob_end_clean();
                    ob_end_flush();
                   // $pdf->Output();
                }
else
    {
        $pdf = new Fpdi();
        // add a page

        // set the source file
        $pdf->setSourceFile('/home/morepayroll/public_html/arge/resources/views/backend/pdf/kvkk.pdf');
        // import page 1
        $pdf->AddPage();
        $tplId = $pdf->importPage(1);
        $pdf->useTemplate($tplId, 5, 0, 200);
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('15'); // set font size
        $pdf->SetXY(38, 206.5); // set the position of the box
        $pdf->Cell(0, 0, $date, 0, 0, 'C');



        $pdf->AddPage();
        $tplId = $pdf->importPage(2);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->SetFont('Helvetica');
        $pdf->SetFontSize('11'); // set font size
        $pdf->SetXY(165, 69); // set the position of the box
        $pdf->Cell(0, 0, $date, 0, 0, 'C');




        $pdf->AddPage();
        $tplId = $pdf->importPage(3);
        $pdf->useTemplate($tplId, 10, 0, 200);


        $pdf->AddPage();
        $tplId = $pdf->importPage(4);
        $pdf->useTemplate($tplId, 10, 0, 200);


        $pdf->AddPage();
        $tplId = $pdf->importPage(5);
        $pdf->useTemplate($tplId, 10, 0, 200);


        $pdf->AddPage();
        $tplId = $pdf->importPage(6);
        $pdf->useTemplate($tplId, 10, 0, 200);
        // set the position of the box

        $pdf->AddPage();
        $tplId = $pdf->importPage(7);
        $pdf->useTemplate($tplId, 10, 0, 200);

        // set the position of the box
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',12);
        $pdf->SetFont('arial_tr','B');
        $pdf->SetXY(33, 150);
        $pdf->Cell(0, 0, $name, 0, 0, 'L');

        // set the position of the box
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(56, 165);
        $pdf->Cell(0, 0, number_format($money,2,',','.').' '.'TL'.' '.$kdv, 0, 0, 'L');






        if (!empty($penetrasyon_ucret))
        {

            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','',11);
            $pdf->SetFont('arial_tr');
            $pdf->SetXY(33, 170);
            $pdf->Cell(0, 0, 'Penetrasyon Ucreti'.' '.number_format($penetrasyon_ucret,2,',','.').' '.'TL'.' '.$kdv, 0, 0, 'L');
        }
        else
        {
            $penetrasyon_ucret = ' ';
            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','',11);
            $pdf->SetFont('arial_tr');
            $pdf->SetXY(33, 165);
            $pdf->Cell(0, 0, ' ', 0, 0, 'L');
        }


        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(33, 182);
        $pdf->Cell(0, 0, $home, 0, 0, 'L');


        // set the position of the box
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(-286, 176);
        $pdf->Cell(0, 0, $yuzdelik, 0, 0, 'C');

        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',12);
        $pdf->SetFont('arial_tr','B');
        $pdf->SetXY(33, 189);
        $pdf->Cell(0, 0,$not, 0, 0, 'L');



        //$pdf->Output('D');

       $path = '/home/morepayroll/public_html/arge/public/pdf/'.$random.'.'.'pdf';
        //$date = $pdf->Output($path,'S');
        $date = $pdf->Output($path,'F');
        //$filePath = public_path().'/pdf/';
        //move_uploaded_file($path, $filePath);

        //$filename='ikmetrik.pdf';
        //$date =  $pdf->Output($filename,'F');
        //$pdf->Output('S','dosya.pdf');
        ob_end_clean();
        ob_end_flush();
         //$pdf->Output();
    }
                // initiate FPDI



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




















