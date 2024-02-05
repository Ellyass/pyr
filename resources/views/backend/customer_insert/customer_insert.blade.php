
@extends('backend.layout')
@section('content')

    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteri Ekle</h4>
            </div>
            <div class="box-body">
                <form action="{{route('customer.insert')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12" >Firma Adı <span class="required">*</span></label>
                        <input type="text" name="name"  required="required" class="form-control" >
                </div>

                <div class="form-group" >
                    <label  class="control-label col-md-3 col-sm-3 col-xs-12" >Firma Adress <span class="required">*</span>
                    </label>
                        <input type="text" name="address"  required="required" class="form-control">
                </div>

                    <div class="form-group col-md-4">
                        <label  class="control-label  col-xs-12" > Müşteri Durum  <span class="required">*</span>
                        </label>
                        <select class=" form-control " name="status" >
                                @foreach(config('variables.crm.status') as $key => $status)
                                    <option value="{{ $key }}">{{ $status }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group col-md-4 " style="margin-left: 370px;">
                        <label  class="control-label  col-xs-12" > Müşteri Türü  <span class="required">*</span>
                        </label>
                        <select class="js-example-basic-multiple form-control"  name="customer_type_id[]" multiple="multiple">
                                @foreach(config('variables.crm.customer_types') as $key => $type)
                                    <option value="{{ $key }}">{{ $type }}</option>
                                @endforeach
                            </select>
                    </div>
                    <br>
                    <br>
                    <hr>

                <div class="form-group" align="center" style="margin-left: 200px;">
                    <div class="col-md-9 col-sm-5 col-xs-12">
                        <button type="submit" class="btn btn-success">Müşteri Ekle</button>
                    </div>
                </div>
                <br>
                </form>
            </div>
        </div>


    </section>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
@section('css')@endsection
@section('js')@endsection



