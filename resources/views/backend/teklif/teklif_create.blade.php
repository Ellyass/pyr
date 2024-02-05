@extends('backend.layout')
@section('content')
    <style>
        .entry:not(:first-of-type)
        {
            margin-top: 10px;
        }

        .glyphicon
        {
            font-size: 12px;
        }
    </style>

   <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <div class="box-body">

                    <div class="form-group " align="right" style="margin-top: 4px;">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="" style="" class="col-sm-10 col-xs-12 col-md-5">Yeni Sistem</label>
                            <select class="form-control" name="product" >
                                <option selected value="bos">Seçiniz
                                <option value="tesvik">TEŞVİK</option>
                                <option value="kvkk">KVKK</option>
                                <option value="egitim">EĞİTİM</option>
                                <option value="bodrolama">BODROLAMA</option>
                                <option value="danismanlik">Danışmanlık</option>
                                <option value="ikmetrik">İKMETRİK</option>
                                <option value="İYS Danışmanlık">İYS DANIŞMANLIK</option>
                                <option value="Performans">Performans</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6  col-xs-12">
                                <label for="" style="" class="col-sm-10 col-xs-12 col-md-5">Eski Sistem</label>
                                <select class="form-control" name="eskiproduct" >
                                    <option value="nul">Seciniz</option>
                                    <option value="t">TEŞVİK</option>
                                    <option value="k">KVKK</option>
                                    <option value="e">EĞİTİM</option>
                                    <option value="b">BODROLAMA</option>
                                    <option value="d">Danışmanlık</option>
                                    <option value="y">Yazılım</option>

                                </select>
                            </div>
                        </div>
                    </div>
                <br>
                <br>
                <div id="bos" style="margin-right: 20px;">
                    <p>Ne Teklifi Yükliyceksiniz</p>
                </div>
                <div id="performans">
                    <div class="container container-fluid">
                    <form action="{{route('pdf.performans')}}" method="POST">
                        @csrf

                            <div class="card-header">
                                <h4></h4>
                            </div>
                        <br>
                            <div class="container">
                                <div class="row m-t-5">
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Firma Seç</label>
                                                <select class="selectpicker select2 form-control" name="customer_id" data-live-search="true" id="">
                                                    @foreach($customers as $customer)
                                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Pazarlamacı Seç</label>
                                                <select class="form-control" name="target_Seller_id" >
                                                    @foreach($sellers as $seller)
                                                        <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                <div class="row m-t-5">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="">Aylık Ücret</label>
                                            <input type="text"  class="form-control" name="month_money" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Yıllık Ücret</label>
                                            <input type="text" class="form-control" name="year_money" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="">Çalışan Sayısı</label>
                                            <input type="number" class="form-control" name="employee_count" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">KDV</label>
                                                <select name="kdv"  class="form-control">
                                                    <option value="KDV DAHİLDİR">KDV DAHİLDİR</option>
                                                    <option value="KDV DAHİL DEĞİLDİR">KDV DAHİL DEĞİLDİR</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                                            <input type="date" name="offer_date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                                            <input type="text" name="offer_explanation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                      <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                                          <button  class="btn btn-success ">Pdf Oluştur</button>
                                      </div>
                    </form>
                </div>


                </div>
                <div id="tesvik">
                    <form action="{{route('pdf.tesvik')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control selectpicker"  name="customer_id" data-live-search="true">
                                @foreach($customers as $customer )
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">İş başı Eğitim</label>
                            <select class="form-control" name="egitim" >

                                <option selected value="var">Eğitim Maddesi Var</option>
                                <option selected value="yok">Eğitim Maddesi Yok</option>

                            </select>
                        </div>



                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Sabit Ücret/Yüzdelik</label>
                            <select class="form-control" name="accept_type" >
                                <option selected value="Sucret">Seçiniz</option>
                                <option  value="ileri">Aylık Ücret</option>
                                <option  value="geri">Yüzdelik Değer</option>

                            </select>
                        </div>



                        <input type="hidden" name="product" value="1">
                        <input type="hidden" name="new_tesvik_offer" value="new_tesvik">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>



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
                            <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                            <input type="date" name="offer_date" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div data-role="dynamic-fields">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label class="sr-only" for="field-name">Not Ekleme</label>
                                                <input type="text" name="not" class="form-control" id="field-name" placeholder="Not Yazınız">
                                            </div>

                                            <button class="btn btn-danger" data-role="remove">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </button>
                                            <button class="btn btn-primary" data-role="add">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>  <!-- /div.form-inline -->
                                    </div>  <!-- /div[data-role="dynamic-fields"] -->
                                </div>  <!-- /div.col-md-12 -->
                            </div>  <!-- /div.row -->
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success ">Pdf Oluştur</button>
                        </div>
                    </form>
                </div>
                <div id="danismanlik">
                    <form action="{{route('pdf.danismanlik')}}" method="POST">
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
                        <input type="hidden" name="new_danismanlik_offer" value="new_offer">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>





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

                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" required name="offer_date" class="form-control">
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
                        <div id="bodrolama">

                            <form action="{{route('pdf.bordrolama')}}" method="POST" >

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
                                <input type="hidden" name="teklif_new" value="Evet">



                                <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                                    <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                                    <select class="form-control" name="target_Seller_id" >
                                        @foreach($sellers as $seller)
                                            <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-5 col-sm-3 col-xs-12">
                                    <label for="exampleInputPassword1">Bordro Ücreti</label>
                                    <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="bordro_type" >
                                        <option selected value="seç">Seçiniz</option>
                                        <option value="bordro_ucret">Bodro Başı</option>
                                        <option value="net_ucret">Net Ücret</option>
                                    </select>
                                </div>

                                <div class="col-md-5 col-sm-3 col-xs-12">
                                    <label for="exampleInputPassword1">Teşvik Ücreti</label>
                                    <select class="form-control col-md-5 col-sm-3 col-xs-12 " name="tesvik_type">
                                        <option selected  value="yok">Teşvik Hizmeti Yok</option>
                                        <option value="Ücretsiz">Ucretsiz</option>
                                        <option value="net_ucret_tesvik">Net Ücret</option>
                                        <option value="yuzdelik_ucret_tesvik">Yüzdelik</option>
                                    </select>
                                </div>

                                <div id="bordro_type" style=" margin-top: 10px;"  class="form-group  col-md-5 col-sm-3 col-xs-12 col">

                                <div id="net_ucrett">
                                    <label for="exampleInputPassword1">Net Ücret(Aylık)</label>
                                </div>

                                <div id="basi_ucret">
                                    <label for="exampleInputPassword1">Bordro Başı</label>
                                </div>

                                    <input type="text" name="offer_money" class="form-control">
                                </div>




                                <div id="type" style=" margin-top: 8px;"  class="form-group  col-md-5 col-sm-12 col-xs-12 col" >
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

                            <div style="margin-top: 15px;" class="form-group form-group col-md-5 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                                <input type="date" required name="offer_date" class="form-control">
                            </div>

                            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                                <label for="exampleInputPassword1">Açıklama Giriniz</label>
                                <input type="text" name="offer_explanation" class="form-control">
                            </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div data-role="dynamic-fields">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="field-name">Not Ekleme</label>
                                                        <input type="text" name="not" class="form-control" id="field-name" placeholder="Not Yazınız">
                                                    </div>

                                                    <button class="btn btn-danger" data-role="remove">
                                                        <span class="glyphicon glyphicon-remove"></span>
                                                    </button>
                                                    <button class="btn btn-primary" data-role="add">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </div>  <!-- /div.form-inline -->
                                            </div>  <!-- /div[data-role="dynamic-fields"] -->
                                        </div>  <!-- /div.col-md-12 -->
                                    </div>  <!-- /div.row -->
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


                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                        <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                        <select class="form-control" name="target_Seller_id" >
                            @foreach($sellers as $seller)
                                <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <input type="hidden" name="new_kvkk_offer" class="form-control" value="new_offer">

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
                        <label for="exampleInputPassword1">Eklenecek Not</label>
                        <input type="text" name="offer_not" class="form-control">
                    </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                    <input type="date" required name="offer_date" class="form-control">
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
                <div id="iys">
                    <form action="{{route('pdf.iys')}}" method="POST">
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



                        <input type="hidden" name="product" value="7">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>




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
                            <label for="exampleInputPassword1">KDV</label>
                            <select name="kdv"  class="form-control">
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


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button  class="btn btn-success gonder">Pdf Oluştur</button>
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


                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                        <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                        <select class="form-control" name="target_Seller_id" >
                            @foreach($sellers as $seller)
                                <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                            @endforeach
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
                        <select name="kdv"  class="form-control">
                            <option value="Aylık">KDV DAHİL</option>
                            <option value="Yıllık">KDV DAHİL DEĞİL</option>
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
                <div  id="ikmetrik">
                    <form action="{{route('pdf.ikmetrik')}}" method="POST">
                        @csrf
                        <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Firma Seciniz</label>
                            <select class="form-control" name="customer_id">
                                @foreach($customers as $customer )
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="product" value="6">


                        <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="target_Seller_id" >
                                @foreach($sellers as $seller)
                                    <option selected value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">İlgili Alıcı</label>
                            <input type="text" name="alici" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12" >
                            <label for="exampleInputPassword1">Anlaşma Türü</label>
                                <select class="form-control" name="accept_type" >
                                    <option value="null">Seçiniz</option>
                                    <option value="Aylık">Aylık </option>
                                    <option value="Yıllık">Yıllık</option>
                                </select>
                        </div>

                            <div id="month" class="form-group col-md-10 col-sm-3 col-xs-12" >
                                <label for="exampleInputPassword1">Aylık</label>
                                <select class="form-control" name="month">
                                    <option selected value="">Seçiniz</option>
                                     <option value="50">0-20</option>
                                     <option value="5">21-300</option>
                                     <option value="4">301-1000</option>
                                     <option value="2">1001-5000</option>
                                     <option value="1">5000+</option>
                                </select>

                                <div style="margin-top: 10px; margin-right: 15px;" class="col-md-5 col-sm-3 col-xs-12"   >
                                    <label for="">Belirlenen Ücreti Giriniz</label>
                                    <input class="form-control"  type="text" name="month_free">
                                </div>


                                    </div>

                            <div id="year" class="form-group col-md-10 col-sm-3 col-xs-12" >
                                <label for="exampleInputPassword1">Yıllık</label>
                                <select class="form-control" name="year" >
                                    <option selected value="">Seçiniz</option>
                                    <option value="40">0-20</option>
                                    <option value="4">21-300</option>
                                    <option value="3.2">301-1000</option>
                                    <option value="100000">1001-5000</option>
                                    <option value="1">5000+</option>
                                </select>

                            <div style="margin-top: 15px;" class="col-md-5 col-sm-3 form-group"  >
                                <label for="">Belirlenen Ücreti Giriniz</label>
                                <input class="form-control"  type="text" name="year_free">
                            </div>

                        </div>

                               <input type="hidden" name="kdv" value="0">




                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
                            <input type="date" name="offer_date" class="form-control">
                        </div>

                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                            <label for="exampleInputPassword1">Açıklama Giriniz</label>
                            <input type="text" name="offer_explanation" class="form-control">
                        </div>


                        <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right">
                            <button name="pdf"  class="btn btn-success gonder">PDF oluştur</button>
                        </div>
                    </form>
                </div>
            <!--Eğitim Bitiş-->
            </div>
        </div>
   </section>
   <div id="t">
       <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
           @csrf


           <div class="form-group col-md-5 col-sm-3 col-xs-12" >
               <label for="exampleInputPassword1">Firma Seciniz</label>
               <select class="form-control" name="customer_id">
                    @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->name}}</option>
                   @endforeach
               </select>
           </div>
           <br>
           <input type="hidden" name="product" value="1">
           <div class="form-group col-md-5 " id="seller_type">
               <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
               <select class="form-control" name="Seller" >
                    @foreach($sellers as $seller)
                   <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                   @endforeach
               </select>
           </div>

           <input type="hidden" name="offer_amount" value="1">
           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">Yüzdelik Oranı</label>
               <input type="text" name="offer_money" class="form-control" value="">
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">KDV</label>
               <select name="kdv"  class="form-control">
                   <option value="1">KDV DAHİL</option>
                   <option value="0">KDV DAHİL DEĞİL</option>
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
               <input type="date" name="offer_date" class="form-control" value="">
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

    <div id="y">
        <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group col-md-5 col-sm-3 col-xs-12" >
                <label for="exampleInputPassword1">Firma Seciniz</label>
                <select class="form-control" name="customer_id">
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <input type="hidden" name="product" value="8">
            <div class="form-group col-md-5 " id="seller_type">
                <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                <select class="form-control" name="Seller" >
                    @foreach($sellers as $seller)
                        <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="offer_amount" value="1">
            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                <label for="exampleInputPassword1">Ücret</label>
                <input type="text" name="offer_money" class="form-control" value="">
            </div>

            <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
                <label for="exampleInputPassword1">KDV</label>
                <select name="kdv"  class="form-control">
                    <option value="1">KDV DAHİL</option>
                    <option value="0">KDV DAHİL DEĞİL</option>
                </select>
            </div>

            <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
                <input type="date" name="offer_date" class="form-control" value="">
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



   <div id="b">
       <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
           @csrf

           <div class="form-group col-md-5 col-sm-3 col-xs-12" >
               <label for="exampleInputPassword1">Firma Seciniz</label>
               <select class="form-control" name="customer_id">
                    @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->name}}</option>
                   @endforeach
               </select>
           </div>
           <input type="hidden" name="product" value="4">
           <br>
           <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
               <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
               <select class="form-control" name="Seller" >
                 @foreach($sellers as $seller)
                       <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                   @endforeach
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Çalışan Sayısı</label>
               <input type="text" name="offer_amount" class="form-control" value="">
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">Birim Fiyatı</label>
               <input type="text" name="offer_money" class="form-control" value="">
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">KDV</label>
               <select name="kdv"  class="form-control">
                   <option value="1">KDV DAHİL</option>
                   <option value="0">KDV DAHİL DEĞİL</option>
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Teklif Tarihini Girinizz</label>
               <input type="date" name="offer_date" class="form-control" value="">
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

   <div id="k">
       <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
           @csrf

           <br>
           <br>
           <div class="form-group col-md-5 col-sm-3 col-xs-12" >
               <label for="exampleInputPassword1">Firma Seciniz</label>
               <select class="form-control" name="customer_id">
                    @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->name}}</option>
                   @endforeach
               </select>
           </div>
           <br>
           <input type="hidden" name="product" value="2">
           <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
               <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
               <select class="form-control" name="Seller" >
                   @foreach($sellers as $seller)
                       <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                   @endforeach
               </select>
           </div>


           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <input type="hidden" name="offer_amount" class="form-control" value="1">
           </div>


           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">Ücret</label>
               <input type="text" required name="offer_money" class="form-control" value="" >
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">KDV</label>
               <select name="kdv"  class="form-control">
                   <option value="1">KDV DAHİL</option>
                   <option value="0">KDV DAHİL DEĞİL</option>
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
               <input type="date"  name="offer_date" class="form-control" value="">
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
   <div id="d">

       <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
           @csrf
           <br>
           <br>
           <div class="form-group col-md-5 col-sm-3 col-xs-12" >
               <label for="exampleInputPassword1">Firma Seciniz</label>
               <select class="form-control" name="customer_id">
                    @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->name}}</option>
                   @endforeach
               </select>
           </div>
           <br>
           <input type="hidden" name="product" value="5">

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
               <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
               <select class="form-control" name="Seller" >
                @foreach($sellers as $seller)
                       <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                   @endforeach
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >

               <input type="hidden" name="offer_amount" class="form-control" value="1">
           </div>
           <!--birim fiyatı varsayılan 1 olarak tanımlanacak -->

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">Ücret</label>
               <input type="text" name="offer_money" class="form-control" value="" >
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">KDV</label>
               <select name="kdv"  class="form-control">
                   <option value="1">KDV DAHİL</option>
                   <option value="0">KDV DAHİL DEĞİL</option>
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
               <input type="date" name="offer_date" class="form-control" value="">
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

   <div id="e">
       <form action="{{route('offer.import')}}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group col-md-5 col-sm-3 col-xs-12" >
               <label for="exampleInputPassword1">Firma Seciniz</label>
               <select class="form-control" name="customer_id">
                   @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->name}}</option>
                   @endforeach
               </select>
               <input type="hidden" name="product" value="3">
           </div>
           <br>
           <div class="form-group col-md-5 col-sm-3 col-xs-12 col" id="seller_type">
               <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
               <select class="form-control" name="Seller" id="">
                   @foreach($sellers as$seller)
                   <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                   @endforeach
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Eğitim Gün Sayısı</label>
               <input type="text" name="offer_amount" class="form-control" value="">
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">Birim Fiyatı(Günlük Ücret)</label>
               <input type="text" name="offer_money" class="form-control" value="">
           </div>

           <div class="form-group col-md-5 col-sm-3 col-xs-12 col"  >
               <label for="exampleInputPassword1">KDV</label>
               <select name="kdv"  class="form-control">
                   <option value="1">KDV DAHİL</option>
                   <option value="0">KDV DAHİL DEĞİL</option>
               </select>
           </div>

           <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
               <label for="exampleInputPassword1">Teklif Tarihini Giriniz</label>
               <input type="date" name="offer_date" class="form-control" value="">

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
           $("select").change(function(){
               $( "select option:selected").each(function(){


                   if($(this).attr("value")=="t"){
                           $("#b").hide();
                           $("#e").hide();
                           $("#k").hide();
                           $("#t").show();
                           $("#d").hide();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#y").hide();
                       $("#bos").hide();

           }
                   if($(this).attr("value")=="k"){

                       $("#b").hide();
                       $("#e").hide();
                       $("#k").show();
                       $("#t").hide();
                       $("#d").hide();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#y").hide();
                       $("#bos").hide();

                   }
                   if($(this).attr("value")=="e"){
                       $("#b").hide();
                       $("#e").show();
                       $("#k").hide();
                       $("#t").hide();
                       $("#d").hide();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#y").hide();
                       $("#bos").hide();

                   }

                   if($(this).attr("value")=="b")
                   {
                       $("#b").show();
                       $("#e").hide();
                       $("#k").hide();
                       $("#t").hide();
                       $("#d").hide();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#y").hide();
                       $("#bos").hide();



                   }
                   if($(this).attr("value")=="d"){
                       $("#b").hide();
                       $("#e").hide();
                       $("#k").hide();
                       $("#t").hide();
                       $("#d").show();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#y").hide();
                       $("#bos").hide();


                   }
                   if($(this).attr("value")=="y"){
                       $("#b").hide();
                       $("#e").hide();
                       $("#k").hide();
                       $("#t").hide();
                       $("#d").hide();
                       $("#y").show();
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#bos").hide();


                   }
                   if($(this).attr("value")=="nul")
                   {
                       $("#b").hide();
                       $("#e").hide();
                       $("#k").hide();
                       $("#t").hide();
                       $("#d").hide();
                       $("#bos").show();
                       $("#y").hide();

                   }


                   });
           }).change();
       });
   </script>

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
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#bos").hide();
                       $("#performans").hide();
                   }
                   if($(this).attr("value")=="kvkk"){
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").show();
                       $("#ikmetrik").hide();
                       $("#tesvik").hide();
                       $("#iys").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                       $("#performans").hide();
                   }
                   if($(this).attr("value")=="egitim"){
                       $("#bodrolama").hide();
                       $("#Egitim").show();
                       $("#kvkk").hide();
                       $("#ikmetrik").hide();
                       $("#tesvik").hide();
                       $("#iys").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                       $("#performans").hide();
                   }
                   if($(this).attr("value")=="bodrolama")
                   {
                       $("#bodrolama").show();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#ikmetrik").hide();
                       $("#tesvik").hide();
                       $("#iys").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                       $("#performans").hide();

                   }
                   if($(this).attr("value")=="danismanlik")
                   {
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#ikmetrik").hide();
                       $("#tesvik").hide();
                       $("#iys").hide();
                       $("#danismanlik").show();
                       $("#bos").hide();
                       $("#performans").hide();

                   }
                   if($(this).attr("value")=="ikmetrik")
                   {
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#tesvik").hide();
                       $("#iys").hide();
                       $("#danismanlik").hide();
                       $("#ikmetrik").show();
                       $("#bos").hide();
                       $("#performans").hide();

                   }
                   if($(this).attr("value")=="bos")
                   {
                       $("#bodrolama").hide(1000);
                       $("#Egitim").hide(1000);
                       $("#kvkk").hide(1000);
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#tesvik").hide(1000);
                       $("#danismanlik").hide(1000);
                       $("#bos").show(1000);
                       $("#performans").hide();

                   }
                   if($(this).attr("value")=="İYS Danışmanlık")
                   {
                       $("#bodrolama").hide(1000);
                       $("#Egitim").hide(1000);
                       $("#kvkk").hide(1000);
                       $("#ikmetrik").hide();
                       $("#iys").show();
                       $("#tesvik").hide(1000);
                       $("#danismanlik").hide(1000);
                       $("#bos").hide(1000);
                       $("#performans").hide();

                   }
                   if($(this).attr("value")=="Performans")
                   {
                       $("#bodrolama").hide();
                       $("#Egitim").hide();
                       $("#kvkk").hide();
                       $("#ikmetrik").hide();
                       $("#iys").hide();
                       $("#tesvik").hide();
                       $("#danismanlik").hide();
                       $("#bos").hide();
                       $("#performans").show();

                   }


               });
           }).change();
       });
   </script>

   <script>
       $(document).ready(function(){
           $("select").change(function(){
               $( "select option:selected").each(function(){

                   if($(this).attr("value")=="Aylık"){
                       $("#month").show();
                       $("#year").hide();

                   }

                   if($(this).attr("value")=="Yıllık"){

                       $("#month").hide();
                       $("#year").show();
                   }
                   if($(this).attr("value")=="null"){
                       $("#month").hide();
                       $("#year").hide();
                   }



               });
           }).change();
       });
   </script>
   <script>
       $(document).ready(function(){
           $("select").change(function(){
               $( "select option:selected").each(function(){

                   if($(this).attr("value")=="bordro_ucret"){
                       $("#basi_ucret").show();
                       $("#net_ucrett").hide();
                       $("#bordro_type").show();

                   }

                   if($(this).attr("value")=="net_ucret"){

                       $("#basi_ucret").hide();
                       $("#net_ucrett").show();
                       $("#bordro_type").show();
                   }
                   if($(this).attr("value")=="seç"){

                       $("#basi_ucret").hide();
                       $("#net_ucrett").hide();
                       $("#bordro_type").hide();
                   }
                   if($(this).attr("value")=="net_ucret_tesvik"){
                       $("#tesvik_yuzdelik").hide();
                       $("#net_tesvik").show();
                       $("#type").show();
                   }
                   if($(this).attr("value")=="yuzdelik_ucret_tesvik"){
                       $("#tesvik_yuzdelik").show();
                       $("#net_tesvik").hide();
                       $("#type").show();
                   }
                   if($(this).attr("value")=="Ücretsiz"){
                       $("#tesvik_yuzdelik").hide();
                       $("#net_tesvik").hide();
                       $("#type").hide();
                   }



               });
           }).change();
       });
   </script>
   <script>
       $(document).ready(function(){
           $("select").change(function(){
               $( "select option:selected").each(function(){

                   if($(this).attr("value")=="ileri"){
                       $("#L_sabit").show();
                       $("#L_yuzdelik").hide();
                       $("#tesvik_s_y").show();

                   }

                   if($(this).attr("value")=="geri"){

                       $("#L_sabit").hide();
                       $("#L_yuzdelik").show();
                       $("#tesvik_s_y").show();
                   }

                   if($(this).attr("value")=="Sucret"){

                       $("#L_sabit").hide();
                       $("#L_yuzdelik").hide();
                       $("#tesvik_s_y").hide();
                   }




               });
           }).change();
       });
   </script>

   <script>
       $(document).ready(function(){
           $("select").change(function(){
               $( "select option:selected").each(function(){

                   if($(this).attr("value")=="var"){

                       $("#ucret_var").hide();
                       $("#penetrasyon_test_ucret").show();
                   }
                   if($(this).attr("value")=="yok"){
                       $("#ucret_var").hide();
                       $("#penetrasyon_test_ucret").hide();
                   }
                   if($(this).attr("value")=="ucretVar"){
                       $("#ucret_var").show();
                   }
               });
           }).change();
       });
   </script>
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
       $(function() {
           // Remove button click
           $(document).on(
               'click',
               '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
               function(e) {
                   e.preventDefault();
                   $(this).closest('.form-inline').remove();
               }
           );
           // Add button click
           $(document).on(
               'click',
               '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
               function(e) {
                   e.preventDefault();
                   var container = $(this).closest('[data-role="dynamic-fields"]');
                   new_field_group = container.children().filter('.form-inline:first-child').clone();
                   new_field_group.find('input').each(function(){
                       $(this).val('');
                   });
                   container.append(new_field_group);
               }
           );
       });
   </script>
@endsection
@section('css')@endsection
@section('js')@endsection


