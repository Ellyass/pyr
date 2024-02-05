
@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Masraf Formu</h4>

                <h7>Alınan Tutar {{$cost->cost_money}}</h7>
            </div>
            <form action="{{route('form.update',['id'=>$cost->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <img width="400px;" src="/images/{{$cost->form_file}}" alt="">
                        <input type="hidden" name="cost_id" value="{{$cost->id}}">
                    </div>



                    <div class="col-md-8" style="margin-left: 180px;"  >
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
                                    Masraf Türü
                                </th>
                                <th class="text-center">
                                    Tutar
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($forms as $form)
                                <tr id='addr0'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="date" value="{{$form->form_date}}"  name="form_date[]"   placeholder='Tarih' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" value="{{$form->form_type}}"  name="form_type[]"   placeholder='Masraf Türü' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" value="{{$form->form_money}}"  name="form_money[]"   placeholder='Tutar' class="form-control ekle"/>
                                    </td>
                                </tr>
                            @endforeach
                            <tr id='addr1'></tr>
                            </tbody>
                        </table>
                        <a id="add_row" class="btn btn-default pull-left ">Ekle</a><a id='delete_row' class="pull-right btn btn-default">SİL</a>
                        <div>
                            <input class="form-control" type="file" name="form_file" value="{{$cost->form_file}}" >
                        </div>
                    </div>
                </div>

            </div>


                <div class="col-md-5  form-group" style="margin-left: 550px;"  >
                    <input type="text" readonly name="cost_explanation" class="form-control " value="{{$cost->cost_end_explanation}}" placeholder="Açıklama Yapınız" >
                </div>
                <div class="col-md-4">
                    <label for="">Toplam Tutar</label>
                    <input  type="number" readonly  name="cost_total" id="form_total" placeholder="Toplam Tutar">

                </div>


                <div class="form-group col-md-3 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Muhasebe'nin Alıcak Tutarı</label>
                    <input type="text" readonly value="@if($sonuc = $cost->cost_money-$cost->cost_total>0)

                    {{$sonuc = $cost->cost_money-$cost->cost_total}}
                    @else
                        0
                        @endif


                        " name="" class="form-control">
                </div>
                <div class="form-group col-md-3 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Muhasebe'nin Vericek Tutarı</label>
                    <input type="text" readonly value="@if($sonuc = $cost->cost_money-$cost->cost_total<0)

                    {{ $sonuc = $cost->cost_total-$cost->cost_money}}
                    @else
                        0
                        @endif
                        " name="offer_explanation" class="form-control">
                </div>

                <br>
                <br>
                <br>
                <div class="form-group col-md-6" align="right">
                    <button class="btn btn-primary">Güncelle</button>
                </div>
                <br>
                <br>
                <br>
                <br>


            </form>
            <br>
        </div>

    </section>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
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
        $(document).ready(function() {

            $('body').on('change','input', '.ekle', function() {
                var toplam =0;
                $("#form_total").val(0);

                $('.ekle').each(function(i, obj) {
                    console.log(parseFloat($(this).val()))
                    toplam = parseFloat($("#form_total").val()) + parseFloat($(this).val());
                    $("#form_total").val(toplam);
                });



                });
        });

    </script>

@endsection
@section('css')@endsection
@section('js')@endsection




