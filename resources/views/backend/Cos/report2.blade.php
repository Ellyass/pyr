@extends('backend.layout')
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
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
                <form action="{{route('cos.report.post')}}" method="POST">
                    @csrf
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" >
                        <select class="form-control" name="mounth">
                            <option value="">Seçiniz</option>
                            <option value="1">Ocak Ayı</option>
                            <option value="2">Şubat Ayı</option>
                            <option value="3">Mart Ayı</option>
                            <option value="4">Nisan Ayı</option>
                            <option value="5">Mayıs Ayı</option>
                            <option value="6">Haziran Ayı</option>
                            <option value="7">Temmuz Ayı</option>
                            <option value="8">Ağustos Ayı</option>
                            <option value="9">Eylül Ayı</option>
                            <option value="10">Ekim Ayı</option>
                            <option value="11">Kasım Ayı</option>
                            <option value="12">Aralık Ayı</option>
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

        <div id="chartdiv" style="margin-top: 25px;">


        </div>


<table class="table"  style="margin-top: 100px; margin-left: 00px;">
    <tbody>
        <thead>
        <tr>
        <th>Personel</th>

        <th>Toplam</th>
        </tr>
        </thead>
      <tbody>
      @foreach($costs as $cost)
            <tr>

                <td>{{$cost->user->name}}</td>
                <td>{{number_format($total->where('user_id',$cost->user_id)->sum('cost_total'),2,',','.')}}</td>
        </tr>
      @endforeach

    </tbody>

</table>
        <label for="" >Genel Toplamn </label>

        <input readonly type="text" value="{{number_format($total->sum('cost_total'),2,',','.')}}">

    </section>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/dataviz.js"></script>
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
                @foreach($costs as  $cost)
                {
                    country: "{{$cost->user->name}}",
                    litres: {{$cost->where('user_id',$cost->user_id)->sum('cost_total')}}

                },
                @endforeach

            ];

            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "litres";
            series.dataFields.category = "country";
            series.colors = new am4core.ColorSet();
            series.colors.list = [am4core.color("#126FC9"),am4core.color("#E74330"),am4core.color("#08cc1b"),am4core.color("#ffff09"),am4core.color("#ff7f00"),am4core.color("#8a2be2"),am4core.color("#ffcc99"),am4core.color("#8b7355"),am4core.color("#97ffff"),am4core.color("#434A52")];

        });
    </script>


@endsection
@section('css')@endsection
@section('js')@endsection
