@extends('backend.layout')
@section('content')
   <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <div class="box-body">

                    <div class="form-group" align="right" style="margin-top: 4px;">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <select class="form-control" name="product" >
                                <option selected value="bos">Seçiniz
                                <option value="tesvik">TEŞVİK
                                <option value="kvkk">KVKK
                                <option value="egitim">EĞİTİM
                                <option value="bodrolama">BODROLAMA
                                <option value="danismanlik">Danışmanlık
                            </select>
                        </div>
                    </div>
                <br>
                <br>
                <div id="bos" style="margin-right: 50px;">
                    <p>Ne Teklifi Yükliyceksiniz</p>
                </div>
                <div id="tesvik">
                    <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control selectpicker"  name="customer_id" data-live-search="true">
                                @foreach($customers as $customer )
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>






                        <input type="hidden" name="product" value="1">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" id="">
                                <option selected value="3">Elveda Öztürk</option>
                                <option selected value="1">Nergiz Yıldız Gönül</option>
                                <option selected value="5">Dış Kaynak</option>
                            </select>
                        </div>

                            <input type="hidden" name="offer_amount" class="form-control" value="1">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Yüzdelik Oranı</label>
                            <input type="text" name="offer_money" class="form-control">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                            <input type="date" name="offer_date" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Teklif Dosyası </label>
                            <input type="file" name="offer_file" class="form-control">
                        </div>
                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success ">Teklif Kaydet</button>
                        </div>
                    </form>
                </div>




                <div id="danismanlik">

                        <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <br>
                            <br>
                            <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                                <label for="exampleInputPassword1">Firma Seciniz</label>
                                <select class="form-control" name="customer_id">
                                    @foreach($customers as $customer )
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                                  <input type="hidden" name="product" value="5">




                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                                <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                                <select class="form-control" name="target_Seller_id" id="">
                                    <option selected value="3">Elveda Öztürk</option>
                                    <option selected value="1">Nergiz Yıldız Gönül</option>
                                    <option selected value="5">Dış Kaynak</option>
                                </select>
                            </div>




                                <input type="hidden" name="offer_amount" class="form-control" value="1">

                            <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">Ücret</label>
                                <input type="text" name="offer_money" class="form-control">
                            </div>

                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">KDV</label>
                                <select name="kdv" id="" class="form-control">
                                    <option value="1">KDV DAHİL</option>
                                    <option value="0">KDV DAHİL DEĞİL</option>
                                </select>
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                                <input type="date" name="offer_date" class="form-control">
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Açıklama Giriniz</label>
                                <input type="text" name="offer_explanation" class="form-control">
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Dosyası </label>
                                <input type="file" name="offer_file" class="form-control">
                            </div>
                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                                <button  class="btn btn-success gonder">Teklif Kaydet</button>
                            </div>
                        </form>
                </div>



                        <div id="bodrolama">
                            <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                            <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                                <label for="exampleInputPassword1">Firma Seciniz</label>
                                <select class="form-control" name="customer_id">
                                    @foreach($customers as $customer )
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <input type="hidden" name="product" value="4">








                                <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                                    <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                                    <select class="form-control" name="target_Seller_id" id="">
                                        <option selected value="3">Elveda Öztürk</option>
                                        <option selected value="1">Nergiz Yıldız Gönül</option>
                                        <option selected value="5">Dış Kaynak</option>
                                    </select>
                                </div>




                                    <input type="hidden" class="form-control" name="offer_amount" value="1">




                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">Birim Fiyatı</label>
                                <input type="text" name="offer_money" class="form-control">

                            </div>

                                <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                    <label for="exampleInputPassword1">KDV</label>
                                    <select name="kdv" id="" class="form-control">
                                        <option value="1">KDV DAHİL</option>
                                        <option value="0">KDV DAHİL DEĞİL</option>
                                    </select>
                                </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                                <input type="date" required name="offer_date" class="form-control">
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Açıklama Giriniz</label>
                                <input type="text" name="offer_explanation" class="form-control">
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Dosyası </label>
                                <input type="file" name="offer_file" class="form-control">
                            </div>
                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                                <button  class="btn btn-success ">Teklif Kaydet</button>
                            </div>
                            </form>
                        </div>
            <!--bodrolama bitiş-->

            <div id="kvkk">
                <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <br>
                <br>
                    <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                        <label for="exampleInputPassword1">Firma Seciniz</label>
                        <select class="form-control" name="customer_id">
                            @foreach($customers as $customer )
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <input type="hidden" name="product" value="2">

                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                        <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                        <select class="form-control" name="target_Seller_id" id="">
                            <option selected value="3">Elveda Öztürk</option>
                            <option selected value="1">Nergiz Yıldız Gönül</option>
                            <option selected value="5">Dış Kaynak</option>
                        </select>
                    </div>





                    <input type="hidden" name="offer_amount" class="form-control" value="1">

                <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

                <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                    <label for="exampleInputPassword1">Ücret</label>
                    <input type="text" name="offer_money" class="form-control">
                </div>

                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                        <label for="exampleInputPassword1">KDV</label>
                        <select name="kdv" id="" class="form-control">
                            <option value="1">KDV DAHİL</option>
                            <option value="0">KDV DAHİL DEĞİL</option>
                        </select>
                    </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                    <input type="date" required name="offer_date" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Açıklama Giriniz</label>
                    <input type="text" name="offer_explanation" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Teklif Dosyası </label>
                    <input type="file" name="offer_file" class="form-control">
                </div>
                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                    <button  class="btn btn-success gonder">Teklif Kaydet</button>
                </div>
                </form>
            </div>




            <!--Kvkk Bitiş-->
            <div id="Egitim">
                <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                        <label for="exampleInputPassword1">Firma Seciniz</label>
                        <select class="form-control" name="customer_id">
                            @foreach($customers as $customer )
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="product" value="3">

                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
                        <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                        <select class="form-control" name="target_Seller_id" id="">
                            <option selected value="3">Elveda Öztürk</option>
                            <option selected value="1">Nergiz Yıldız Gönül</option>
                            <option selected value="5">Dış Kaynak</option>
                        </select>
                    </div>


                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Eğitim Gün Sayısı</label>
                    <input type="text" name="offer_amount" class="form-control">
                </div>

                <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                    <label for="exampleInputPassword1">Birim Fiyatı(Günlük Ücret)</label>
                    <input type="text" name="offer_money" class="form-control">
                </div>

                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                        <label for="exampleInputPassword1">KDV</label>
                        <select name="kdv" id="" class="form-control">
                            <option value="1">KDV DAHİL</option>
                            <option value="0">KDV DAHİL DEĞİL</option>
                        </select>
                    </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                    <input type="date" name="offer_date" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Açıklama Giriniz</label>
                    <input type="text" name="offer_explanation" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Teklif Dosyası </label>
                    <input type="file" name="offer_file" class="form-control">
                </div>
                    <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                        <button  class="btn btn-success gonder">Teklif Kaydet</button>
                    </div>
                </form>
            </div>
            <!--Eğitim Bitiş-->





            </div>
        </div>
   </section>

   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
                <script>
       $(document).ready(function(){
           $("select").change(function(){
               $( "select option:selected").each(function(){
                   if($(this).attr("value")=="tesvik"){
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").show();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                   }
                   if($(this).attr("value")=="kvkk"){
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").show();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                   }
                   if($(this).attr("value")=="egitim"){
                       $("#bodrolama").hide();
                       $("#Egitim").show();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                   }
                   if($(this).attr("value")=="bodrolama")
                   {
                       $("#bodrolama").show();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();

                   }
                   if($(this).attr("value")=="danismanlik")
                   {
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").show();
                       $("#bos").hide();

                   }
                   if($(this).attr("value")=="bos")
                   {
                       $("#bodrolama").hide(1000);
                       $("#Egitim").hide(1000);
                       $("#kvkk").hide(1000);
                       $("#tesvik").hide(1000);
                       $("#danismanlik").hide(1000);
                       $("#bos").show(1000);

                   }


               });
           }).change();
       });
   </script>











@endsection
@section('css')@endsection
@section('js')@endsection


