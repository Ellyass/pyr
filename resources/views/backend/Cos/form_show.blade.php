@extends('backend.layout')
@section('content')
    <style>
        .resim-zoom{ position: relative;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -moz-transform: scale(1);
            transition: all .6s ease-in;
            -moz-transition: all .6s ease-in;
            -webkit-transition: all .6s ease-in;
            -ms-transition: all .6s ease-in;

        }
        .resim-zoom:hover{ z-index:2;
            -webkit-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -moz-transform: scale(1.5);
            transform: scale(1.5);
        }





    </style>
    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Masraf Formu</h4>

                <h7>Alınan Tutar {{$cost->cost_money}}</h7>
                <p>Toplam Harcama : {{$cost->cost_total}}</p>
            </div>

                @csrf
                <div class="box-body">
                    <input type="button" class="btn btn-primary" value="360"  onClick="rotateImage(this.value);" />
                    <input type="button" class="btn btn-primary" value="90" onClick="rotateImage(this.value);" />
                    <input type="button" class="btn btn-primary" value="-90" onClick="rotateImage(this.value);" />
                    <input type="button" class="btn btn-primary" value="180" onClick="rotateImage(this.value);" />
                    <div class="row">
                        <div class="col-md-2 resim-zoom" style="margin-left: 100px; margin-top: 25px;">

                        <img  id="resim-zoom" class="resim-zoom" width="450px;" height="550px;" style="transform: rotate(90deg);"  src="/images/{{$cost->form_file}}" alt="">
                        <input type="hidden" name="cost_id" value="{{$cost->id}}">
                        </div>


                            <div class="col-md-6" style="margin-left: 290px;"  >
                                <table class="table table-bordered table-hover" id="tab_logic" style="width: 800px;">
                                    <thead>

                                    <tr >

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
                                            <input type="date" value="{{$form->form_date}}" disabled   placeholder='Tarih' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text" value="{{$form->form_type}}" disabled  placeholder='Masraf Türü' class="form-control"/>
                                        </td>
                                        <td>
                                            <input type="text" value="{{$form->form_money}}" disabled  placeholder='Tutar' class="form-control"/>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                </div>
                    <form action="{{route('cost.controll',['id'=>$cost->id])}}" method="POST">
                        @csrf
                    <div class="col-md-6  form-group" style="margin-left: 550px;"  >
                        <input type="text" name="cost_explanation" class="form-control " placeholder="Açıklama Yapınız" >

                    </div>


                <div class="form-group col-md-3 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Muhasebe'nin Alıcak Tutarı</label>
                    <input type="text" readonly value="@if($sonuc = $cost->cost_money-$cost->cost_total>0)

                        {{$sonuc = $cost->cost_money-$cost->cost_total}}
                    @else
                        0
                        @endif


                        " name="offer_explanation" class="form-control">
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

                    <div class="form-group col-md-6" align="right">
                        <button name="end_status" value="2" class="btn btn-primary">Kabul Edildi</button>
                        <button name="end_status" value="0" class="btn btn-primary">Redddildi</button>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group" align="left" >

                    </div>

            </form>
        </div>

    </section>


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        function rotateImage(degree) {
            $('#resim-zoom').animate({  transform: degree }, {
                step: function(now,fx) {
                    $(this).css({
                        '-webkit-transform':'rotate('+now+'deg)',
                        '-moz-transform':'rotate('+now+'deg)',
                        'transform':'rotate('+now+'deg)'
                    });
                }
            });
        }
    </script>

@endsection
@section('css')@endsection
@section('js')@endsection




