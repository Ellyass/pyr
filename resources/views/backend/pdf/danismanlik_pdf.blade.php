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




                //  $home = iconv('utf-8','windows-1254',$egitim_icerigi);




                // initiate FPDI
                $pdf = new Fpdi();
                // add a page

                // set the source file
                $pdf->setSourceFile('/home/morepayroll/arge.morepayroll.com/resources/views/backend/pdf/danismanlik.pdf');
                // import page 1
                $pdf->AddPage();
                $tplId = $pdf->importPage(1);
                $pdf->useTemplate($tplId, 5, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('15'); // set font size
                $pdf->SetXY(36, 215.5); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');



                $pdf->AddPage();
                $tplId = $pdf->importPage(2);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('11'); // set font size
                $pdf->SetXY(152, 82.9); // set the position of the box
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
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(33, 155);
                $pdf->Cell(0, 0, $customer_name, 0, 0, 'L');

                    if ($t == 1)
                     {

                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(58, 166);
                    $pdf->Cell(0, 0, number_format($money,2,',','.').' '.' '.'TL'.' '.$type_text.' '.'/'.' '.$kdv.' '.'('.$eklenti.')', 0, 0, 'L');
                    }
                    else
                        {
                            $pdf->AddFont('arial_tr','','arial_tr.php');
                            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                            $pdf->SetFont('arial_tr','',11);
                            $pdf->SetFont('arial_tr');
                            $pdf->SetXY(58, 166);
                            $pdf->Cell(0, 0, number_format($money,2,',','.'). ' ' . ' ' . 'TL' . ' ' . '/'.' ' .$kdv.' '.'('.$eklenti.')', 0, 0, 'L');

                            $pdf->AddFont('arial_tr','','arial_tr.php');
                            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                            $pdf->SetFont('arial_tr','',11);
                            $pdf->SetFont('arial_tr');
                            $pdf->SetXY(33, 177);
                            $pdf->Cell(0, 0, $odemesekli, 0, 0, 'L');

                            $pdf->AddFont('arial_tr','','arial_tr.php');
                            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                            $pdf->SetFont('arial_tr','',11);
                            $pdf->SetFont('arial_tr');
                            $pdf->SetXY(61, 177);
                            $pdf->Cell(0, 0, $yuzdelik, 0, 0, 'L');



                        }


                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',10);
                $pdf->SetFont('arial_tr');
                $pdf->SetXY(33, 171);
                $pdf->Cell(0, 0, $konaklama, 0, 0, 'L');

                //$pdf->Output('D');

                // $path = '/home/morepayroll/arge.morepayroll.com/public/pdf/'.$random.'.'.'pdf';
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




















