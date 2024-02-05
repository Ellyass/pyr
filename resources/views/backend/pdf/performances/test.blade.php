<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->
    <style type="text/css" media="screen">

        body {


            width: 100% !important;
            font-family: "times-new-roman";
            font-style:normal;
            font-size:10pt;
            color: #000;
            padding: 5px 10px 10px 10px;
            height: 100% !important;


        }
        .headertbl {
            padding-top:10px;
            border: solid #ccc 1px;
        }

        p {
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 80px;


        }

        body td
        {
            font-family: DejaVu Sans, sans-serif;
            font-weight: bold;
        }
    </style>
    <link href="{{public_path()}}/backend/pdfs/plugins_pdf.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{public_path()}}/backend/pdfs/style_pdf.bundle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table class="table" style="width: 100%">
    <tbody>
    <tr >
        <td style="width:5%;height:70px">
            <img style="border:none;" src="{{public_path() . '/backend/pdfs/pdf-logo.jpg'}}">
        </td>

        <td style="font-family: DejaVu Sans, sans-serif;text-align: center;font-size: 22px;margin-top: 15px;">
            <label style="text-align: center;font-size: 22px;margin-top: 10px; margin-left: 10px;">İK Yönetim Sistemi Teklifi</label>


        </td>

    </tr>
    </tbody>
</table>

<table style="margin-right: auto;margin-left:auto; margin-top: 20px" id="teklif_performans" class="table table-bordered">
    <thead>
    <tr >
        <th style="font-family: DejaVu Sans, sans-serif;" >Ürünler</th>
        <th style="font-family: DejaVu Sans, sans-serif;">Kullanım Dönemi</th>
{{--        <th style="font-family: DejaVu Sans, sans-serif;">Çalışan Sayısı</th>--}}
{{--        <th style="font-family: DejaVu Sans, sans-serif;">Çalışan Başı Ücret</th>--}}
        <th style="font-family: DejaVu Sans, sans-serif;">Toplam Ücret</th>
    </tr>
    </thead>
    <tbody>
{{--    <tr>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;" rowspan="2">Dijital Kvkk Yönetim Sistemi Teklifi</td>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;">Aylık</td>--}}
{{--        --}}{{--        <td style="font-family: DejaVu Sans, sans-serif;">{{!empty($employee_count) ? $employee_count : null}}</td>--}}
{{--        --}}{{--        <td style="font-family: DejaVu Sans, sans-serif;">{!! number_format(250,2,',','.') !!}₺</td>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;">250.00₺</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;">Yıllık</td>--}}
{{--        --}}{{--        <td style="font-family: DejaVu Sans, sans-serif;">{{!empty($employee_count) ? $employee_count : null}}</td>--}}
{{--        --}}{{--        <td style="font-family: DejaVu Sans, sans-serif;"></td>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;">20.000₺</td>--}}
{{--    </tr>--}}

    <tr>
        <td style="font-family: DejaVu Sans, sans-serif;" rowspan="2">Dijital e-Bordro Yönetim Sistemi Teklifi</td>
        <td style="font-family: DejaVu Sans, sans-serif;">Aylık</td>
{{--        <td style="font-family: DejaVu Sans, sans-serif;">{{!empty($employee_count) ? $employee_count : null}}</td>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;">{!! number_format(250,2,',','.') !!}₺</td>--}}
        <td style="font-family: DejaVu Sans, sans-serif;">250.00₺</td>
    </tr>
    <tr>
        <td style="font-family: DejaVu Sans, sans-serif;">Yıllık</td>
{{--        <td style="font-family: DejaVu Sans, sans-serif;">{{!empty($employee_count) ? $employee_count : null}}</td>--}}
{{--        <td style="font-family: DejaVu Sans, sans-serif;"></td>--}}
        <td style="font-family: DejaVu Sans, sans-serif;">20.000₺</td>
    </tr>



    </tbody>
</table>
<br>
<h5 style="font-family: DejaVu Sans, sans-serif;font-weight: bold">ÖDEME BİLGİLERİ</h5>
<table class="table table-bordered">
    <thead>
    </thead>
    <tbody>
    <tr style="border: solid #000000  1px">
        <td style="font-weight: bold;font-family: DejaVu Sans, sans-serif">FİRMA UNVANI</td>
        <td style="font-family: DejaVu Sans, sans-serif;">More Payroll Bordrolama ve Teşvik Hizmetleri Ltd. Şti.</td>
    </tr>
    <tr style="border: solid #000000  1px">
        <td style="font-weight: bold;font-family: DejaVu Sans, sans-serif">BANKA</td>
        <td style="font-family: DejaVu Sans, sans-serif;" >YAPI VE KREDİ BANKASI A.Ş. (BURSA NİLTİM Şubesi)</td>
    </tr>
    <tr style="border: solid #000000  1px">
        <td style="font-weight: bold;font-family: DejaVu Sans, sans-serif">IBAN NO  </td>
        <td style="font-family: DejaVu Sans, sans-serif;">TR 52 0006 7010 0000 0057 0308 94</td>
    </tr>
    </tbody>
</table>
<br>
<h5 style="font-family: DejaVu Sans, sans-serif;font-weight: bold">ÜCRET KOŞULLARI</h5>
<ul>
    <li style="font-family: DejaVu Sans, sans-serif;">Teklifimiz 30 gün geçerlidir.</li>
    <li style="font-family: DejaVu Sans, sans-serif ;">Fiyatlarımıza <b>{{$kdv}}.</b></li>
    <li style="font-family: DejaVu Sans, sans-serif;">Yıllık bedeller yazılım kurulum bedeli olup bir kereye mahsus alınacaktır.</li>
    <li style="font-family: DejaVu Sans, sans-serif;">Hizmetin başlangıcını takiben birinci yılın sonunda geçmiş döneme ilişkin TÜİK tarafından deklare edilmiş (TEFE+TÜFE) / 2 artış oranları doğrultusunda fiyat artışı gerçekleştirilecektir.</li>
    <li style="font-family: DejaVu Sans, sans-serif;">Kurulum ve sonrası destek ekibimiz ile yanı başınızdayız.</li>
{{--    <li style="font-family: DejaVu Sans, sans-serif;">Bir(1) yılın sonunda güncelleme bedeli 16.500₺ + KDV üzerinden %25'i alınacaktır.</li>--}}
</ul>
<br>
<table class="" style="width: 100%">
    <tr>
        <td  style="text-align: left"></td>
        <td  style="text-align: right">Tarih: 02/12/2021</td>
    </tr>
    <tr>
        <td style="font-family: DejaVu Sans, sans-serif;">{{$customer_name}}</td>
        <td style="font-family: DejaVu Sans, sans-serif;font-weight: bold;text-align: right">MOREPAYROLL</td>
    </tr>
    <tr>
        <td style="font-family: DejaVu Sans, sans-serif;">Yetkili Ad-Soyadı</td>
        <td style="font-family: DejaVu Sans, sans-serif;text-align: right">Yetkili Ad-Soyadı</td>
    </tr>
    <tr>
        <td style="font-family: DejaVu Sans, sans-serif;">Kaşe- İmza</td>
        <td style="font-family: DejaVu Sans, sans-serif;text-align: right">Kaşe- İmza</td>
    </tr>
</table>
<footer>
    <img style="border:none;width: 100%;height: 80px;" src="{{public_path() . '/backend/pdfs/footer.jpg'}}" />
</footer>

</body>
</html>
