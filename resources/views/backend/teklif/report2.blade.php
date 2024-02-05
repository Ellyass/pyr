@extends('backend.layout')
@section('content')
    <style>
        table, th, td ,tr  {
            border: 1px solid black;

        }
    </style>

    <style>
        #chartdiv {
            width: 750px;
            height: 600px;
            margin-left: -50px;
            margin-right: 50px;
            margin-top: 25px;

        }

    </style>
    <style>
        #chartdiv2 {
            width: 500px;
            height:500px;




        }

    </style>
    <style>
        #chartdiv3 {
            width: 500px;
            height:500px;




        }

    </style>
    <style>
        #jquery
        {
            z-index: 2;
        }
    </style>

    <section class="content-header">
        <div class="box box-danger">
            <div id="jquery" >
                <form action="{{route('report.post')}}" method="POST">
                    @csrf
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="mounth">
                            <option value="">Seçiniz</option>
                            <option value="1">Ocak </option>
                            <option value="2">Şubat </option>
                            <option value="3">Mart </option>
                            <option value="4">Nisan </option>
                            <option value="5">Mayıs </option>
                            <option value="6">Haziran </option>
                            <option value="7">Temmuz </option>
                            <option value="8">Ağustos </option>
                            <option value="9">Eylül </option>
                            <option value="10">Ekim </option>
                            <option value="11">Kasım </option>
                            <option value="12">Aralık </option>
                        </select>
                    </div>
                    <div class="form-group col-md-1 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="year">
                            <option value="">Seçiniz</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2022">2023</option>
                        </select>
                    </div>

                    <div class="form-group col-md-5 col-sm-3 col-xs-12 col" >
                        <button class="btn btn-success">Sorgula</button>
                    </div>
                </form>
            </div>




        </div>
        <div class="col-md-12 ">
            <div class="row">

                <div class="col-md-6">
                    <div style="margin: left;margin-left: 200px;margin-top: 80px;" >
                        <label  >Gönderilen Tüm Teklif Oranı(<?php echo $Offers->count() ?>)</label>
                    </div>
                    <div id="chartdiv2" style="margin-top: 100px; margin-left: 50px;">
                    </div>

                </div>

                <div class="col-md-6">
                    <div style="margin-left: 200px;margin-top: 80px;" >
                        <label  >Kabul Edilme Oranı</label>
                    </div>
                    <div id="chartdiv"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div style="margin-left: 550px;margin-top: 80px;" >
                        <label  >Kabul Edilen Teklif oranı(<?php echo $Offers->where('offer_status',2)->count(); ?>)</label>
                    </div>
                    <div id="chartdiv3" style="margin-top: 100px;margin-bottom: 100px; margin-left:400px;">

                    </div>
                </div>
            </div>






<div style="margin-top: 100px; margin-left: 200px;">
<table class="table"  style="margin-top: 100px; margin-left: 50px;width: 1400px; ">

    <tbody>

        <thead>
<tr>
    <th style="background-color: yellow;text-align: center; " colspan="6">Kabul Edilme Oranı</th>
</tr>
        <tr>

        <th>Ürün Adı</th>
        <th>Gönderilen Teklif  </th>
        <th>Kabul Edilen Teklif </th>
        <th>Gönderilen Toplam Tutar</th>
        <th>Kabul Edilen Toplam Tutar</th>
        <th>Yüzdelik Oranı</th>
        </tr>
        </thead>
      <tbody>
            <tr>

            <td>Teşvik</td>
                <td>{{$Offers->where('product',1)->count()}}</td>
                <td>{{$Offers->where('product',1)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',1)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',1)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>
                    @php

                        $tesviktoplam = $Offers->where('product',1)->count();

                            if( $tesviktoplam > 0){
                                    $tesvik = $Offers->where('product', 1)->where('offer_status', 2)->count();
                                   echo number_format($tesviksonuc = ($tesvik * 100)/$tesviktoplam,0,',','.') ;
                                   echo '%';
                                    }
                            else
                                {
                                    echo '%0';

                                }
                    @endphp

                </td>


        </tr>
            <tr>

                <td>KVKK</td>
                <td>{{$Offers->where('product',2)->count()}}</td>
                <td>{{$Offers->where('product',2)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',2)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  <?php

                    $kvkktoplam = $Offers->where('product',2)->count();

                    if ($kvkktoplam > 0) {
                        $kvkk = $Offers->where('product',2)->where('offer_status',2)->count();
                        echo number_format($kvkksonuc = ($kvkk * 100)/$kvkktoplam,0,',','.') ;
                        echo '%';
                    }
                    else
                    {
                        echo '%0';
                    }

                    ?></td>


            </tr>
            <tr>

                <td>BODROLAMA</td>
                <td>{{$Offers->where('product',4)->count()}}</td>
                <td>{{$Offers->where('product',4)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',4)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',4)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td> @php

                        $bodrolamatoplam = $Offers->where('product',4)->count();


                        if ($bodrolamatoplam > 0) {
                            $bodrolama = $Offers->where('product', 4)->where('offer_status', 2)->count();
                          echo number_format($bodrolamasonuc = (100 * $bodrolama) / $bodrolamatoplam,0,',','.') ;
                          echo '%';
                        }
                       else
                           {
                               echo '%0';
                           }

                    @endphp</td>

            </tr>
            <tr>

                <td>DANIŞMANLIK</td>
                <td>{{$Offers->where('product',5)->count()}}</td>
                <td>{{$Offers->where('product',5)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',5)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',5)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  @php
                        $danismanliktoplam = $Offers->where('product',5)->count();
                  if ($danismanliktoplam > 0) {
                           $danismanlik = $Offers->where('product', 5)->where('offer_status', 2)->count();
                            echo number_format($danismanliksonuc = (100 * $danismanlik)/$danismanliktoplam,0,',','.');
                            echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>EĞİTİM</td>
                <td>{{$Offers->where('product',3)->count()}}</td>
                <td>{{$Offers->where('product',3)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',3)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',3)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $egitimtoplam = $Offers->where('product',3)->count();
                  if ($egitimtoplam > 0) {
                $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$egitimtoplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>İYS DANIŞMANLIK</td>
                <td>{{$Offers->where('product',7)->count()}}</td>
                <td>{{$Offers->where('product',7)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',7)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',7)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $egitimtoplam = $Offers->where('product',7)->count();
                  if ($egitimtoplam > 0) {
                $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$egitimtoplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>

            <tr>

                <td>İKMETRİK</td>
                <td>{{$Offers->where('product',6)->count()}}</td>
                <td>{{$Offers->where('product',6)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',6)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',6)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $egitimtoplam = $Offers->where('product',7)->count();
                  if ($egitimtoplam > 0) {
                $egitim = $Offers->where('product', 6)->where('offer_status', 2)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$egitimtoplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>


      </tbody>
</table>
</div>
        <table class="table"  style="margin-top: 100px; margin-left: 250px; width: 1400px;">
            <tbody>
            <thead>
            <tr>
                <th style="background-color: yellow;text-align: center" colspan="6">Gönderilen Tüm Teklif  Oranı(<?php echo $Offers->count() ?>)</th>
            </tr>
            <tr>
                <th>Ürün Adı</th>
                <th>Gönderilen Teklif  </th>
                <th>Kabul Edilen Teklif </th>
                <th>Gönderilen Toplam Tutar</th>
                <th>Kabul Edilen Toplam Tutar</th>
                <th>Yüzdelik Oranı</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>Teşvik</td>
                <td>{{$Offers->where('product',1)->count()}}</td>
                <td>{{$Offers->where('product',1)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',1)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',1)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>
                    @php

                        $toplam = $Offers->count();

                            if( $toplam > 0){
                                    $tesvik = $Offers->where('product', 1)->count();
                                   echo number_format($tesviksonuc = ($tesvik * 100)/$toplam,0,',','.') ;
                                   echo '%';
                                    }
                            else
                                {
                                    echo '%0';

                                }
                    @endphp

                </td>


            </tr>
            <tr>

                <td>KVKK</td>
                <td>{{$Offers->where('product',2)->count()}}</td>
                <td>{{$Offers->where('product',2)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',2)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  <?php

                    $toplam = $Offers->count();

                    if ($toplam > 0) {
                        $kvkk = $Offers->where('product',2)->count();
                        echo number_format($kvkksonuc = ($kvkk * 100)/$toplam,0,',','.') ;
                        echo '%';
                    }
                    else
                    {
                        echo '%0';
                    }

                    ?></td>


            </tr>
            <tr>

                <td>BODROLAMA</td>
                <td>{{$Offers->where('product',4)->count()}}</td>
                <td>{{$Offers->where('product',4)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',4)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',4)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td> @php

                        $toplam = $Offers->count();


                        if ($toplam > 0) {
                            $bodrolama = $Offers->where('product', 4)->count();
                          echo number_format($bodrolamasonuc = (100 * $bodrolama) / $toplam,0,',','.') ;
                          echo '%';
                        }
                       else
                           {
                               echo '%0';
                           }

                    @endphp</td>

            </tr>
            <tr>

                <td>DANIŞMANLIK</td>
                <td>{{$Offers->where('product',5)->count()}}</td>
                <td>{{$Offers->where('product',5)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',5)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',5)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
                           $danismanlik = $Offers->where('product', 5)->count();
                            echo number_format($danismanliksonuc = (100 * $danismanlik)/$toplam,0,',','.');
                            echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>EĞİTİM</td>
                <td>{{$Offers->where('product',3)->count()}}</td>
                <td>{{$Offers->where('product',3)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',3)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',3)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
                $egitim = $Offers->where('product', 3)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>İYS DANIŞMANLIK</td>
                <td>{{$Offers->where('product',7)->count()}}</td>
                <td>{{$Offers->where('product',7)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',7)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',7)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
                $egitim = $Offers->where('product', 7)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>İKMETRİK</td>
                <td>{{$Offers->where('product',6)->count()}}</td>
                <td>{{$Offers->where('product',6)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',6)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',6)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
                $egitim = $Offers->where('product', 6)->count();
              echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
              echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>


            </tbody>
        </table>
        <table class="table"  style="margin-top: 100px; margin-left: 250px; width: 1400px;">
            <tbody>
            <thead>

            <tr>
                <th style="background-color: yellow;text-align: center" colspan="6">Kabul Edilen Teklif  Oranı(<?php echo $Offers->where('offer_status',2)->count(); ?>)</th>
            </tr>

            <tr>
                <th>Ürün Adı</th>
                <th>Gönderilen Teklif  </th>
                <th>Kabul Edilen Teklif </th>
                <th>Gönderilen Toplam Tutar</th>
                <th>Kabul Edilen Toplam Tutar</th>
                <th>Yüzdelik Oranı</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>Teşvik</td>
                <td>{{$Offers->where('product',1)->count()}}</td>
                <td>{{$Offers->where('product',1)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',1)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',1)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>
                    @php

                        $toplam = $Offers->where('offer_status',2)->count();

                            if( $toplam > 0){
                                    $tesvik = $Offers->where('product', 1)->where('offer_status', 2)->count();
                                   echo number_format($tesviksonuc = ($tesvik * 100)/$toplam,0,',','.') ;
                                   echo '%';
                                    }
                            else
                                {
                                    echo '%0';

                                }
                    @endphp

                </td>


            </tr>
            <tr>

                <td>KVKK</td>
                <td>{{$Offers->where('product',2)->count()}}</td>
                <td>{{$Offers->where('product',2)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',2)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  <?php

                    $toplam = $Offers->where('offer_status',2)->count();

                    if ($toplam > 0) {
                        $kvkk = $Offers->where('product',2)->where('offer_status',2)->count();
                        echo number_format($kvkksonuc = ($kvkk * 100)/$toplam,0,',','.') ;
                        echo '%';
                    }
                    else
                    {
                        echo '%0';
                    }

                    ?></td>


            </tr>
            <tr>

                <td>BODROLAMA</td>
                <td>{{$Offers->where('product',4)->count()}}</td>
                <td>{{$Offers->where('product',4)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',4)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',4)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td> @php

                        $toplam = $Offers->where('offer_status',2)->count();


                        if ($toplam > 0) {
                            $bodrolama = $Offers->where('product', 4)->where('offer_status', 2)->count();
                          echo number_format($bodrolamasonuc = (100 * $bodrolama) / $toplam,0,',','.') ;
                          echo '%';
                        }
                       else
                           {
                               echo '%0';
                           }

                    @endphp</td>

            </tr>
            <tr>

                <td>DANIŞMANLIK</td>
                <td>{{$Offers->where('product',5)->count()}}</td>
                <td>{{$Offers->where('product',5)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',5)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',5)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>  @php
                        $toplam = $Offers->where('offer_status',2)->count();
                  if ($toplam > 0) {
                           $danismanlik = $Offers->where('product', 5)->where('offer_status', 2)->count();
                            echo number_format($danismanliksonuc = (100 * $danismanlik)/$toplam,0,',','.');
                            echo '%';
            }
                  else
                      {
                          echo '%0';
                      }
                    @endphp</td>


            </tr>
            <tr>

                <td>EĞİTİM</td>
                <td>{{$Offers->where('product',3)->count()}}</td>
                <td>{{$Offers->where('product',3)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',3)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',3)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->where('offer_status',2)->count();
                   if ($toplam > 0) {
                 $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
               echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
               echo '%';
             }
                   else
                       {
                           echo '%0';
                       }
                    @endphp</td>


            </tr>
            <tr>

                <td>İYS DANIŞMANLIK</td>
                <td>{{$Offers->where('product',7)->count()}}</td>
                <td>{{$Offers->where('product',7)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',7)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',7)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->where('offer_status',2)->count();
                   if ($toplam > 0) {
                 $egitim = $Offers->where('product', 7)->where('offer_status', 2)->count();
               echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
               echo '%';
             }
                   else
                       {
                           echo '%0';
                       }
                    @endphp</td>


            </tr>
            <tr>

                <td>İKMETRİK</td>
                <td>{{$Offers->where('product',6)->count()}}</td>
                <td>{{$Offers->where('product',6)->where('offer_status',2)->count()}}</td>
                <td>{{number_format($Offers->where('product',6)->sum('offer_total'),0,',','.')}}₺</td>
                <td>{{number_format($Offers->where('product',6)->where('offer_status',2)->sum('offer_total'),0,',','.')}}₺</td>
                <td>   @php
                        $toplam = $Offers->where('offer_status',2)->count();
                   if ($toplam > 0) {
                 $egitim = $Offers->where('product', 6)->where('offer_status', 2)->count();
               echo  number_format($egitimsonuc = ($egitim * 100)/$toplam,0,',','.');
               echo '%';
             }
                   else
                       {
                           echo '%0';
                       }
                    @endphp</td>


            </tr>

            </tbody>
        </table>


    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- FusionCharts -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- jQuery-FusionCharts -->
    <script type="text/javascript" src="https://rawgit.com/fusioncharts/fusioncharts-jquery-plugin/develop/dist/fusioncharts.jqueryplugin.min.js"></script>
    <!-- Fusion Theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <!-- Chart code -->


    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>




    <script>
        am4core.ready(function() {

// Themes begin
            am4core.useTheme(am4themes_dataviz);
            am4core.useTheme(am4themes_animated);
// Themes end

            var chart = am4core.create("chartdiv", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart.legend = new am4charts.Legend();

            chart.data = [
                {
                    country: "Teşvik",
                    litres: @php

                        $tesviktoplam = $Offers->where('product',1)->count();

                            if( $tesviktoplam > 0){
                                echo    $tesvik = $Offers->where('product', 1)->where('offer_status', 2)->count();
                                  // echo $tesviksonuc = ($tesvik * 100)/$tesviktoplam;
                                    }
                            else
                                {
                                    echo '0';

                                }
                      @endphp
                },
                {
                    country: "Kvkk",
                    litres:
                       <?php

                       $kvkktoplam = $Offers->where('product',2)->count();

                       if ($kvkktoplam > 0) {
                      echo $kvkk = $Offers->where('product',2)->where('offer_status',2)->count();
                   $kvkksonuc = ($kvkk * 100)/$kvkktoplam;
              }
                  else
                      {
                          echo 0;
                      }

               ?>
                },
                {
                    country: "Bodrolama",
                    litres:
                    @php

                        $bodrolamatoplam = $Offers->where('product',4)->count();


                        if ($bodrolamatoplam > 0) {
                          echo  $bodrolama = $Offers->where('product', 4)->where('offer_status', 2)->count();
                         // echo  $bodrolamasonuc = (100 * $bodrolama) / $bodrolamatoplam;
                        }
                       else
                           {
                               echo 0;
                           }

                    @endphp
                },
                {
                    country: "Danışmanlık",
                    litres:
                    @php
                        $danismanliktoplam = $Offers->where('product',5)->where('offer_status',2)->count();
                  if ($danismanliktoplam > 0) {
                       echo    $danismanlik = $Offers->where('product', 5)->where('offer_status', 2)->count();
                        //    echo $danismanliksonuc = (100 * $danismanlik)/$danismanliktoplam;
            }
                  else
                      {
                          echo 0;
                      }
            @endphp

        },
                {
                    country: "Eğitim",
                    litres:
                    @php
                        $egitimtoplam = $Offers->where('product',3)->count();
                  if ($egitimtoplam > 0) {
              echo  $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
             // echo  $egitimsonuc = ($egitim * 100)/$egitimtoplam;
            }
                  else
                      {
                          echo 0;
                      }
            @endphp
                },

                {
                    country: "İYS",
                    litres: 50

                },


                {
                    country: "İKMETRİK",
                    litres:
                    @php
                        $egitimtoplam = $Offers->where('product',6)->count();
                  if ($egitimtoplam > 0) {
              echo  $egitim = $Offers->where('product', 6)->where('offer_status', 2)->count();
             // echo  $egitimsonuc = ($egitim * 100)/$egitimtoplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp
                }

            ];

            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            series.colors = new am4core.ColorSet();
            series.colors.list = [am4core.color("#126FC9"),am4core.color("#E74330"),am4core.color("#08cc1b"),am4core.color("#ffff09"),am4core.color("#ff7f00"),am4core.color("#8a2be2"),am4core.color("#ffcc99"),am4core.color("#8b7355"),am4core.color("#97ffff"),am4core.color("#434A52")];
        });
    </script>
    <script>
        am4core.ready(function() {

// Themes begin
            am4core.useTheme(am4themes_dataviz);
            am4core.useTheme(am4themes_animated);
// Themes end

            var chart = am4core.create("chartdiv2", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart.legend = new am4charts.Legend();

            chart.data = [
                {
                    country: "Teşvik",
                    litres: @php

                        $toplam = $Offers->count();

                            if( $toplam > 0){
                                   echo $tesvik = $Offers->where('product', 1)->count();
                                  // echo $tesviksonuc = ($tesvik * 100)/$toplam;
                                    }
                            else
                                {
                                    echo '0';

                                }
                    @endphp
                },
                {
                    country: "Kvkk",
                    litres:
                    <?php

                    $toplam = $Offers->count();

                    if ($toplam > 0) {
                    echo    $kvkk = $Offers->where('product',2)->count();
                       // echo $kvkksonuc = ($kvkk * 100)/$toplam;
                    }
                    else
                    {
                        echo 0;
                    }

                    ?>
                },
                {
                    country: "Bodrolama",
                    litres:
                    @php

                        $toplam = $Offers->count();
                        if ($toplam > 0) {
                         echo   $bodrolama = $Offers->where('product', 4)->count();
                         // echo  $bodrolamasonuc = (100 * $bodrolama)/$toplam;
                        }
                       else
                           {
                               echo 0;
                           }

                    @endphp
                },
                {
                    country: "Danışmanlık",
                    litres:
                    @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
                          echo $danismanlik = $Offers->where('product', 5)->count();
                           // echo $danismanliksonuc = (100 * $danismanlik)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp

                },
                {
                    country: "Eğitim",
                    litres:
                    @php
                        $toplam = $Offers->count();
                  if ($toplam > 0) {
               echo $egitim = $Offers->where('product', 3)->count();
              //echo  $egitimsonuc = ($egitim * 100)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp
                }

            ];

            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            series.colors = new am4core.ColorSet();
            series.colors.list = [am4core.color("#126FC9"),am4core.color("#E74330"),am4core.color("#08cc1b"),am4core.color("#ffff09"),am4core.color("#ff7f00"),am4core.color("#8a2be2"),am4core.color("#ffcc99"),am4core.color("#8b7355"),am4core.color("#97ffff"),am4core.color("#434A52")];
        });
    </script>
    <script>
        am4core.ready(function() {

// Themes begin
            am4core.useTheme(am4themes_dataviz);
            am4core.useTheme(am4themes_animated);
// Themes end

            var chart = am4core.create("chartdiv3", am4charts.PieChart3D);
            chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart.legend = new am4charts.Legend();

            chart.data = [
                {
                    country: "Teşvik",
                    litres: @php

                        $toplam = $Offers->where('offer_status',2)->count();

                            if( $toplam > 0){
                                 echo   $tesvik = $Offers->where('product', 1)->where('offer_status', 2)->count();
                                  // echo $tesviksonuc = ($tesvik * 100)/$toplam;
                                    }
                            else
                                {
                                    echo '0';

                                }
                    @endphp
                },
                {
                    country: "Kvkk",
                    litres:
                    <?php

                    $toplam = $Offers->where('offer_status',2)->count();

                    if ($toplam > 0) {
                      echo  $kvkk = $Offers->where('product',2)->where('offer_status',2)->count();
                       // echo $kvkksonuc = ($kvkk * 100)/$toplam;
                    }
                    else
                    {
                        echo 0;
                    }

                    ?>
                },
                {
                    country: "Bodrolama",
                    litres:
                    @php

                        $toplam = $Offers->where('offer_status',2)->count();
                        if ($toplam > 0) {
                           echo $bodrolama = $Offers->where('product', 4)->where('offer_status', 2)->count();
                          //echo  $bodrolamasonuc = (100 * $bodrolama)/$toplam;
                        }
                       else
                           {
                               echo 0;
                           }

                    @endphp
                },
                {
                    country: "Danışmanlık",
                    litres:
                    @php
                        $toplam = $Offers->where('offer_status',2)->count();
                  if ($toplam > 0) {
                         echo  $danismanlik = $Offers->where('product', 5)->where('offer_status', 2)->count();
                          //  echo $danismanliksonuc = (100 * $danismanlik)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp

                },
                {
                    country: "Eğitim",
                    litres:
                    @php
                        $toplam = $Offers->where('offer_status',2)->count();
                  if ($toplam > 0) {
              echo  $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
              //echo  $egitimsonuc = ($egitim * 100)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp
                }

            ];

            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            series.colors = new am4core.ColorSet();
            series.colors.list = [am4core.color("#126FC9"),am4core.color("#E74330"),am4core.color("#08cc1b"),am4core.color("#ffff09"),am4core.color("#ff7f00"),am4core.color("#8a2be2"),am4core.color("#ffcc99"),am4core.color("#8b7355"),am4core.color("#97ffff"),am4core.color("#434A52")];
        });
    </script>

    <script>
        am4core.ready(function() {

// Themes begin
            am4core.useTheme(am4themes_material);
            am4core.useTheme(am4themes_animated);
// Themes end



            var chart = am4core.create('chartdiv', am4charts.XYChart)
            chart.colors.step = 2;

            chart.legend = new am4charts.Legend()
            chart.legend.position = 'top'
            chart.legend.paddingBottom = 20
            chart.legend.labels.template.maxWidth = 95

            var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
            xAxis.dataFields.category = 'category'
            xAxis.renderer.cellStartLocation = 0.1
            xAxis.renderer.cellEndLocation = 0.9
            xAxis.renderer.grid.template.location = 0;

            var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
            yAxis.min = 0;

            function createSeries(value, name) {
                var series = chart.series.push(new am4charts.ColumnSeries())
                series.dataFields.valueY = value
                series.dataFields.categoryX = 'category'
                series.name = name

                series.events.on("hidden", arrangeColumns);
                series.events.on("shown", arrangeColumns);

                var bullet = series.bullets.push(new am4charts.LabelBullet())
                bullet.interactionsEnabled = false
                bullet.dy = 30;
                bullet.label.text = '{valueY}'
                bullet.label.fill = am4core.color('#ffffff')

                return series;
            }


            chart.data = [
                {
                    category: 'Teşvik',
                    first: "{{number_format($Offers->where('product',1)->count(),0,',','.')}}₺",
                    second: "{{number_format($Offers->where('product',1)->where('offer_status',2)->count(),0,',','.')}}",
                    third: <?php  $tesviktoplam = $Offers->where('product',1)->count();

            if( $tesviktoplam > 0){
                   $tesvik = $Offers->where('product', 1)->where('offer_status', 2)->count();
                echo $tesviksonuc = ($tesvik * 100)/$tesviktoplam;
            }
            else
            {
                echo '0';

            }
            ?>
                },
                {
                    category: 'Kvkk',
                    first: "{{number_format($Offers->where('product',2)->count(),0,',','.')}}",
                    second: "{{number_format($Offers->where('product',2)->where('offer_status',2)->count(),0,',','.')}}",
                    third:   <?php

                    $toplam = $Offers->where('product',2)->count();

                    if ($toplam > 0) {
                          $kvkk = $Offers->where('product',2)->where('offer_status',2)->count();
                       echo $kvkksonuc = ($kvkk * 100)/$toplam;
                    }
                    else
                    {
                        echo 0;
                    }

                    ?>
                },
                {
                    category: 'Bodrolama',
                    first: "{{number_format($Offers->where('product',4)->count(),0,',','.')}}",
                    second: "{{number_format($Offers->where('product',4)->where('offer_status',2)->count(),0,',','.')}}",
                    third:  @php

                        $toplam = $Offers->where('product',4)->count();
                        if ($toplam > 0) {
                           $bodrolama = $Offers->where('product', 4)->where('offer_status', 2)->count();
                          echo  $bodrolamasonuc = (100 * $bodrolama)/$toplam;
                        }
                       else
                           {
                               echo 0;
                           }

                    @endphp
                },
                {
                    category: 'Danışmanlık',
                    first: "{{number_format($Offers->where('product',5)->count(),0,',','.')}}",
                    second: "{{number_format($Offers->where('product',5)->where('offer_status',2)->count(),0,',','.')}}",
                    third: @php
                        $toplam = $Offers->where('product',5)->count();
                  if ($toplam > 0) {
                         $danismanlik = $Offers->where('product', 5)->where('offer_status', 2)->count();
                            echo $danismanliksonuc = (100 * $danismanlik)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp
                },
                {
                    category: 'Eğitim',
                    first: "{{number_format($Offers->where('product',3)->count(),0,',','.')}}",
                    second: "{{number_format($Offers->where('product',3)->where('offer_status',2)->count(),0,',','.')}}",
                    third:  @php
                        $toplam = $Offers->where('product',3)->count();
                  if ($toplam > 0) {
                $egitim = $Offers->where('product', 3)->where('offer_status', 2)->count();
              echo  $egitimsonuc = ($egitim * 100)/$toplam;
            }
                  else
                      {
                          echo 0;
                      }
                    @endphp
                }
            ]


            createSeries('first', 'Gönderilen');
            createSeries('second', 'Kabul Edilen');
            createSeries('third', 'Oran');

            function arrangeColumns() {

                var series = chart.series.getIndex(0);

                var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
                if (series.dataItems.length > 1) {
                    var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
                    var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
                    var delta = ((x1 - x0) / chart.series.length) * w;
                    if (am4core.isNumber(delta)) {
                        var middle = chart.series.length / 2;

                        var newIndex = 0;
                        chart.series.each(function(series) {
                            if (!series.isHidden && !series.isHiding) {
                                series.dummyData = newIndex;
                                newIndex++;
                            }
                            else {
                                series.dummyData = chart.series.indexOf(series);
                            }
                        })
                        var visibleCount = newIndex;
                        var newMiddle = visibleCount / 2;

                        chart.series.each(function(series) {
                            var trueIndex = chart.series.indexOf(series);
                            var newIndex = series.dummyData;

                            var dx = (newIndex - trueIndex + middle - newMiddle) * delta

                            series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                            series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                        })
                    }
                }
            }

        }); //  am4core.ready()
    </script>

@endsection
@section('css')@endsection
@section('js')@endsection
