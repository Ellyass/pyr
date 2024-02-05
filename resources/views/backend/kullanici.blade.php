@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <form class="was-validated" action="{{route('excell.import')}}" method="POST" enctype="multipart/form-data">
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
    </section>
    <style>
        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-bottom: 0;
        }
    </style>


@endsection
@section('css')@endsection
@section('js')@endsection
