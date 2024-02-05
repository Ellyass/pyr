@extends('backend.layout')
@section('content')
    <section class="content-header" >
        <div class="box box-danger"  >
            <div class="box-header with-border" style="background-color: #fff" >
                <h4 style="">Müşteriler</h4>
            </div>
            <br>
            <div align="right">
                <a href="{{route('customer.add')}}"><button class="btn btn-danger">Müşteri Ekle</button></a>
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
                                <th>Müşteri</th>
                                <th>Müşteri Türü</th>
                                <th>Müşteri Tipi</th>

                                <th>Durumu</th>
                                @if(Auth::user()->id == 1 || Auth::user()->id == 5 || Auth::user()->id == 21 || Auth::user()->id == 6|| Auth::user()->id == 32)

                                <th>İşlemler</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>

                                <td>{{$customer->name}}</td>
                                <td> @foreach($customer->customer_types as $customer_type)
                                        <span class="label label-danger">{{config('variables.crm.customer_types')[$customer_type->type]}}</span>
                                    @endforeach</td>
                                <td><span class=" label label-primary">{{$customer->status}}</span></td>
                                <td>@if($customer->is_deleted==0)
                                        <span class="label label-primary">Aktif</span>
                                    @else
                                        <span class="label label-danger">Pasif</span>

                                </td>
                                @endif
                                @if(Auth::user()->id == 1 || Auth::user()->id == 5 || Auth::user()->id == 21 || Auth::user()->id == 6|| Auth::user()->id == 32)

                                <td><a href="{{route('customer.edit',['id' => $customer->id])}}"><i class="fa fa-pencil"></i></a>

                                    <form  id="musterifrm{{ $customer->id }}" action="{{route('customer.destroy',['id' => $customer->id])}}" method="POST">
                                        @csrf
                                         <button data-id="{{$customer->id}}" type="button" class="btn btn-danger fa fa-trash">Sil</button>
                                    </form>

                                </td>

                                @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
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




