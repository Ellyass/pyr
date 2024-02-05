@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <div id="office">
                    <form action="{{route('office.mounth')}}" method="POST">
                        @csrf
                        <input type="date" name="date">
                        <button class="btn btn-success">Kaydet</button>
                    </form>
                </div>
                <h4>Para Verilen Personeller</h4>
                <div class="box-header with-border">
                    <div align="right"><button id="ekle" class="btn btn-success btn-xs">Office Ay</button></div>
            </div>

<table id="paginationNumbers" class="table" width="100%">
    <thead>
    <tr>
        <th class="th-sm">Sıra
        </th>
        <th class="th-sm">Ay
        </th>
        <th class="th-sm">Toplam Harcama
        </th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    @foreach($offices as $office)
    <tr>
        <td>{{$office->id}}</td>
        <td>{{!empty($office->date) ? $office->date->format('d/m/Y'):null}}</td>
        <td>{{number_format($office->cost_total,2,',','.')}}</td>
        <td><a href="{{route('office.create',['id'=>$office->id])}}"><button class="btn btn-primary btn-xs">Güncelle</button></a></td>

    </tr>
    @endforeach



</table>
            </div>
        </div>
    </section>
    <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables2.min.css" rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="js/addons/datatables2.min.js"></script>
<script>
    $(document).ready(function () {
        //Pagination numbers
        $('#paginationNumbers').DataTable({
            "pagingType": "numbers"
        });
    });
</script>
    <script>
        $("#office").hide(1000);
        $("#ekle").click(function(){
            $("#office").toggle(1000);
        });
    </script>
@endsection
@section('css')
@endsection
@section('js')
@endsection
