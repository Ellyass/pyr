@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
                <form action="{{route('personel_detail')}}" method="POST">
                    @csrf
                <div class="form-group col-md-2">

                    <select class="form-control" name="month" id="">
                        <option value="">Seçiniz</option>
                        <option value="1">Ocak</option>
                        <option value="2">Şubat</option>
                        <option value="3">Mart</option>
                        <option value="4">Nisan</option>
                        <option value="5">Mayıs</option>
                        <option value="6">Haziran</option>
                        <option value="7">Temmuz</option>
                        <option value="8">Ağustos</option>
                        <option value="9">Eylül</option>
                        <option value="10">Ekim</option>
                        <option value="11">Kasım</option>
                        <option value="12">Aralık</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="year" id="">
                        <option value="">Seçiniz</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div >
                    <button class="btn btn-primary">Sorgula</button>
                </div>
                </form>



            </div>
        </div>
    </section>
    <style>
        .aciklama
        {
            position: relative;
            display: inline-block;
        }
        .aciklama::after
        {
            content: attr(data-title);
            position: unset;
            padding: 15px;
            background: #eee;
            color: #333;
            opacity: 0;
            word-wrap: break-word;
            height: auto;

            -moz-box-shadow: 0 0 4px #222;
            -webkit-box-shadow: 0 0 4px #222;
            box-shadow: 0 0 4px #222;
            pointer-events: none;
        }
        .aciklama:hover::after
        {
            opacity: 1;
            -webkit-transition: opacity 0.3s;
            -moz-transition: opacity 0.3s;
            transition: opacity 0.3s;
            pointer-events: auto;
        }
        #mesaj
        {
            font-family: Calibri, Arial, sans-serif;
            font-size: 20px;
            width: 500px;
        }
        #mesaj a
        {
            text-decoration: none;
            color: #000;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $("#target").hide();
        $("#targett").click(function(){

            $("#target").toggle();
        });
    </script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js">


    </section>

@endsection
@section('css')@endsection
@section('js')@endsection
