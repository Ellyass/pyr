<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569818907/jquery.table2excel.min.js"></script>
                <script src="/ bower_components/jquery-table2excel/dist/jquery.table2excel.min.js"></script>

                <form action="<?php echo e(route('offer.jquery')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="mounth">
                            <option value="">Seçiniz</option>
                            <option value="1">Ocak Ayı</option>
                            <option value="2">Şubat Ayı</option>
                            <option value="3">Mart Ayı</option>
                            <option value="4">Nisan Ayı</option>
                            <option value="5">Mayıs Ayı</option>
                            <option value="6">Haziran Ayı</option>
                            <option value="7">Temmuz Ayı</option>
                            <option value="8">Ağustos Ayı</option>
                            <option value="9">Eylül Ayı</option>
                            <option value="10">Ekim Ayı</option>
                            <option value="11">Kasım Ayı</option>
                            <option value="12">Aralık Ayı</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="year">
                            <option value="">Seçiniz</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2022">2023</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="product">
                            <option value="">Seciniz</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <!--
                        <select class="form-control" name="product">
                            <option value="">Seçiniz</option>
                            <option value="1">Teşvik</option>
                            <option value="2">Kvkk</option>
                            <option value="3">Eğitim</option>
                            <option value="4">Bodrolama</option>
                            <option value="5">Danışmanlık</option>
                            <option value="7">İYS Danışmanlık</option>
                            <option value="6">İkmetrik</option>
                        </select>
                        -->
                    </div>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="status">
                            <option value="">Seçiniz</option>
                            <option value="2">Kabul Edildi</option>
                            <option value="1">Bekleniyor</option>
                            <option value="0">Reddedildi</option>

                        </select>
                    </div>
                    <div class="form-group col-md-1 col-sm-3 col-xs-12 col" >
                        <button class="btn btn-success">Sorgula</button>
                    </div>
                </form>
            </div>

            <table class="table" id="paginationNumbers" class="display nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firma</th>
                    <th scope="col">Teklif Tarihi</th>

                    <th scope="col">Teklif Toplamı</th>
                    <th scope="col">Teklif Türü</th>
                    <th>Satıcı</th>
                    <th scope="col">Teklif Acıklama</th>
                    <th>Müşteri Düzenle</th>
                    <th scope="col">Teklif Durum</th>
                    <th scope="col">Teklif Dosya/Güncelle</th>


                </tr>
                </thead>
                <tbody>
                <?php if(isset($offers)): ?>
                <?php $say=1;

                ?>
                <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo $say++ ?></th>
                    <td><?php echo e(!empty($offer->customer->name) ? $offer->customer->name : null); ?></td>
                    <td><?php echo e($offer->offer_date->format('d.m.Y')); ?></td>

                        <?php if($offer->product==1 && $offer->accept_type=='Aylık'): ?>
                         <td><?php echo e(number_format($offer->offer_money,2,',','.')); ?></td>
                            <?php elseif($offer->product==1): ?>
                                <td>%<?php echo e($offer->offer_money); ?></td>
                            <?php elseif($offer->product==6): ?>
                            <td><?php echo e($offer->offer_total); ?></td>
                    <?php else: ?>
                        <td><?php echo e(number_format($offer->offer_total,0,',','.').' '); ?>TL</td>
                    <?php endif; ?>

                    <td><?php echo e($offer->tproduct->name); ?></td>

                    <td><?php echo e(!empty($offer->seller->seller_name) ? $offer->seller->seller_name : null); ?></td>
                    <td > <textarea><?php $__currentLoopData = $offer->explanations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $explanation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($explanation->date->format('d.m.Y').''.$explanation->explanation); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </textarea>
                    </td>
                    <td>
                        <a href="<?php echo e(route('customer.edit',['id'=>$offer->customer_id])); ?>" ><button class="btn btn-success btn-xs">Müşteri Düzenle</button></a>
                    </td>

                    <td><?php if($offer->offer_status==1): ?>
                            <a href="<?php echo e(route('offer.status',['id'=>$offer->id])); ?>" ><button class="btn btn-warning btn-xs">Bekleniyor</button></a>

                        <?php elseif($offer->offer_status==2): ?>
                            <a href="<?php echo e(route('offer.status',['id'=>$offer->id])); ?>" ><button class="btn btn-success btn-xs">Kabul Edildi</button></a>

                        <?php elseif($offer->offer_status==0): ?>
                            <button class="btn btn-danger btn-xs">Reddedildi</button>
                        <?php endif; ?>

                    </td>

                    <td><a href="<?php echo e(route('offer.edit',['id'=>$offer->id])); ?>"><button class="btn btn-primary btn-xs">Güncelle</button></a>
                        <a href="<?php echo e(route('contract_upload',['id'=>$offer->id])); ?>"><button class="btn btn-primary btn-xs">Sözleşme Yükle</button></a>

                        <a href="<?php echo e(route('offer.delete',['id'=>$offer->id])); ?>"><Button class="btn btn-danger ">Sil</Button></a>
                        <a href="<?php echo e(route('offer.file',['id' => $offer->id])); ?>"><img src="https://img.icons8.com/officel/40/000000/pdf.png"/></a>
                       <!-- <a href="/pdf/">-->
                    </td>



                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Kabul Edilen Teklif</span>
                        <span class="info-box-number"><?php echo e(number_format($offers->whereNotIn('product',1)->where('offer_status',2)->whereNotIn('product',1)->sum('offer_total'),2,',','.')); ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Gönderilen Teklif</span>
                        <span class="info-box-number"><?php echo e(number_format($offers->whereNotIn('product',1)->sum('offer_total'),2,',','.')); ?></span>
                    </div>
                    <!-- /.info-box-content -->

                </div>
                <!-- /.info-box -->
                </div>

             </div>
        </div>
        <?php endif; ?>
    </section>
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script  src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link r href="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js">
    <script  src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <link  href="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js">
    <script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script  src="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>





<!--
        <script>
        $(document).ready(function () {
            //Pagination numbers
            $('#paginationNumbers').DataTable({
                "pagingType": "numbers"
            });
        });
    </script>
    -->
    <script>
        $(document).ready(function() {
            $('#paginationNumbers').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy'
                ]
            } );
        } );
    </script>





<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/teklif/index.blade.php ENDPATH**/ ?>