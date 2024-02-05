<?php $__env->startSection('content'); ?>
    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteriler</h4>
            </div>
            <br>
            <div align="right">
                <a href="<?php echo e(route('customer.add')); ?>"><button class="btn btn-danger">Müşteri Ekle</button></a>
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
                                <th>Müşteri</th>
                                <th>Müşteri Türü</th>
                                <th>Müşteri Tipi</th>

                                <th>Durumu</th>
                                <?php if(Auth::user()->id == 1 || Auth::user()->id == 5 || Auth::user()->id == 21 || Auth::user()->id == 6|| Auth::user()->id == 32): ?>

                                <th>İşlemler</th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td><?php echo e($customer->name); ?></td>
                                <td> <?php $__currentLoopData = $customer->customer_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-danger"><?php echo e(config('variables.crm.customer_types')[$customer_type->type]); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                <td><span class=" label label-primary"><?php echo e($customer->status); ?></span></td>
                                <td><?php if($customer->is_deleted==0): ?>
                                        <span class="label label-primary">Aktif</span>
                                    <?php else: ?>
                                        <span class="label label-danger">Pasif</span>

                                </td>
                                <?php endif; ?>
                                <?php if(Auth::user()->id == 1 || Auth::user()->id == 5 || Auth::user()->id == 21 || Auth::user()->id == 6|| Auth::user()->id == 32): ?>

                                <td><a href="<?php echo e(route('customer.edit',['id' => $customer->id])); ?>"><i class="fa fa-pencil"></i></a>

                                    <form  id="musterifrm<?php echo e($customer->id); ?>" action="<?php echo e(route('customer.destroy',['id' => $customer->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                         <button data-id="<?php echo e($customer->id); ?>" type="button" class="btn btn-danger fa fa-trash">Sil</button>
                                    </form>

                                </td>

                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
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





<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/customer/index.blade.php ENDPATH**/ ?>