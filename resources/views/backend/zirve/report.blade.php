@extends('backend.layout')
@section('content')

    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <div class="form-group col-md-1 col-xs-12 col" style="float: left" >
                <form action="{{route('excel.report.post')}}" method="POST">
                    @csrf
                    <select class="form-control col-md-5 float-left" name="year" style="float: left">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                    <div class="form-group float-left col-md-1 col-sm-5 col-xs-12 col" >
                        <button class="btn btn-success float-left" style="float: left"> Sorgula</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
