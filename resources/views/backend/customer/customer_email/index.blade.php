@extends('backend.layout')
@section('content')
    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteriler</h4>
            </div>
            <br>
            <div align="right">
                <a href="{{route('email.create')}}"><button class="btn btn-danger">Yeni Eposta Ekle</button></a>
            </div>
            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" border="1"  class="table table-bordered table-striped" style="color: #000000;border-bottom-color: #000000;">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Müşteri</th>
                                <th>Yetkili</th>
                                <th>Cep</th>
                                <th>Telefon</th>
                                <th>Eposta</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer_emails as $email)
                                <tr>
                                    <td>{{$email->id}}</td>
                                    <td>{{isset($email->customer['name'])}}</td>
                                    <td>{{$email->customer_official}}</td>
                                    <td>{{$email->mobile}}</td>
                                    <td>{{$email->phone}}</td>
                                    <td>{{$email->email}}</td>
                                    <td><a href="{{route('email.edit',['id' => $email->id])}}"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('email.destroy',['customer_email' => $email->email])}}"><i style="margin-left: 10px;" class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : false,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })

    </script>
@endsection
@section('css')@endsection
@section('js')@endsection





