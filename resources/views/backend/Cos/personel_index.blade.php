@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-danger">
            <div align="right"><a href="{{route('cost.personel.create')}}"><button class="btn btn-success btn-xs">Masraf Ekle</button></a></div>

            <div class="box-header with-border">
                <h4>Aldığım Ücretler</h4>
            </div>
            <div class="box-header with-border">
                <table class="table">
                    <?php
                    $say=1;
                    ?>
                    <thead>
                    <tr>
                        <th scope="col">Sıra</th>
                        <th scope="col">Personel</th>
                        <th scope="col">Aldığı Miktar</th>
                        <th scope="col">Sebep</th>
                        <th scope="col">Tarih</th>

                        <th scope="col">Form</th>
                        <th scope="col">Durum</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($costs  as $cost)
                        <tr>

                            <th scope="row"><?php echo $say++?></th>
                            <td>{{$cost->user->name}}</td>
                            <td>{{$cost->cost_money}}</td>
                            <td>{{$cost->cost_explanation}}</td>
                            <td>{{$cost->cost_date}}</td>

                            @if($cost->cost_status==0)
                            <td>

                                <a href="{{route('form.create',['id'=>$cost->id])}}"><i class="fa fa-archive"></i></a></td>@endif

                            <td>@if($cost->end_status==0)
                                    <a href="{{route('form.edit',['id'=>$cost->id])}}"> <button class="btn btn-danger btn-xs">Reddedildi</button></a>
                                    @elseif($cost->end_status==1)

                                    <a href="{{route('form.edit',['id'=>$cost->id])}}"><button class="btn btn-warning btn-xs">Bekleniyor</button></a>
                                        @elseif($cost->end_status==2)
                                    <a href="{{route('form.edit',['id'=>$cost->id])}}"><button class="btn btn-success btn-xs">Kabul Edildi</button></a>
                                @endif
                            </td>




                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>
@endsection
@section('css')
@endsection
@section('js')
@endsection

