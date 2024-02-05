<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="box box-danger">
            <div align="right"><a href="<?php echo e(route('cost.personel.create')); ?>"><button class="btn btn-success btn-xs">Masraf Ekle</button></a></div>

            <div class="box-header with-border">
                <h4>Aldığım Ücretler</h4>
            </div>
            <div class="box-header with-border">
                <table class="table">
                    <?php
                    $say=1;
                    ?>
                    <thead>
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">Personel</th>
                        <th scope="col">Aldığı Miktar</th>
                        <th scope="col">Sebep</th>
                        <th scope="col">Tarih</th>

                        <th scope="col">Form</th>
                        <th scope="col">Durum</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $costs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <th scope="row"><?php echo $say++?></th>
                            <td><?php echo e($cost->user->name); ?></td>
                            <td><?php echo e($cost->cost_money); ?></td>
                            <td><?php echo e($cost->cost_explanation); ?></td>
                            <td><?php echo e($cost->cost_date); ?></td>

                            <?php if($cost->cost_status==0): ?>
                            <td>

                                <a href="<?php echo e(route('form.create',['id'=>$cost->id])); ?>"><i class="fa fa-archive"></i></a></td><?php endif; ?>

                            <td><?php if($cost->end_status==0): ?>
                                    <a href="<?php echo e(route('form.edit',['id'=>$cost->id])); ?>"> <button class="btn btn-danger btn-xs">Reddedildi</button></a>
                                    <?php elseif($cost->end_status==1): ?>

                                    <a href="<?php echo e(route('form.edit',['id'=>$cost->id])); ?>"><button class="btn btn-warning btn-xs">Bekleniyor</button></a>
                                        <?php elseif($cost->end_status==2): ?>
                                    <a href="<?php echo e(route('form.edit',['id'=>$cost->id])); ?>"><button class="btn btn-success btn-xs">Kabul Edildi</button></a>
                                <?php endif; ?>
                            </td>




                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>


        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/Cos/personel_index.blade.php ENDPATH**/ ?>