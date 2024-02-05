<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border"></div>
            <div class="box-body">

                <div id="tesvik">
                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                        </div>
                        <br>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">

                                    <option selected value="1">TEŞVİK
                                    <option value="2">KVKK
                                    <option value="3">EĞİTİM
                                    <option value="4">BODROLAMA
                                    <option value="5">Danışmanlık
                                    <option value="8">Yazılım
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>


                        <br>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                            <input type="hidden" name="offer_amount" class="form-control" value="1">
                            <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">
                        </div>


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Yüzdelik Oranı</label>
                            <input type="text" name="offer_money" class="form-control" value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success ">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>
                <div id="bodrolama">
                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">
                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                        </div>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">

                                    <option value="1">TEŞVİK
                                    <option value="2">KVKK
                                    <option value="3">EĞİTİM
                                    <option selected value="4">BODROLAMA
                                    <option value="5">Danışmanlık
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">

                        <br>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Çalışan Sayısı</label>
                            <input type="text" name="offer_amount" class="form-control"
                                   value="<?php echo e($offer->offer_amount); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Birim Fiyatı</label>
                            <input type="text" name="offer_money" class="form-control" value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success ">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>
                <!--bodrolama bitiş-->

                <div id="kvkk">
                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">
                        <br>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                        </div>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">
                                    <option value="1">TEŞVİK
                                    <option selected value="2">KVKK
                                    <option value="3">EĞİTİM
                                    <option value="4">BODROLAMA
                                    <option value="5">Danışmanlık

                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">

                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <br>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">

                            <input type="hidden" name="offer_amount" class="form-control" value="1">
                        </div>
                        <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Ücret</label>
                            <input type="text" required name="offer_money" class="form-control"
                                   value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success gonder">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>
                <div id="danismanlik">

                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">
                        <br>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                        </div>
                        <br>
                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">
                                    <option value="1">TEŞVİK
                                    <option value="2">KVKK
                                    <option value="3">EĞİTİM
                                    <option value="4">BODROLAMA
                                    <option selected value="5">Danışmanlık
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>


                        <br>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">

                            <input type="hidden" name="offer_amount" class="form-control" value="1">
                        </div>
                        <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Ücret</label>
                            <input type="text" name="offer_money" class="form-control" value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success gonder">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>

                <!--Kvkk Bitiş-->
                <div id="Egitim">
                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                            <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">
                        </div>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">

                                    <option value="1">TEŞVİK
                                    <option value="2">KVKK
                                    <option selected value="3">EĞİTİM
                                    <option value="4">BODROLAMA
                                    <option value="5">Danışmanlık

                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">

                        <br>
                        <br>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Eğitim Gün Sayısı</label>
                            <input type="text" name="offer_amount" class="form-control"
                                   value="<?php echo e($offer->offer_amount); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Birim Fiyatı(Günlük Ücret)</label>
                            <input type="text" name="offer_money" class="form-control" value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">

                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success gonder">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>
                <!--Eğitim Bitiş-->

                <div id="Yazilim">
                    <form action="<?php echo e(route('offer.update',['id'=>$offer->id])); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                <option value="<?php echo e($offer->customer->id); ?>"><?php echo e($offer->customer->name); ?></option>

                            </select>
                            <input type="hidden" name="offer_status" value="<?php echo e($offer->offer_status); ?>">
                        </div>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller">
                                <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php if ($offer->target_seller_id == $seller->id) echo 'selected="selected"';?>value="<?php echo e($seller->id); ?>"><?php echo e($seller->seller_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">

                                    <option value="1">TEŞVİK
                                    <option value="2">KVKK
                                    <option value="3">EĞİTİM
                                    <option value="4">BODROLAMA
                                    <option value="5">Danışmanlık
                                    <option selected value="8">YAZILIM

                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="offer_id" value="<?php echo e($offer->id); ?>">
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="old_file" value="<?php echo e($offer->offer_file); ?>">

                        <br>
                        <br>

                        <input type="hidden" name="offer_amount" class="form-control" value="<?php echo e($offer->offer_amount); ?>">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">ÜCRET</label>
                            <input type="text" name="offer_money" class="form-control" value="<?php echo e($offer->offer_money); ?>">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" name="offer_date" class="form-control" value="<?php echo e($offer->offer_date); ?>">

                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button class="btn btn-success gonder">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </section>

    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            if (<?php echo e($offer->product); ?> == 1) {
                $("#bodrolama").hide(1000);
                $("#Egitim").hide(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").show(1000);
                $("#danismanlik").hide(1000);
            }


            if (<?php echo e($offer->product); ?> == 2) {

                $("#bodrolama").hide(1000);
                $("#Egitim").hide(1000);
                $("#kvkk").show(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").hide(1000);
            }
            if (<?php echo e($offer->product); ?> == 3) {
                $("#bodrolama").hide(1000);
                $("#Egitim").show(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").hide(1000);
            }


            if (<?php echo e($offer->product); ?> == 4) {
                $("#bodrolama").show(1000);
                $("#Egitim").hide(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").hide(1000);


            }
            if (<?php echo e($offer->product); ?> == 5) {
                $("#bodrolama").hide(1000);
                $("#Egitim").hide(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").show(1000);

            }
            if (<?php echo e($offer->product); ?> == 8) {
                $("#bodrolama").hide(1000);
                $("#Egitim").hide(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").hide(1000);
            }

        });
    </script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?><?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\morepayr\resources\views/backend/teklif/contract_upload.blade.php ENDPATH**/ ?>