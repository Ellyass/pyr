<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
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
            <table class="table" id="paginationNumbers">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firma</th>
                    <th scope="col">Dış Kaynak/Satıcı</th>
                    <th scope="col">Teklif Tarihi</th>
                    <th scope="col">Teklif Veren Kullanıcı</th>
                    <th scope="col">Teklif Toplamı</th>
                    <th scope="col">Teklif Türü</th>
                    <th scope="col">Teklif Acıklama</th>
                    <th>Müşteri Düzenle</th>
                    <th scope="col">Teklif Durum</th>
                    <th scope="col">Teklif File</th>
                </tr>
                </thead>
                <?php $say=1; ?>
                <tbody>

                     <?php $__currentLoopData = $jquerys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jquery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <th scope="row"><?php echo $say++ ?></th>
                        <td><?php echo e($jquery->customer->name); ?></td>

                        <td><?php echo e($jquery->seller->seller_name); ?></td>

                        <td><?php echo e($jquery->offer_date->format('d.m.Y')); ?></td>
                        <td><?php echo e($jquery->user->name); ?></td>
                        <?php if($jquery->product==1 && $jquery->accept_type=='Aylık'): ?>
                            <td><?php echo e(number_format($jquery->offer_money,2,',','.')); ?></td>
                        <?php elseif($jquery->product==1): ?>
                            <td>%<?php echo e($jquery->offer_money); ?></td>
                        <?php elseif($jquery->product==6): ?>
                            <td><?php echo e($jquery->offer_total); ?></td>
                        <?php else: ?>
                            <td><?php echo e(number_format($jquery->offer_total,0,',','.').' '); ?>TL</td>
                        <?php endif; ?>

                        <td><?php echo e($jquery->tproduct->name); ?></td>

                        <td > <textarea><?php $__currentLoopData = $jquery->explanations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $explanation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($explanation->date->format('d.m.Y').' '.$explanation->explanation); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </textarea>
                        </td>

                        <td>
                            <a href="<?php echo e(route('customer.edit',['id'=>$jquery->customer_id])); ?>" ><button class="btn btn-success btn-xs">Müşteri Düzenle</button></a>
                        </td>

                        <td><?php if($jquery->offer_status==1): ?>
                                <a href="<?php echo e(route('offer.status',['id'=>$jquery->id])); ?>" ><button class="btn btn-warning btn-xs">Bekleniyor</button></a>

                            <?php elseif($jquery->offer_status==2): ?>
                                <a href="<?php echo e(route('offer.status',['id'=>$jquery->id])); ?>" ><button class="btn btn-success btn-xs">Kabul Edildi</button></a>

                            <?php elseif($jquery->offer_status==0): ?>
                                <button class="btn btn-danger btn-xs">Reddedildi</button>
                            <?php endif; ?>

                        </td>

                        <td><a href="<?php echo e(route('offer.edit',['id'=>$jquery->id])); ?>"><button class="btn btn-primary btn-xs">Güncelle</button></a>
                            <a href="<?php echo e(route('offer.delete',['id'=>$jquery->id])); ?>"><Button class="btn btn-danger">Sil</Button></a>
                            <a href="<?php echo e(route('offer.file',['id' => $jquery->id])); ?>"><img src="https://img.icons8.com/officel/40/000000/pdf.png"/></a>
                            <!-- <a href="/pdf/">-->

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>


        </div>

<div class="form-group col-md-2 col-sm-3 col-xs-12 col">
     <label for="">Gönderilen Teklif</label>
    <input class="form-control" type="text" value="<?php echo e(number_format($jquerys->whereNotIn('product',1)->sum('offer_total'),2,',','.')); ?>" disabled="">
    <label for="">Kabul Edilen Teklif </label>
    <input class="form-control" type="text" value="<?php echo e(number_format($jquerys->whereNotIn('product',1)->where('offer_status',2)->whereNotIn('product',1)->sum('offer_total'),2,',','.')); ?>" disabled="">
</div>


    </section>


    <script>
        $(document).ready(function () {
            //Pagination numbers
            $('#paginationNumbers').DataTable({
                "pagingType": "numbers"
            });
        });
    </script>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/teklif/jquery.blade.php ENDPATH**/ ?>