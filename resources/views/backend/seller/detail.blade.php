@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <form action="{{route('personel_detail')}}" method="POST">
                    @csrf
                    <div class="form-group col-md-2">
                        <select class="form-control" name="month" id="">
                            <option value="">Seçiniz</option>
                            <option value="1">Ocak</option>
                            <option value="2">Şubat</option>
                            <option value="3">Mart</option>
                            <option value="4">Nisan</option>
                            <option value="5">Mayıs</option>
                            <option value="6">Haziran</option>
                            <option value="7">Temmuz</option>
                            <option value="8">Ağustos</option>
                            <option value="9">Eylül</option>
                            <option value="10">Ekim</option>
                            <option value="11">Kasım</option>
                            <option value="12">Aralık</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="year" id="">
                            <option value="">Seçiniz</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div >
                        <button class="btn btn-primary">Sorgula</button>
                    </div>
                </form>
                <div class="col-md-11 col-lg-12">  <button id="button" class="btn btn-success">Hedeflerimi Göster</button></div>
                    <div id="offer_tablo" style="margin-top: 100px;">
                        <table class="table" id="example">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Firma</th>
                                <th scope="col">Teklif Tarihi</th>
                                <th scope="col">Teklif Toplamı</th>
                                <th scope="col">Teklif Türü</th>
                                <th scope="col">Teklif Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $say=1; @endphp
                            @foreach($jquerys as $jquery)
                                <tr>
                                    <th scope="row">@php echo $say++ @endphp</th>
                                    <td>{{$jquery->customer->name}}</td>
                                    <td>{{$jquery->offer_date->format('d.m.Y')}}</td>

                                    @if($jquery->product==1)
                                        <td>%{{$jquery->offer_money}}</td>
                                    @else
                                        <td>{{number_format($jquery->offer_money,0,',','.').' '}}TL</td>
                                    @endif

                                    @if($jquery->product==1)
                                        <td>Teşvik</td>
                                    @elseif($jquery->product==2)
                                        <td>Kvkk</td>
                                    @elseif($jquery->product==3)
                                        <td>Eğitim</td>
                                    @elseif($jquery->product==4)
                                        <td>Bodrolama</td>
                                    @elseif($jquery->product==5)
                                        <td>Danışmanlık</td>
                                    @endif

                                    <td>@if($jquery->offer_status==1)
                                            <button class="btn btn-warning btn-xs">Bekleniyor</button>

                                        @elseif($jquery->offer_status==2)
                                           <button class="btn btn-success btn-xs">Kabul Edildi</button>

                                        @elseif($jquery->offer_status==0)
                                            <button class="btn btn-danger btn-xs">Reddedildi</button>
                                        @endif

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                <div id="target_tablo" style="margin-top: 100px;">
                    <table id="example2" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Başlangıç Tarihi</th>
                            <th>Bitiş Tarihi</th>
                            <th>Hedef</th>
                            <th>Gönderilen Teklif Tutarı</th>
                            <th>Kabul Edilen Teklif Tutarı</th>
                            <th>Şuanki Durum</th>
                            <th>Oranı</th>
                            <th>Sonuç</th>
                            <th>Detay</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($targets as $target)
                            <tr>
                                <td>{{$target->target_seller->seller_name}}</td>
                                <td>{{$target->date->format('d.m.Y')}}</td>
                                <td>{{$target->target_date}}</td>
                                <td>{{number_format($target->target_money,2,',','.')}}</td>
                                <td><?php  $id = $target->offer->target_seller_id;
                                    $data = $target->date->format('Y-m-d');
                                    $target_date = $target->target_date;
                                    $sorgu =  $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->sum('offer_total');
                                    echo number_format($sorgu,2,',','.');
                                    ?></td>
                                <td>
                                    <?php

                                    $data = $target->date;
                                    $target_date = $target->target_date;
                                    $sorgu =  $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->where('offer_status',2)->sum('offer_total');
                                    echo number_format($sorgu,2,',','.');
                                    ?>
                                </td>
                                <td><?php

                                    $data = $target->date;
                                    $target_date = $target->target_date;
                                    $sorgu =  $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->where('offer_status',2)->sum('offer_total');
                                    echo number_format($sorgu,2,',','.');
                                    ?>
                                </td>
                                <td>
                                    <?php

                                    $data = $target->date;
                                    $target_date = $target->target_date;
                                    $sorgu =  $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->where('offer_status',2)->sum('offer_total');
                                    $hedef = $target->target_money;
                                    if ($sorgu>0){
                                        echo ($sorgu*100)/$hedef;
                                    }
                                    else
                                    {
                                        echo '%0';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php if ($sorgu<$target->target_money) {?>

                                    <img src="https://img.icons8.com/color/28/000000/cancel-2--v1.png"/>
                                    <?php    }

                                    else
                                    {?>
                                    <img src="https://img.icons8.com/fluent/28/000000/checkmark.png"/>
                                    <?php   }
                                    ?>
                                </td>
                                <td><div id="mesaj">
                                        <p>
                                            <a class="aciklama" href="#" data-title="<?php echo 'Kabul Edilen  Teklif'; echo ' '.'='.' '. $accept = $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->where('offer_status',2)->count(); echo ' '.' '.' '.' ';
                                            echo 'Gönderilen Teklif'.' '.'='.' '; echo $deccept = $offer->where('target_seller_id',$id)->whereBetween('offer_date',[$data,$target_date])->count();
                                            ?>"><button class="btn btn-warning ">Detay</button></a>
                                        </p>
                                        <p>

                                        </p>
                                    </div></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </div>


        </div>

    </section>
    <style>
        .aciklama
        {
            position: relative;
            display: inline-block;
        }
        .aciklama::after
        {
            content: attr(data-title);
            position: unset;
            padding: 15px;
            background: #eee;
            color: #333;
            opacity: 0;
            word-wrap: break-word;
            height: auto;

            -moz-box-shadow: 0 0 4px #222;
            -webkit-box-shadow: 0 0 4px #222;
            box-shadow: 0 0 4px #222;
            pointer-events: none;
        }
        .aciklama:hover::after
        {
            opacity: 1;
            -webkit-transition: opacity 0.3s;
            -moz-transition: opacity 0.3s;
            transition: opacity 0.3s;
            pointer-events: auto;
        }
        #mesaj
        {
            font-family: Calibri, Arial, sans-serif;
            font-size: 20px;
            width: 500px;
        }
        #mesaj a
        {
            text-decoration: none;
            color: #000;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        } );
    </script>
    <script>
        $("#target_tablo").hide();
        $("#button").click(function(){

            $("#target_tablo").toggle();
            $("#offer_tablo").toggle();

        });
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js">
@endsection
@section('css')@endsection
@section('js')@endsection
