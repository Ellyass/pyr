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
                $company_name = iconv('utf-8','windows-1254',$company_name);
                $customer_adress = iconv('utf-8','windows-1254',$customer_adres);
                $not = iconv('utf-8','windows-1254',$nots);

                $aylik = iconv('utf-8','windows-1254',$accept_type ?? '');

                //  $home = iconv('utf-8','windows-1254',$egitim_icerigi);


if ($egitim == 'yok')
{
    // initiate FPDI
    $pdf = new Fpdi();
    // add a page

    // set the source file
    $pdf->setSourceFile('/home/morepayroll/public_html/arge/resources/views/backend/pdf/tesvik.pdf');
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
    $pdf->SetXY(165, 69); // set the position of the box
    $pdf->Cell(0, 0, $date, 0, 0, 'C');




    $pdf->AddPage();
    $tplId = $pdf->importPage(3);
    $pdf->useTemplate($tplId, 10, 0, 200);
    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','B',11);
    $pdf->SetFont('arial_tr','B');
    $pdf->SetXY(33, 82);
    $pdf->GetStringWidth($company_name);
    $pdf->Cell(0, 0,$company_name, 0, 0, 'L');


    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','B',11);
    $pdf->SetFont('arial_tr');
    $pdf->SetXY(33, 119);
    $pdf->SetFont('arial_tr','B');
    $pdf->Cell(0, 0,$name, 0, 0, 'L');


    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','B',11);
    $pdf->SetFont('arial_tr');
    $pdf->SetXY(33, 126);
    $pdf->SetFont('arial_tr','B');
    $pdf->Cell(0, 0,$customer_adress, 0, 0, 'L');


    $pdf->AddPage();
    $tplId = $pdf->importPage(4);
    $pdf->useTemplate($tplId, 10, 0, 200);
    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','',11);
    $pdf->SetFont('arial_tr');
    $pdf->SetXY(64.2, 160);
    $pdf->Cell(0, 0, $date, 0, 0, 'L');



    $pdf->AddPage();
    $tplId = $pdf->importPage(5);
    $pdf->useTemplate($tplId, 10, 0, 200);



    if ($accept_type =='Aylık')
    {
        $money =  number_format($money,2,',','.');

        $pdf->AddPage();
        $tplId = $pdf->importPage(7);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',9);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(128, 83); // set the position of the box
        $pdf->Cell(0, 0,$aylik.' '.$money.' '.'TL'.' '.'('.$kdv.')', 0, 0, 'L');

    }
    else
    {

        $pdf->AddPage();
        $tplId = $pdf->importPage(7);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',10);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(115, 83); // set the position of the box
        $pdf->Cell(0, 0, '%'.$money.' '.$kdv, 0, 0, 'C');




    }



    $pdf->AddPage();
    $tplId = $pdf->importPage(8);
    $pdf->useTemplate($tplId, 10, 0, 200);
    $pdf->AddPage();
    $tplId = $pdf->importPage(9);
    $pdf->useTemplate($tplId, 10, 0, 200);

    $pdf->AddPage();
    $tplId = $pdf->importPage(10);
    $pdf->useTemplate($tplId, 10, 0, 200);
    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','B',10);
    $pdf->SetFont('arial_tr','B');
    $pdf->SetXY(33, 169);
    $pdf->Cell(5, 0,$name, 0, 0, 'L');

    $pdf->AddFont('arial_tr','','arial_tr.php');
    $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
    $pdf->SetFont('arial_tr','B',10);
    $pdf->SetFont('arial_tr','B');
    $pdf->SetXY(33 ,150); // set the position of the box
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
        // initiate FPDI
        $pdf = new Fpdi();
        // add a page

        // set the source file
        $pdf->setSourceFile('/home/morepayroll/public_html/arge/resources/views/backend/pdf/tesvik2.pdf');
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
        $pdf->SetXY(165, 69); // set the position of the box
        $pdf->Cell(0, 0, $date, 0, 0, 'C');




        $pdf->AddPage();
        $tplId = $pdf->importPage(3);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',11);
        $pdf->SetFont('arial_tr','B');
        $pdf->SetXY(33, 82);
        $pdf->GetStringWidth($name);
        $pdf->Cell(0, 0,$company_name, 0, 0, 'L');


        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(33, 119);
        $pdf->SetFont('arial_tr','B');
        $pdf->Cell(0, 0,$name, 0, 0, 'L');



        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(33, 126);
        $pdf->Cell(0, 0,$customer_adress, 0, 0, 'L');



        $pdf->AddPage();
        $tplId = $pdf->importPage(4);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','',11);
        $pdf->SetFont('arial_tr');
        $pdf->SetXY(64, 159);
        $pdf->Cell(0, 0, $date, 0, 0, 'L');



        $pdf->AddPage();
        $tplId = $pdf->importPage(5);
        $pdf->useTemplate($tplId, 10, 0, 200);
        if ($accept_type =='Aylık')
        {
            $money =  number_format($money,2,',','.');

            $pdf->AddPage();
            $tplId = $pdf->importPage(6);
            $pdf->useTemplate($tplId, 10, 0, 200);
            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','B',9);
            $pdf->SetFont('arial_tr');
            $pdf->SetXY(128, 215); // set the position of the box
            $pdf->Cell(0, 0,$aylik.' '.$money.' '.'TL'.' '.'('.$kdv.')', 0, 0, 'L');



        }
        else
        {

            $pdf->AddPage();
            $tplId = $pdf->importPage(6);
            $pdf->useTemplate($tplId, 10, 0, 200);
            $pdf->AddFont('arial_tr','','arial_tr.php');
            $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
            $pdf->SetFont('arial_tr','B',10);
            $pdf->SetFont('arial_tr');
            $pdf->SetXY(115, 215); // set the position of the box
            $pdf->Cell(0, 0, '%'.$money.' '.$kdv, 0, 0, 'C');




        }



        $pdf->AddPage();
        $tplId = $pdf->importPage(7);
        $pdf->useTemplate($tplId, 10, 0, 200);

        $pdf->AddPage();
        $tplId = $pdf->importPage(8);
        $pdf->useTemplate($tplId, 10, 0, 200);

        $pdf->AddPage();
        $tplId = $pdf->importPage(9);
        $pdf->useTemplate($tplId, 10, 0, 200);

        $pdf->AddPage();
        $tplId = $pdf->importPage(10);
        $pdf->useTemplate($tplId, 10, 0, 200);


        $pdf->AddPage();
        $tplId = $pdf->importPage(11);
        $pdf->useTemplate($tplId, 10, 0, 200);
        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',10);
        $pdf->SetFont('arial_tr','B');
        $pdf->SetXY(33, 110);
        $pdf->Cell(5, 0,$name, 0, 0, 'L');


        $pdf->AddFont('arial_tr','','arial_tr.php');
        $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
        $pdf->SetFont('arial_tr','B',10);
        $pdf->SetFont('arial_tr','B');
        $pdf->SetXY(33 ,95); // set the position of the box
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
       //  $pdf->Output();
    }




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





















