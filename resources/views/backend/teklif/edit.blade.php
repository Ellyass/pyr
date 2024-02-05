@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <div class="box-body">


                <div id="tesvik">
                    <form action="{{route('pdf.tesvik')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="customer_id" value="{{$offer->customer_id}}">
                        <input type="hidden" name="offer_id" value="{{$offer->id}}">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Yeni Teklif</label>
                            <select class="form-control" name="new_tesvik_offer">
                                <option   value="guncelle">Evet</option>
                                <option selected value="hayir">Hayır</option>
                            </select>
                        </div>

                        <div id="newTesvik">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Sabit Ücret/Yüzdelik</label>
                            <select class="form-control" name="accept_type" >
                                <option selected value="Sucret">Seçiniz</option>
                                <option  value="ileri">Aylık Ücret</option>
                                <option  value="geri">Yüzdelik Değer</option>

                            </select>
                        </div>

                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                                <select class="form-control" name="target_Seller_id" >
                                    @foreach($sellers as $seller)
                                        <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        <input type="hidden" name="product" value="1">




                        <input type="hidden" name="offer_amount" class="form-control" value="1">

                        <div id="tesvik_s_y" class="form-group col-md-5 col-sm-3 col-xs-12 col"  >

                            <div id="L_sabit" class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">Sabit Ücret</label>
                            </div>
                            <div id="L_yuzdelik" class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">Yüzdelik Oranı</label>
                            </div>
                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <input type="text" name="offer_money" minlength="1" maxlength="100" class="form-control">
                            </div>
                        </div>


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv"  class="form-control">
                                <option value="KDV DAHİLDİR">KDV DAHİLDİR</option>
                                <option value="KDV DAHİL DEĞİLDİR">KDV DAHİL DEĞİLDİR</option>
                            </select>
                        </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                                <input type="date" name="offer_date" class="form-control">
                            </div>

                        </div>





                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Eklenecek Not</label>
                            <input type="text" name="offer_not" class="form-control">
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success ">Pdf Oluştur</button>
                        </div>
                    </form>
                </div>



               <div id="bodrolama">

                    <form action="{{route('pdf.bordrolama')}}" method="POST" >

                        @csrf

                        <input type="hidden" name="product" value="4">
                        <input type="hidden" name="customer_id" value="{{$offer->customer_id}}">
                        <div class="col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Yeni Teklif</label>
                            <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="teklif_new">
                                <option value="A">Evet</option>
                                <option selected value="B">Hayır</option>

                            </select>
                        </div>
                        <input type="hidden" name="offer_id" value="{{$offer->id}}">
                        <input type="hidden" name="customer_id" value="{{$offer->customer_id}}">
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="new_bordrolama">



                        <div class="col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Bordro Ücreti</label>
                            <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="bordro_type" >
                                <option selected value="seç">Seçiniz</option>
                                <option value="bordro_ucret">Bodro Başı</option>
                                <option value="net_ucreti">Net Ücret</option>
                            </select>
                        </div>

                        <div class="col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Teşvik Ücreti</label>
                            <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="tesvik_type">

                                <option selected  value="Ücretsiz">Ucretsiz</option>
                                <option value="net_ucret_tesvik">Net Ücret</option>
                                <option value="yuzdelik_ucret_tesvik">Yüzdelik</option>
                            </select>
                        </div>

                        <div id="btype"   class="form-group  col-md-5 col-sm-3 col-xs-12 col" >
                            <div id="net_ucrett">
                                <label for="exampleInputPassword1">Net Ücret(Aylık)</label>
                            </div>
                            <div id="basi_ucreti"  >
                                <label for="exampleInputPassword1">Bordro Başı</label>

                            </div>
                        </div>
                            <div class="form-group col-md-5 col-sm-3 col-xs-12 ">
                            <input type="text" name="offer_money" class="form-control">
                            </div>




                        <div id="type"   class="form-group  col-md-5 col-sm-12 col-xs-12 col" >
                            <div id="net_tesvik">
                                <label for="exampleInputPassword1"> Teşvik Net Ücret(Aylık)</label>
                            </div>
                            <div id="tesvik_yuzdelik">
                                <label for="exampleInputPassword1">Tesvik Yüzdelik</label>
                            </div>
                            <div id="type">
                                <input type="text" name="tesvik_money" class="form-control"></div>
                        </div>

                        <input type="hidden" class="form-control" name="offer_amount" value="1">

                        <div  class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv"  class="form-control">
                                <option value="KDV DAHİL">KDV DAHİL</option>
                                <option value="KDV DAHİL DEĞİL">KDV DAHİL DEĞİL</option>
                            </select>
                        </div>
                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                                <input type="date" name="offer_date" class="form-control">
                            </div>
                        </div>




                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success ">Pdf Oluştur</button>
                        </div>
                    </form>
                </div>
                <!--bodrolama bitiş-->

                <div id="kvkk">
                    <form action="{{route('pdf.kvkk')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product" value="2">

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Yeni Pdf</label>
                            <select class="form-control" name="new_kvkk_offer" >
                                <option  value="Update">Evet</option>
                                <option selected value="Hayır">Hayır</option>

                            </select>
                        </div>
                        <input type="hidden" name="customer_id" value="{{$offer->customer_id}}">
                        <input type="hidden" name="offer_id" value="{{$offer->id}}">
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div id="new_kvkk">






                        <input type="hidden" name="offer_amount" class="form-control" value="1">

                        <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Ücret</label>
                            <input type="text" name="offer_money" class="form-control">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Yüzdelik</label>
                            <input type="text" name="yuzdelik" class="form-control">
                        </div>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Konaklama Durum</label>
                            <select class="form-control" name="home">
                                <option value="(Konaklama tarafımıza aittir)">Konaklama tarafımıza aittir</option>
                                <option value="(Konaklama tarafınıza aittir)">Konaklama tarafınıza aittir</option>
                                <option value="yok">bos</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Penetrasyon</label>
                            <select class="form-control" name="penetrasyon">
                                <option  value="var">Penetrasyon Testi Var</option>
                                <option selected value="yok">Penetrasyon Testi Yok</option>

                            </select>
                        </div>

                        <div id="penetrasyon_test_ucret">
                            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                                <label for="exampleInputPassword1">Penetrasyon Testi Ücreti</label>
                                <select class="form-control" name="penetrasyon_ucret_sql">
                                    <option selected value="0">Seçiniz</option>
                                    <option value="ucretVar">Penetrasyon Testi Ücreti Var</option>
                                    <option value="ucretYok">Penetrasyon Testi Ücreti  Yok</option>
                                </select>
                            </div>
                        </div>

                        <div  id="ucret_var" class="form-group col-md-5 col-sm-3 col-xs-12 col">
                            <label for="exampleInputPassword1">Penetrasyon Testi Ücreti Giriniz</label>
                            <input class="form-control" type="text" name="penetrasyon_ucreti">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv"  class="form-control">
                                <option value="KDV DAHİLDİR">KDV DAHİLDİR</option>
                                <option value="KDV DAHİL DEĞİLDİR">KDV DAHİL DEĞİLDİR</option>
                            </select>
                        </div>
                             <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                 <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                                 <input type="date" name="offer_date" class="form-control">
                             </div>
                         </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Eklenecek Not</label>
                            <input type="text" name="offer_not" class="form-control">
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success gonder">Pdf Oluştur</button>
                        </div>
                    </form>
                </div>

                <div id="danismanlik">
                    <form action="{{route('pdf.danismanlik')}}" method="POST">
                        @csrf

                        <br>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Yeni Teklif</label>
                            <select class="form-control" name="new_danismanlik_offer">
                                <option value="Update">Evet</option>
                                <option selected value="Hayir">Hayır</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div id="new_danismanlik">
                        <input type="hidden" name="product" value="5">
                            <input type="hidden" name="offer_id" value="{{$offer->id}}">
                            <input type="hidden" name="customer_id" value="{{$offer->customer_id}}">









                        <input type="hidden" name="offer_amount" class="form-control" value="1">

                        <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->
                        <div class="col-md-5 col-sm-3 col-xs-12">
                            <label for="exampleInputPassword1">Aylık/Net</label>
                            <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="danismanlik_type" >
                                <option selected value="seç">Seçiniz</option>
                                <option value="Aylık">Aylık</option>
                                <option value="">Net Ücret</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Ücret</label>
                            <input type="text" name="offer_money" class="form-control">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Yüzdelik</label>
                            <input type="text" name="yuzdelik" class="form-control">
                        </div>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Konaklama Durum</label>
                            <select class="form-control" name="home">
                                <option value="(Konaklama tarafımıza aittir)">Konaklama tarafımıza aittir</option>
                                <option value="(Konaklama tarafınıza aittir)">Konaklama tarafınıza aittir</option>
                                <option value="">bos</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv"  class="form-control">
                                <option value="KDV DAHİLDİR">KDV DAHİLDİR</option>
                                <option value="KDV DAHİL DEĞİLDİR">KDV DAHİL DEĞİLDİR</option>
                            </select>
                        </div>
                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                                <input type="date" name="offer_date" class="form-control">
                            </div>

                        </div>





                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success gonder">Pdf Oluştur</button>
                        </div>
                    </form>
                </div>
                <!--Kvkk Bitiş-->

                <div id="Egitim">
                    <form action="{{route('offer.update',['id'=>$offer->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">

                                    <option selected value="{{$offer->customer->id}}">{{$offer->customer->name}}</option>

                            </select>
                            <input type="hidden" name="offer_status" value="{{$offer->offer_status}}">
                        </div>
                        <br>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" align="right" style="margin-top: 4px;">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <select class="form-control" name="product">
                                      <option <?php if ($offer->product ==1){ echo 'selected';}  ?>  value="1">TEŞVİK
                                      <option <?php if ($offer->product ==2){ echo 'selected';}  ?>  value="2">KVKK
                                      <option <?php if ($offer->product ==3){ echo 'selected';}  ?> value="3">EĞİTİM
                                      <option <?php if ($offer->product ==4){ echo 'selected';}  ?>  value="4">BODROLAMA
                                      <option  <?php if ($offer->product ==5){ echo 'selected';}  ?> value="5">Danışmanlık
                                      <option <?php if ($offer->product ==8){ echo 'selected';}  ?> value="8">YAZILIM</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="offer_id" value="{{$offer->id}}">
                        <input type="hidden" value="{{Auth::user()->id}}">
                        <input type="hidden" name="old_file" value="{{$offer->offer_file}}">
                            <input type="hidden" name="offer_amount" class="form-control" value="{{$offer->offer_amount}}">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">Birim Fiyatı</label>
                            <input type="text" name="offer_money" class="form-control" value="{{$offer->offer_money}}">
                        </div>

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv" id="" class="form-control">
                                <option value="1">KDV DAHİL</option>
                                <option value="0">KDV DAHİL DEĞİL</option>
                            </select>
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

    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
                        if({{$offer->product}}==1)
                        {
                            $("#bodrolama").hide(1000);
                            $("#Egitim").hide(1000);
                            $("#kvkk").hide(1000);
                            $("#tesvik").show(1000);
                            $("#danismanlik").hide(1000);
                        }


                    if({{$offer->product}}==2){

                        $("#bodrolama").hide(1000);
                        $("#Egitim").hide(1000);
                        $("#kvkk").show(1000);
                        $("#tesvik").hide(1000);
                        $("#danismanlik").hide(1000);
                    }
                    if({{$offer->product}}==3){
                        $("#bodrolama").hide(1000);
                        $("#Egitim").show(1000);
                        $("#kvkk").hide(1000);
                        $("#tesvik").hide(1000);
                        $("#danismanlik").hide(1000);
                    }


                    if({{$offer->product}}==4)
                    {
                        $("#bodrolama").show(1000);
                        $("#Egitim").hide(1000);
                        $("#kvkk").hide(1000);
                        $("#tesvik").hide(1000);
                        $("#danismanlik").hide(1000);


                    }
                            if({{$offer->product}}==5){
                                $("#bodrolama").hide(1000);
                                $("#Egitim").hide(1000);
                                $("#kvkk").hide(1000);
                                $("#tesvik").hide(1000);
                                $("#danismanlik").show(1000);

                            }

            if({{$offer->product}}==8){
                $("#bodrolama").hide(1000);
                $("#Egitim").show(1000);
                $("#kvkk").hide(1000);
                $("#tesvik").hide(1000);
                $("#danismanlik").hide(1000);

            }

        });

    </script>


    <script>
        $("select").change(function(){
            $( "select option:selected").each(function(){


                if($(this).attr("value")=="bordro_ucret"){
                    $("#basi_ucreti").show();
                    $("#net_ucrett").hide();
                    $("#bordro_type").show();

                }

                if($(this).attr("value")=="net_ucreti"){

                    $("#basi_ucreti").hide();
                    $("#net_ucrett").show();
                    $("#bordro_type").show();
                }
                if($(this).attr("value")=="seç"){

                    $("#basi_ucret").hide();
                    $("#net_ucrett").hide();
                    $("#btype").hide();
                }

            });
        }).change();

    </script>











@endsection
@section('css')@endsection
@section('js')@endsection


