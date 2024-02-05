
@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Gelir Gider</h4>
            </div>
            <form action="{{route('form.create.post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>

                                    <tr >
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th class="text-center">
                                            Tarih
                                        </th>
                                        <th class="text-center">
                                            Gelir Kalemi Giriniz
                                        </th>
                                        <th class="text-center">
                                            Tutar
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id='addr0'>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="date" name='form_date[]'  placeholder='Tarih' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text" name='form_type[]' placeholder='Masraf Türü' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text"  value=0 name='form_money[]' placeholder='Tutar(küsüratları nokta ile yazın)' class="form-control ekle">
                                        </td>
                                    </tr>
                                    <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a id="add_row" class="btn btn-default pull-left ">Ekle</a><a id='delete_row' class="pull-right btn btn-default">SİL</a>
                    </div>
                    <br>
                    <br>
                    <div class="form-group" align="left" >
                        <input  type="number" readonly value=0 name="gelir_cost_total" id="gelir_form_total" placeholder="Toplam Gelir Tutar">
                    </div>
                    <br>
                    <br>
                    <br>

                    <br>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover" id="tab_logic2">
                                    <thead>

                                    <tr >
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th class="text-center">
                                            Tarih
                                        </th>
                                        <th class="text-center">
                                            Gider Kalemi Giriniz
                                        </th>
                                        <th class="text-center">
                                            Tutar
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id='addr0'>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <input type="date" name='gider_form_date[]'  placeholder='Tarih' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text" name='gider_form_type[]' placeholder='Masraf Türü' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text"  value=0 name='gider_form_money[]' placeholder='Tutar(küsüratları nokta ile yazın)' class="form-control ekle">
                                        </td>
                                    </tr>
                                    <tr id='addr'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a id="add_row2" class="btn btn-default pull-left ">Ekle</a><a id='delete_row' class="pull-right btn btn-default">SİL</a>
                    </div>
                    <br>
                    <br>
                    <div class="form-group" align="left" >
                        <input  type="number" readonly value=0 name="gider_cost_total" id="gider_form_total" placeholder="Toplam Gider Tutar">
                    </div>
                </div>
            </form>
        </div>

    </section>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>
        $(document).ready(function(){
            var i=1;
            $("#add_row2").click(function(){

                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='gider_form_date[]"+i+"' type='date' placeholder='Tarih' class='form-control input-md'  /> </td><td><input  name='gider_form_type[]"+i+"' type='text' placeholder='Masraf Türü'  class='form-control input-md'></td><td><input  name='gider_form_money[]"+i+"' type='text' value=0 placeholder='Tutar'  class='form-control input-md ekle'></td>");

                $('#tab_logic2').append('<tr id="addr2'+(i+1)+'"></tr>');
                i++;
            });

            $("#delete_row").click(function(){
                if(i>1){
                    $("#addr2"+(i-1)).html('');
                    i--;
                }
            });

        });
    </script>


    <script>
        $(document).ready(function(){
            var i=1;
            $("#add_row").click(function(){
                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='form_date[]"+i+"' type='date' placeholder='Tarih' class='form-control input-md'  /> </td><td><input  name='form_type[]"+i+"' type='text' placeholder='Masraf Türü'  class='form-control input-md'></td><td><input  name='form_money[]"+i+"' type='text' value=0 placeholder='Tutar'  class='form-control input-md ekle'></td>");

                $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                i++;
            });

            $("#delete_row").click(function(){
                if(i>1){
                    $("#addr"+(i-1)).html('');
                    i--;
                }
            });

        });
    </script>




    <script>


        $('body').on('change', '.ekle', function() {
            var toplam =0;
            $("#form_total").val(0);
            $('.ekle').each(function(i, obj) {
                console.log(parseFloat($(this).val()))
                toplam = parseFloat($("#form_total").val()) + parseFloat($(this).val());
                $("#form_total").val(toplam);
            });


        });







    </script>


    <script>


        $('body').on('change', '.ekle', function() {
            var toplam =0;
            $("#gider_form_total").val(0);
            $('.ekle2').each(function(i, obj) {
                console.log(parseFloat($(this).val()))
                toplam = parseFloat($("#gider_form_total").val()) + parseFloat($(this).val());
                $("#gider_form_total").val(toplam);
            });


        });







    </script>


@endsection
@section('css')@endsection
@section('js')@endsection



