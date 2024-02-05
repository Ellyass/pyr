@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <table id="table_id" class="display">
                <thead>
                <tr>
                    <th>İsim</th>
                    <th>Giriş Yap</th>

                </tr>

                @foreach($users as $user)
                    <tr>
                <td>{{$user->name}}</td>
                        <td><a href="{{route('users.index2',['id'=>$user->id])}}"> <button class="btn btn-success">Giriş Yap</button></a></td>
                    </tr>
                @endforeach
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

@endsection
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
