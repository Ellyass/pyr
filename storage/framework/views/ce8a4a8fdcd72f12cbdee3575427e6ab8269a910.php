<?php $__env->startSection('content'); ?>
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





                // initiate FPDI
                $pdf = new Fpdi();
                // add a page

                // set the source file
                $pdf->setSourceFile('/home/morepayroll/arge.morepayroll.com/resources/views/backend/pdf/iys.pdf');
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
                $pdf->SetXY(166, 82.8); // set the position of the box
                $pdf->Cell(0, 0, $date, 0, 0, 'C');




                $pdf->AddPage();
                $tplId = $pdf->importPage(3);
                $pdf->useTemplate($tplId, 10, 0, 200);


                $pdf->AddPage();
                $tplId = $pdf->importPage(4);
                $pdf->useTemplate($tplId, 10, 0, 200);
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',10);
                $pdf->SetFont('arial_tr');
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(42, 204.5);
                $pdf->Cell(0, 0, $name, 0, 0, 'L');

                $pdf->AddPage();
                $tplId = $pdf->importPage(5);
                $pdf->useTemplate($tplId, 10, 0, 200);



                // set the position of the box


                // set the position of the box
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',11);
                $pdf->SetFont('arial_tr');

                $pdf->SetXY(57.7, 161.6);
                $pdf->Cell(0, 0, number_format($money,2,',','.'), 0, 0, 'L');




                // set the position of the box
                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',11);
                $pdf->SetFont('arial_tr');
                $pdf->SetXY(58.7, 168.9);
                $pdf->Cell(0, 0, $yuzdelik, 0, 0, 'L');

                $pdf->AddFont('arial_tr','','arial_tr.php');
                $pdf->AddFont('arial_tr','B','arial_tr_bold.php');
                $pdf->SetFont('arial_tr','',11);
                $pdf->SetFont('arial_tr');
                $pdf->SetFont('arial_tr','B');
                $pdf->SetXY(33.8, 190);
                $pdf->Cell(0, 0, $name, 0, 0, 'L');



                //$pdf->Output('D');

                 $path = '/home/morepayroll/arge.morepayroll.com/public/pdf/'.$offer_id.'.'.'pdf';
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


                ?>


            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script>

        $(document).ready(function() {
            swal(
                'Tebrikler Pdf Oluşmuştur',
                'Teklif Tablomdan İndirebilirsiniz'

            )
        });
    </script>

<?php $__env->stopSection(); ?>






















<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/pdf/iys_pdf.blade.php ENDPATH**/ ?>