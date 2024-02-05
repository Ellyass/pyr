@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">

                <form action="{{route('target_create')}}" method="POST">
                    @csrf
                    <div class="form-group col-md-5">
                        <label for="">Satıcıyı Belirtiniz</label>
                        <select name="seller"  class="form-control">
                            @foreach($sellers as $seller)
                                <option value="{{$seller->id}}">{{$seller->seller_name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group col-md-5">
                        <label for="">Başlangıç Tarihi</label>
                        <input class="form-control" type="date" name="date">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Hedef Süresini Seçiniz</label>
                        <select name="target_date"  class="form-control">
                            <?php $ay = 1; ?>
                            @for($a=1;$a<=12;$a++)
                                <option value="<?php echo $ay ?>"><?php echo $ay.' ' ?>AY</option>
                                <?php $ay++;?>
                                @endfor
                        </select>
                    </div>

                        <div class="form-group col-md-5">
                            <label for="">Hedef Tutarı</label>
                            <input class="form-control" type="text" name="target_money">
                        </div>


                        <div class="col-lg-10 " align="center">
                            <button class="btn btn-success">Kayıt Oluştur</button>
                        </div>

                </form>
            </div>

        </div>
        <div>
            <table id="example" class="display" style="width:100%">
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
                                echo '%';
                            echo number_format(($sorgu*100)/$hedef,2,',','.');

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

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js">


    </section>

@endsection
@section('css')@endsection
@section('js')@endsection
