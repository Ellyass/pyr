@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            @foreach($status as $statu)
            @endforeach
            <div class="box-body">
                <form action="{{route('status.up',['id'=>$statu->id])}}" method="POST">
                    @csrf
                  <div class="form-group col-md-4 col-sm-3 col-xs-12" >
                    <label for="exampleInputPassword1">Firma Seciniz</label>
                    <select class="form-control" name="offer_status">
                             <option value="2">Kabul Edildi</option>
                               <option value="1">Bekleniyor</option>
                             <option value="0">Reddedildi</option>
                    </select>
                </div>
                    <div class="form-group col-md-2 col-sm-3 col-xs-12 col" align="right">
                        <button  class="btn btn-success ">Güncelle</button>
                    </div>
                </form>

            </div>
        </div>
    </section>










    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
@section('css')@endsection
@section('js')@endsection



