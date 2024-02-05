<?php $__env->startSection('content'); ?>

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteri Email Ekle</h4>
            </div>
            <?php if(Session::has('status')): ?>
                <div class="alert alert-success">
                    <p style="text-align: center;font-size: 15px;"><?php echo e(session('status')); ?></p>
                </div>
            <?php endif; ?>
            <?php if(Session::has('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <div class="box-body">
                <form action="<?php echo e(route('email.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group col-md-4" >
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12" >Firma Adı </label>
                        <select name="customer_id"  class="form-control">
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group " >
                        <label  class="control-label col-md-9  col-xs-12" >Firma Yetkili <span class="required">*</span>
                        </label>
                        <input type="text" name="customer_official"  required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-3" >
                        <label  class="control-label  col-xs-12" >Eposta <span class="required">*</span>
                        </label>
                        <input type="text" name="email"  required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-4" style="margin-left: 50px;" >
                        <label  class="control-label  col-xs-12" >Cep
                        </label>
                        <input type="text" name="mobile"  value="0"  class="form-control">
                    </div>

                    <div class="form-group col-md-3" style="margin-left: 50px;"  >
                        <label  class="control-label  col-xs-12" >Telefon <span class="required">*</span>
                        </label>
                        <input type="text" name="phone" value="0"   class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <div class="form-group" align="center"  >
                        <button class="btn btn-success">Kaydet</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>





<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/morepayroll/public_html/arge/resources/views/backend/customer/customer_email/insert.blade.php ENDPATH**/ ?>