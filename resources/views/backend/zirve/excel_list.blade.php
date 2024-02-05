@extends('backend.layout')
@section('content')

    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <button id="excel2" class="btn btn-success">Excell Yükle</button>
                <div id="excel">

                    <form action="{{route('file.import')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-8" style="margin-left: 20%">

                            <div class="form-group col-md-5 col-xs-12">
                                <label for="">Hangi Ayın Verilerini Kaydedicez</label>
                                <input class="form-control" type="date" name="period_date" >
                            </div>

                            <div class="form-group col-md-10">
                                <label for="">Excell Tablosu</label>
                                <input class="form-control" type="file" name="excell">
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
    <script>
        $("#excel").hide();
        $("#excel2").click(function(){

            $("#excel").toggle(1000);
        });
    </script>
@endsection
@section('css')@endsection
@section('js')@endsection

