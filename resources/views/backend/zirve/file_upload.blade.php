@extends('backend.layout')
@section('content')

<section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <button class="btn btn-primary" id="excel2">Excel Yükle</button>
                <button id="excell" class="btn btn-success">Excell İndir</button>
                <br>
                <br>
                <div class="form-group col-md-5 " id="dowloand" style="margin-left: 450px;" align="right">
                    <form action="{{route('excel.export')}}" method="POST">
                        @csrf
                        <select class="form-control" name="year" id="">
                            <option  value="2020">2020</option>
                            <option  value="2019">2019</option>
                        </select>
                        <br>
                        <button class="btn btn-success">excell indir</button>
                    </form>
                </div>
                <div id="excel">

                <form action="{{route('file.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-8" style="margin-left: 20%">

                        <div class="form-group col-md-5 col-xs-12">
                            <label for="">Hangi Ayın Verilerini Kaydedicez</label>
                            <input class="form-control" type="date" name="period_date" >
                        </div>

                        <div class="form-group col-md-10">
                            <label for="">Gelir Tablonuzu Yükleyiniz</label>
                            <input class="form-control" type="file" name="income_file">
                        </div>

                        <div class=" form-group col-md-10">
                            <label for="">Gider Tablonuzu Yükleyiniz</label>
                            <input class="form-control" type="file" name="expense_file">
                        </div>

                        <div class="form-group col-md-10" align="center">
                            <button class="btn btn-success">Yükleyiniz</button>
                        </div>
                    </div>

                </form>


                </div>
            </div>


        </div>

    </section>
    <style>
        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 0;
        }

    </style>
    <style>
        #table
        {
            overflow: auto;
        }
    </style>
    <style>
        #chart-container {
            width: 1200px;
            height: 600px;
            margin:0 auto ;
            font-weight: bold;
        }
    </style>
    <style>
        #chart-container2 {

            font-weight: bold;
            margin: 150px;
            margin-left: 250px;

        }
    </style>


    <!-- Resources -->
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

    <!-- Chart code -->
    <script>
        $("#excel").hide();
        $("#excel2").click(function(){

            $("#excel").toggle(1000);
        });
    </script>
    <script>
        $("#dowloand").hide();
        $("#excell").click(function(){

            $("#dowloand").toggle(1000);
        });
    </script>
    <script type="text/javascript">
        FusionCharts.ready(function(){
            var chartObj = new FusionCharts({
                type: 'mscombi3d',
                renderAt: 'chart-container2',
                width: '1200',
                height: '500',
                dataFormat: 'json',
                formatnumberscale: "2",
                dataSource: {
                    "chart": {
                        "caption": "2020 Kar Oranı",
                        "subCaption": "Sales analysis of last year",
                        "xAxisname": "Ay",
                        "yAxisName": "TL",
                        "numberPrefix": "₺",
                        "divlineColor": "#999999",
                        "divLineIsDashed": "2",
                        "divLineDashLen": "2",
                        "divLineGapLen": "2",
                        "toolTipColor": "#ffffff",
                        "toolTipBorderThickness": "4",
                        "toolTipBgColor": "#000000",
                        "toolTipBgAlpha": "80",
                        "toolTipBorderRadius": "4",
                        "toolTipPadding": "5",
                        "theme": "fusion",
                        'paletteColors':'FF5904,0372AB,FF0000'
                    },
                    "categories": [{
                        "category": [{
                            "label": "Ocak"
                        },
                            {
                                "label": "Şubat"
                            },
                            {
                                "label": "Mart"
                            },
                            {
                                "label": "Nisan"
                            },
                            {
                                "label": "Mayıs"
                            },
                            {
                                "label": "Haziran"
                            },
                            {
                                "label": "Temmuz"
                            },
                            {
                                "label": "Ağustos"
                            },
                            {
                                "label": "Eylül"
                            },
                            {
                                "label": "Ekim"
                            },
                            {
                                "label": "Kasım"
                            },
                            {
                                "label": "Aralık"
                            }
                        ]
                    }],
                    "dataset": [{
                        "seriesName": "Kar",
                        "showValues": "4",
                        "data": [{
                            "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',1)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',1)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',1)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',1)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                        },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',2)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',2)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',2)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',2)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',3)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',3)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',4)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',4)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',4)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',4)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',5)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',5)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',5)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',5)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',6)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',6)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',6)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',7)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',7)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',7)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',7)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',8)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',8)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',8)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',8)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',9)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',9)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',9)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',9)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',10)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',10)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',10)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',10)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',11)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',11)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',11)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',11)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo$gelir - $gider;
                                    ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',12)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',12)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',12)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',12)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            }
                        ]
                    },
                        {
                            "seriesName": "Beklenen Kar",
                            "renderAs": "line",
                            "data": [{
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',1)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',1)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',1)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',1)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',2)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',2)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',2)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',2)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',3)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',3)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',4)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',4)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',4)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',4)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',5)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',5)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',5)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',5)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',6)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',6)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',6)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',6)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',7)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',7)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',7)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',7)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',8)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',8)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',8)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',8)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',9)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',9)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',9)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',9)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',10)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',10)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',10)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',10)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',11)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',11)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',11)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',11)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',12)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',12)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',12)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',12)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                }
                            ]
                        },

                    ]
                }
            });
            chartObj.render();
        });
    </script>
    <script>
        $("#chart-container").insertFusionCharts({
            type: "mscolumn3d",
            width: "100%",
            height: "100%",
            dataFormat: "json",
            dataSource: {
                chart: {
                    caption: "MorePayroll 2020 Gelir Gider Tablosu",
                    subcaption: "2020",
                    xaxisname: "Yıl",
                    yaxisname: "Tutarlar",
                    formatnumberscale: "2",
                    paletteColors:'FF5904,F7292C,FF0000',
                    plottooltext:
                        "<b>$dataValue</b> apps were available on <b>$seriesName</b> in $label",
                    theme: "fusion"
                },
                categories: [
                    {
                        category: [
                            {
                                label: "Ocak"
                            },
                            {
                                label: "Şubat"
                            },
                            {
                                label: "Mart"
                            },
                            {
                                label: "Nisan"
                            },
                            {
                                label: "Mayıs"
                            },
                            {
                                label: "Haziran"
                            },
                            {
                                label: "Temmuz"
                            },
                            {
                                label: "Ağustos"
                            },
                            {
                                label: "Eylül"
                            },
                            {
                                label: "Ekim"
                            },
                            {
                                label: "Kasım"
                            },
                            {
                                label: "Aralık"
                            }
                        ]
                    }
                ],
                dataset: [
                    {
                        seriesname: "Gelir Verileri",
                        data: [
                            {
                                value:  <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',1)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',1)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',2)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',2)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',3)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',3)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',4)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',4)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',5)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',5)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php

                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',6)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',7)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',7)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',8)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',8)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',9)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',9)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',10)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',10)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',11)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',11)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',12)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',12)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            }
                        ]
                    },
                    {
                        seriesname: "Gider Verileri",
                        data: [
                            {
                                value: <?php

                                $total = $data->where('type',0)->whereMonth('period_date',1)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',1)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php

                                $total = $data->where('type',0)->whereMonth('period_date',2)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',2)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value:  <?php
                                $total = $data->where('type',0)->whereMonth('period_date',3)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',3)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',4)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',4)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',5)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',5)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',6)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',7)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',7)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',8)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',8)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value:  <?php
                                $total = $data->where('type',0)->whereMonth('period_date',9)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',9)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',10)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',10)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',11)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',11)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',12)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',12)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            }
                        ]
                    },

                ]
            }
        });
    </script>


@endsection
@section('css')@endsection
@section('js')@endsection

