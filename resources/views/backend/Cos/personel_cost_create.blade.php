@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Kullanıcı Masraf Oluşur</h4>
            </div>
            <div class="box-body">
                <form action="{{route('cost.personel.create.post')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">


                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Tarih</label>
                    <input type="date" name="cost_date" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" >
                    <label for="exampleInputPassword1">Sebep</label>
                    <input type="text" name="cost_explanation" class="form-control">
                </div>

                <div class="form-group col-md-10 col-sm-3 col-xs-12 col" align="right" >
                   <button class="btn btn-success">Ekle</button>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection

