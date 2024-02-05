@extends('backend.layout')
@section('content')

    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <div id="chart-container"></div>
                <br>
                <br>
                <div id="chart-container2">FusionCharts XT will load here!</div>
            </div>
            <br>
            <br>
            <div>
                <style> .table, th, td,th {
                        border: 1px solid black;
                    }</style>

                <table class="table" border="2" style="border: #0a0a0a">
                    <thead>
                    <tr>
                        <th scope="col">Ay</th>
                        <th scope="col">Gelir</th>
                        <th scope="col">Gider</th>
                        <th scope="col">Kar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Ocak</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Şubat</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Mart</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Nisan</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Mayıs</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Haziran</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Temmuz</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Ağustos</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Eylül</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Ekim</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Kasım</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>
                    <tr>
                        <th>Aralık</th>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');
                            $kdv = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($hizmet + $kdv,2,',','.');
                            ?></td>
                        <td><?php

                            $total = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                            echo number_format($total+$kdv,2,',','.');
                            ?></td>
                        <td><?php
                            $hizmet = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    number_format($gelir - $gider,2,',','.');
                            ?></td>
                    </tr>

                    </tbody>
                </table>
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
    <script type="text/javascript">
        FusionCharts.ready(function(){

            var chartObj = new FusionCharts({
                type: 'mscombi3d',
                renderAt: 'chart-container2',
                width: '1200',
                height: '500',
                paletteColors :"FF0000,0372AB",
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
                        'paletteColors':'ffff09,E74330',

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
                             $hizmet = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');
                            $kdv1 = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            $gelir =  $hizmet + $kdv1;
                            $total = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                            $kdv2 = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                            $gider = $total + $kdv2;
                            echo    $gelir - $gider;
                            ?>
                        },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $sonuc = $gelir - $gider;

                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo     $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo$gelir - $gider;
                                ?>
                            },
                            {
                                "value": <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
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
                                $hizmet = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');
                                $kdv1 = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                                $gelir =  $hizmet + $kdv1;
                                $total = $data->where('type',0)->whereMonth('period_date',1)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv2 = $data->where('type',0)->whereMonth('period_date',1)->sum('kdv_money');
                                $gider = $total + $kdv2;
                                echo    $gelir - $gider;
                                ?>
                            },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo     $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gider = $total + $kdv2;
                                    echo    $gelir - $gider;
                                    ?>
                                },
                                {
                                    "value": <?php
                                    $hizmet = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');
                                    $kdv1 = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
                                    $gelir =  $hizmet + $kdv1;
                                    $total = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                    $kdv2 = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
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
                    paletteColors:'E74330,434A52,FF0000',
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
                                $hizmet = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php

                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $hizmet + $kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $hizmet = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');
                                $kdv = $data->where('type',1)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
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

                                $total = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php

                                $total = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value:  <?php
                                $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value:  <?php
                                $total = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');
                                echo $total+$kdv;
                                ?>
                            },
                            {
                                value: <?php
                                $total = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                                $kdv = $data->where('type',0)->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');
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

