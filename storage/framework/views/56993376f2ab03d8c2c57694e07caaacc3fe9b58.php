<?php $__env->startSection('content'); ?>

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Kullanıcı Masraf Oluşur</h4>
            </div>
            <div class="box-body">
                <form action="<?php echo e(route('cost.personel.create.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="user_id">


                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Tarih</label>
                    <input type="date" name="cost_date" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Sebep</label>
                    <input type="text" name="cost_explanation" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right" >
                   <button class="btn btn-success">Ekle</button>
                </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/Cos/personel_cost_create.blade.php ENDPATH**/ ?>