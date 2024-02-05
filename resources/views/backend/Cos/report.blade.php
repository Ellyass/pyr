@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
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
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
