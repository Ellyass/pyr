
@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteri Email Ekle</h4>
            </div>
            @if(Session::has('status'))
                <div class="alert alert-success">
                    <p style="text-align: center;font-size: 15px;">{{session('status')}}</p>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

            <div class="box-body">
                <form action="{{route('email.post')}}" method="POST">
                    @csrf
                    <div class="form-group col-md-4" >
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12" >Firma Adı </label>
                        <select name="customer_id"  class="form-control">
                            @foreach($datas as  $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group " >
                        <label  class="control-label col-md-9  col-xs-12" >Firma Yetkili <span class="required">*</span>
                        </label>
                        <input type="text" name="customer_official"  required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-3" >
                        <label  class="control-label  col-xs-12" >Eposta <span class="required">*</span>
                        </label>
                        <input type="text" name="email"  required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-4" style="margin-left: 50px;" >
                        <label  class="control-label  col-xs-12" >Cep
                        </label>
                        <input type="text" name="mobile"  value="0"  class="form-control">
                    </div>

                    <div class="form-group col-md-3" style="margin-left: 50px;"  >
                        <label  class="control-label  col-xs-12" >Telefon <span class="required">*</span>
                        </label>
                        <input type="text" name="phone" value="0"   class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <div class="form-group" align="center"  >
                        <button class="btn btn-success">Kaydet</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection




