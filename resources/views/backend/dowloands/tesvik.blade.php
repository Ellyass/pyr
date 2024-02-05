

<html>
<head>
    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


</head>
<body>
<section class="content-header">
    <div class="box box-primary">
<div class="box-header">

    @foreach($data['tesvik'] as $datas)

    <TABLE border="3" class="alert-heading">


        <TR>

            <TD ROWSPAN=5><img src="/img/small.jpg" alt=""></TD>

            <TD>Firma Adı</TD> <TD  align="center">{{$datas['Firma_name']}}</TD>



        </TR>

        <TR>

            <TD>Firma Şube</TD> <TD align="center">{{$datas['Firma_sube']}}</TD>



        </TR>
        <TR>
        <td>Firma Yetkili</td>
        <td align="center">{{$datas['Firma_yetkili']}}</td>
        </TR>
        <TR>
            <td>Firma Yetkili Tel</td>
            <td align="center">{{$datas['Firma_cep']}}</td>
        </TR>
        <TR>
            <td>Firma Adres</td>
            <td align="center">{{$datas['Firma_adres']}}</td>
        </TR>
            <br>

    </TABLE>
    @endforeach
</div>
    </div>
</section>
</body>
</html>

