<?php $__env->startSection('content'); ?>
    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteriler</h4>
            </div>
            <br>
            <div align="right">
                <a href="<?php echo e(route('email.create')); ?>"><button class="btn btn-danger">Yeni Eposta Ekle</button></a>
            </div>
            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" border="1"  class="table table-bordered table-striped" style="color: #000000;border-bottom-color: #000000;">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Müşteri</th>
                                <th>Yetkili</th>
                                <th>Cep</th>
                                <th>Telefon</th>
                                <th>Eposta</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $customer_emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($email->id); ?></td>
                                    <td><?php echo e(isset($email->customer['name'])); ?></td>
                                    <td><?php echo e($email->customer_official); ?></td>
                                    <td><?php echo e($email->mobile); ?></td>
                                    <td><?php echo e($email->phone); ?></td>
                                    <td><?php echo e($email->email); ?></td>
                                    <td><a href="<?php echo e(route('email.edit',['id' => $email->id])); ?>"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo e(route('email.destroy',['customer_email' => $email->email])); ?>"><i style="margin-left: 10px;" class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : false,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })

    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>






<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/customer/customer_email/index.blade.php ENDPATH**/ ?>