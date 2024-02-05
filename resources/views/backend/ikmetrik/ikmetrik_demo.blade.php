@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Demo Kayıt Oluştur</button>

                <table class="table" id="paginationNumbers" >
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firma</th>
                        <th scope="col">Demo Talep Tarihi</th>
                        <th scope="col">Ad Soyad</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">telefon</th>
                        <th>Detay</th>
                        <th>Açıklama</th>
                        <th>Sil/Güncelle/Durum</th>
                    </tr>
                    </thead>
@php $say=1; @endphp
                    <tbody>
                    @foreach($ikmetriks as $ikmetrik)
                    <tr>
                    <td><?php echo $say++; ?></td>
                    <td>{{$ikmetrik->name}}</td>
                    <td>{{$ikmetrik->demo_date}}</td>
                    <td>{{$ikmetrik->ad_soyad}}</td>
                    <td>{{$ikmetrik->email}}</td>
                    <td>Sabit Telefon: {{$ikmetrik->mobile}}<br>
                        Cep Telefonu: {{$ikmetrik->phone}}</td>
                    <td><a href=""></a>  <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#demo_detay" data-whatever="@mdo">Demo Detay</button></td>
                    <td> <textarea class="form-control" id="message-text">{{$ikmetrik->demo_explanation}}</textarea></td>
                    <td><a href="{{route('demo.delete',['id'=>$ikmetrik->id])}}"><button class="btn btn-danger btn-xs">Sil</button></a>
                        <br>
                    @if($ikmetrik->demo_status==1)
                            <label class="btn btn-warning btn-xs">Bekleniyor</label>
                        @endif
                        @if($ikmetrik->demo_status==0)
                            <label class="btn btn-danger btn-xs">Reddedildi</label>
                        @endif
                        @if($ikmetrik->demo_status==2)
                            <label class="btn btn-success btn-xs">Kabul Edildi</label>
                        @endif
                    </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <div class="modal fade" id="demo_detay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>İkmetrik Demo Talep Kayıt</b> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table" id="paginationNumbers" class="display nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">1.Arama</th>
                                    <th scope="col">2.arama</th>
                                    <th scope="col">3.Arama</th>
                                </tr>
                                </thead>

                                <tbody>
                                <td><input id="cron_1_day"  type="checkbox" onclick="formgonder(this,'cron_1_day')"  name="" value="1"></td>
                                <td><input id="cron_1_day"   type="checkbox" onclick="formgonder(this,'cron_1_day')"  name="" value="1"></td>
                                <td><input id="cron_1_day"   type="checkbox" onclick="formgonder(this,'cron_1_day')"  name="" value="1"></td>



                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>İkmetrik Demo Talep Kayıt</b> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('ikmetrik.create')}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Firma Seciniz</label>
                                    <label for="exampleInputPassword1">Firma Seciniz</label>
                                    <select class="form-control selectpicker"  name="customer_id" data-live-search="true">
                                        @foreach($customers as $customer )
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Dış Kaynak/Şatışcı</label>
                            <select class="form-control" name="Seller" >
                                @foreach($sellers as $seller)
                                    <option  value="{{$seller->id}}">{{$seller->seller_name}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Ad Soyad</label>
                                <input type="text" class="form-control" name="ad_soyad" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">E-mail</label>
                                <input type="text" class="form-control" name="email" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sabit Telefon</label>
                                <input type="text" class="form-control" name="phone" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Cep Telefonu</label>
                                <input type="text" class="form-control" name="mobile" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Demo Talep Tarihi</label>
                                <input type="date" class="form-control" name="demo_date" >
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Açıklama Giriniz</label>
                                <input type="text" class="form-control" name="demo_explanation" >
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Çıkış</button>
                                <button type="submit" class="btn btn-primary">Kayıt Oluştur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link r href="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js">
<script  src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<link  href="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js">
<script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script  src="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>  <script>
    $(document).ready(function () {
        //Pagination numbers
        $('#paginationNumbers').DataTable({
            "pagingType": "numbers"
        });
    });
</script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
@section('css')@endsection
@section('js')@endsection
