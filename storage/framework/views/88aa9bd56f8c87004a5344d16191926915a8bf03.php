<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="box-body">
                <form action="<?php echo e(route('status.up',['id'=>$statu->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                  <div class="form-group col-md-4 col-sm-3 col-xs-12" >
                    <label for="exampleInputPassword1">Firma Seciniz</label>
                    <select class="form-control" name="offer_status">
                             <option value="2">Kabul Edildi</option>
                               <option value="1">Bekleniyor</option>
                             <option value="0">Reddedildi</option>
                    </select>
                </div>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" align="right">
                        <button  class="btn btn-success ">Güncelle</button>
                    </div>
                </form>

            </div>
        </div>
    </section>










    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/teklif/status.blade.php ENDPATH**/ ?>