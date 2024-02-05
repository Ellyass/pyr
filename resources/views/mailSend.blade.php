<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mail Gönder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<br>
<div class="mt-4 d-flex justify-content-center">
    <h4>Mail Gönder</h4>
    <br>
</div>
<br>
<div class="d-flex justify-content-center">

    <hr>
    <div class="form-group col-md-6">
        <p>{{session('success')}}</p>
        <form action="{{route('sendpost')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="text" name="email" placeholder="Alıcı Email Adresi...">
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="image" placeholder="Yüklenecek Resmi Seçin...">
            </div>
            <div class="mb-3">
                <textarea class="ckeditor form-control" name="message"></textarea>
            </div>
            <center>
                <div class="mb-3" >
                    <input class="btn btn-success" type="submit" value="Gönder">
                </div></center>
        </form>
    </div>
</div>




</body>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</html>
