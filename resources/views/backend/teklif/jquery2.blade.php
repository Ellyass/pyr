




            <table class="table" id="paginationNumbers">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firma</th>
                    <th scope="col">Dış Kaynak/Satıcı</th>
                    <th scope="col">Teklif Tarihi</th>
                    <th scope="col">Teklif Veren Kullanıcı</th>
                    <th scope="col">Teklif Toplamı</th>
                    <th scope="col">Teklif Türü</th>
                    <th scope="col">Teklif Acıklama</th>
                    <th>Müşteri Düzenle</th>
                    <th scope="col">Teklif Durum</th>
                    <th scope="col">Teklif File</th>
                </tr>
                </thead>
                @php $say=1; @endphp
                <tbody>

                     @foreach($jquerys as $jquery)

                    <tr>
                        <th scope="row">@php echo $say++ @endphp</th>
                        <td>{{ $jquery->customer->name }}</td>

                        <td>{{ $jquery->seller->seller_name}}</td>

                        <td>{{ $jquery->offer_date->format('d.m.Y')}}</td>
                        <td>{{ $jquery->user->name }}</td>
                        @if($jquery->product==1)

                            <td>%{{$jquery->offer_money}}</td>
                        @else
                            <td> {{number_format($jquery->offer_total,2,',','.').' '}}TL</td>
                        @endif

                        @if($jquery->product==1)
                            <td>Teşvik</td>
                        @elseif($jquery->product==2)
                            <td>Kvkk</td>
                        @elseif($jquery->product==3)
                            <td>Eğitim</td>
                        @elseif($jquery->product==4)
                            <td>Bodrolama</td>
                        @elseif($jquery->product==5)
                            <td>Danışmanlık</td>
                        @endif

                        <td > <textarea>@foreach($jquery->explanations as $explanation)
                                    {{$explanation->date->format('d.m.Y').'      '.$explanation->explanation}} @endforeach </textarea>
                        </td>

                        <td>
                            <a href="{{route('customer.edit',['id'=>$jquery->customer_id])}}" ><button class="btn btn-success btn-xs">Müşteri Düzenle</button></a>
                        </td>

                        <td>@if($jquery->offer_status==1)
                                <a href="{{route('offer.status',['id'=>$jquery->id])}}" ><button class="btn btn-warning btn-xs">Bekleniyor</button></a>

                            @elseif($jquery->offer_status==2)
                                <a href="{{route('offer.status',['id'=>$jquery->id])}}" ><button class="btn btn-success btn-xs">Kabul Edildi</button></a>

                            @elseif($jquery->offer_status==0)
                                <button class="btn btn-danger btn-xs">Reddedildi</button>
                            @endif

                        </td>

                        <td><a href="{{route('offer.edit',['id'=>$jquery->id])}}"><button class="btn btn-primary btn-xs">Güncelle</button></a>
                            <a href="{{route('offer.delete',['id'=>$jquery->id])}}"><Button class="btn btn-danger">Sil</Button></a>
                            <a href="{{route('offer.file',['id' => $jquery->id])}}"><img src="https://img.icons8.com/officel/40/000000/pdf.png"/></a>
                            <!-- <a href="/pdf/">-->

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>









