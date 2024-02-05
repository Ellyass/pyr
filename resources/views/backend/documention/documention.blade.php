@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div class="box-header with-border">
            </div>
            <textarea name="ckeditor1" id="ckeditor1" cols="30" rows="10" class="ckeditor">
                recep
            </textarea>
        </div>
    </section>
@endsection
<script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor1');
</script>
@section('css')@endsection
@section('js')@endsection
