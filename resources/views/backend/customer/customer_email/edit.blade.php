
@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteri Email Ekle</h4>
            </div>
            <div class="box-body">
                <form action="{{route('email.edit.post',['id'=>$email->id])}}" method="POST">
                    @csrf
                    <div class="form-group col-md-4" >
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12" >Firma Adı </label>
                        <select name="customer_id"  class="form-control">
                                @foreach($customers as $customer)
                                <option @if($email->customer_id==$customer->id) selected @endif  value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach

                        </select>
                    </div>

                    <div class="form-group col-md-10 " >
                        <label  class="control-label col-md-9  col-xs-12" >Firma Yetkili <span class="required">*</span>
                        </label>
                        <input type="text" name="customer_official" value="{{$email->customer_official}}" required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-3" >
                        <label  class="control-label  col-xs-12" >Eposta <span class="required">*</span>
                        </label>
                        <input type="text" name="email" value="{{$email->email}}"  required="required" class="form-control">
                    </div>

                    <div class="form-group col-md-3" style="margin-left: 50px;" >
                        <label  class="control-label  col-xs-12" >Cep
                        </label>
                        <input type="text" name="mobile" value="{{$email->mobile}}"   class="form-control">
                    </div>

                    <div class="form-group col-md-4" style="margin-left: 50px;"  >
                        <label  class="control-label  col-xs-12" >Telefon <span class="required">*</span>
                        </label>
                        <input type="text" name="phone" value="{{$email->phone}}"   class="form-control">
                    </div>
                    <br>

                    <div class="form-group col-md-4" style="margin-left: 450px;"  >
                        <button class="btn btn-success ">Kaydet</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection




