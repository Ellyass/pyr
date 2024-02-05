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




                $name = iconv('utf-8','windows-1254',$customer_name);
                $type = iconv('utf-8','windows-1254',$type);
                $tesvik_money = iconv('utf-8','windows-1254',$tesvik_money);
                $tesvik_type = iconv('utf-8','windows-1254',$tesvik_type);
                $not = iconv('utf-8','windows-1254',$nots);

                //  $home = iconv('utf-8','windows-1254',$egitim_icerigi);




                // initiate FPDI
                $pdf = new Fpdi();
                // add a page

                // set the source file
                $pdf->setSourceFile('/home/morepayroll/public_html/arge/resources/views/backend/pdf/bordrolama.pdf');
                // import page 1
                $pdf->AddPage();
                $tplId = $pdf->importPage(1);
                $pdf->useTemplate($tplId, 5, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('15'); // set font size
                $pdf->SetXY(36, 206); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');



                $pdf->AddPage();
                $tplId = $pdf->importPage(2);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->SetFont('Helvetica');
                $pdf->SetFontSize('11'); // set font size
                $pdf->SetXY(166, 68.2); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');




                $pdf->AddPage();
                $tplId = $pdf->importPage(3);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','B',11);
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(41, 74);
               // $pdf->CellFit(35,19,"Message typed here for test only",1,0,'C',0,'',1,0);
                //$pdf->MultiCell(0, 0,$name, 0, 0, 'L');
                $pdf->Cell(0, 0,$name, 0, 0, 'L');







                $pdf->AddPage();
                $tplId = $pdf->importPage(4);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddPage();
                $tplId = $pdf->importPage(5);
                $pdf->useTemplate($tplId, 10, 0, 200);


                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',11);
                $pdf->SetFont('arial_tr');
                $pdf->SetXY(59.5, 162.6);
                $pdf->Cell(0, 0, $money.' '.'TL'.' '.'/'.' '.$type.' '.$kdv, 0, 0, 'L');


                if ($tesvik_type=='yuzdelik_ucret_tesvik')
                {
                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(63.9, 170.3);
                    $pdf->Cell(0, 0, '%'.$tesvik_money.' '.$kdv, 0, 0, 'L');
                }
                elseif($tesvik_type=='yok')
                {
                    $pdf->AddFont('arial_tr','','arial_tr.php');
                    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                    $pdf->SetFont('arial_tr','',11);
                    $pdf->SetFont('arial_tr');
                    $pdf->SetXY(63.9, 170.3);
                    $pdf->Cell(0, 0, $tesvik_money, 0, 0, 'L');
                }

                else
                    {
                        $pdf->AddFont('arial_tr','','arial_tr.php');
                        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                        $pdf->SetFont('arial_tr','',11);
                        $pdf->SetFont('arial_tr');
                        $pdf->SetXY(63.9, 170.3);
                        $pdf->Cell(0, 0, $tesvik_money.' '.'TL', 0, 0, 'L');
                    }




                $pdf->AddPage();
                $tplId = $pdf->importPage(6);
                $pdf->useTemplate($tplId, 10, 0, 200);

                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','B',10);
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(33 ,185); // set the position of the box
                $pdf->Cell(0, 0,$not, 0, 0, 'L');


                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',10);
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(33, 196.5);
                $pdf->Cell(0, 0, $name, 0, 0, 'L');







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
            //   $pdf->Output();

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





















