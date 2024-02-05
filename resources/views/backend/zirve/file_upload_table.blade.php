
<style> .table, th, td,th {
        border: 1px solid black;
        padding: 7px 10px;
    }</style>
<div align="center">

<table id="table" class="table table-striped display nowrap" border="3" style="font-weight: bold;" >
    <thead>
    <tr>

        <th colspan="2" style="text-align: center">Ocak</th>
        <th colspan="2" style="text-align: center">Şubat</th>
        <th colspan="2" style="text-align: center">Mart</th>
        <th colspan="2" style="text-align: center">Nisan</th>
        <th colspan="2" style="text-align: center">Mayıs</th>
        <th colspan="2" style="text-align: center">Haziran</th>
        <th colspan="2" style="text-align: center">Temmuz</th>
        <th colspan="2" style="text-align: center">Ağustos</th>
        <th colspan="2" style="text-align: center">Eylül</th>
        <th colspan="2" style="text-align: center">Ekim</th>
        <th colspan="2" style="text-align: center">Kasım</th>
        <th colspan="2" style="text-align: center">Aralık</th>

    </tr>
    </thead>
    <tbody >
    <tr>


        <td  width="10px;" style="background-color: #93d44f">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #93d44f">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

        <td width="25px;" style="background-color: #a1cbef">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #a1cbef">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',2)->whereYear('period_date',$year)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="10px;" style="background-color: #bb8a35">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #bb8a35">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="25px;" style="background-color: #ffba09">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #ffba09">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="10px;" style="background-color: #ff1d68">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #ff1d68">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="25px;" style="background-color: #fff105">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #fff105">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="10px;" style="background-color: #fab0ff">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #fab0ff">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="25px;" style="background-color: #05faff">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #05faff">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="10px;" style="background-color: #93d44f">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #93d44f">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="25px;" style="background-color: #93d44f">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #93d44f">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="10px;" style="background-color: #93d44f">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #93d44f">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td width="25px;" style="background-color: #93d44f">TEŞVİK HİZMETİ</td>
        <td width="25px;" style="background-color: #93d44f">{{number_format($data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

    </tr>
    <tr>

        <td style="background-color: #93d44f">KVKK HİZMETİ</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

        <td style="background-color: #a1cbef">KVKK HİZMETİ</td>
        <td style="background-color: #a1cbef">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #bb8a35">KVKK HİZMETİ</td>
        <td style="background-color: #bb8a35">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ffba09">KVKK HİZMETİ</td>
        <td style="background-color: #ffba09">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ff1d68">KVKK HİZMETİ</td>
        <td style="background-color: #ff1d68">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fff105">KVKK HİZMETİ</td>
        <td style="background-color: #fff105">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fab0ff">KVKK HİZMETİ</td>
        <td style="background-color: #fab0ff">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date', 7)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #05faff">KVKK HİZMETİ</td>
        <td style="background-color: #05faff">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">KVKK HİZMETİ</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">KVKK HİZMETİ</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">KVKK HİZMETİ</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">KVKK HİZMETİ</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">EGITIM HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

        <td style="background-color: #a1cbef">EGITIM HIZMETI</td>
        <td style="background-color: #a1cbef">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #bb8a35">EGITIM HIZMETI</td>
        <td style="background-color: #bb8a35">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ffba09">EGITIM HIZMETI</td>
        <td style="background-color: #ffba09">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ff1d68">EGITIM HIZMETI</td>
        <td style="background-color: #ff1d68">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fff105">EGITIM HIZMETI</td>
        <td style="background-color: #fff105">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fab0ff">EGITIM HIZMETI</td>
        <td style="background-color: #fab0ff">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #05faff">EGITIM HIZMETI</td>
        <td style="background-color: #05faff">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">EGITIM HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">EGITIM HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">EGITIM HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">EGITIM HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">BORDROLAMA HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

        <td style="background-color: #a1cbef">BORDROLAMA HIZMETI</td>
        <td style="background-color: #a1cbef">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #bb8a35">BORDROLAMA HIZMETI</td>
        <td style="background-color: #bb8a35">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ffba09">BORDROLAMA HIZMETI</td>
        <td style="background-color: #ffba09">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #ff1d68">BORDROLAMA HIZMETI</td>
        <td style="background-color: #ff1d68">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fff105">BORDROLAMA HIZMETI</td>
        <td style="background-color: #fff105">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #fab0ff">BORDROLAMA HIZMETI</td>
        <td style="background-color: #fab0ff">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #05faff">BORDROLAMA HIZMETI</td>
        <td style="background-color: #05faff">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">BORDROLAMA HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">BORDROLAMA HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">BORDROLAMA HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>
        <td style="background-color: #93d44f">BORDROLAMA HIZMETI</td>
        <td style="background-color: #93d44f">{{number_format($data->where('stock_name','BORDROLAMA HIZMETI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total'),2,',','.')}}</td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">TOPLAM KDV:</td>
        <td style="background-color: #93d44f">{{number_format($data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>

        <td style="background-color: #a1cbef">TOPLAM KDV:</td>
        <td style="background-color: #a1cbef">{{number_format($data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #bb8a35">TOPLAM KDV:</td>
        <td style="background-color: #bb8a35">{{number_format($data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #ffba09">TOPLAM KDV:</td>
        <td style="background-color: #ffba09">{{number_format($data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #ff1d68">TOPLAM KDV:</td>
        <td style="background-color: #ff1d68">{{number_format($data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #fff105">TOPLAM KDV:</td>
        <td style="background-color: #fff105">{{number_format($data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #fab0ff">TOPLAM KDV:</td>
        <td style="background-color: #fab0ff">{{number_format($data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #05faff">TOPLAM KDV:</td>
        <td style="background-color: #05faff">{{number_format($data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #93d44f">TOPLAM KDV:</td>
        <td style="background-color: #93d44f">{{number_format($data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #93d44f">TOPLAM KDV:</td>
        <td style="background-color: #93d44f">{{number_format($data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #93d44f">TOPLAM KDV:</td>
        <td style="background-color: #93d44f">{{number_format($data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
        <td style="background-color: #93d44f">TOPLAM KDV:</td>
        <td style="background-color: #93d44f">{{number_format($data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money'),2,',','.')}}</td>
    </tr>
    <tr>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?>
        </td>

        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #ff0006"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #93d44f"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #93d44f"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #93d44f"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff0006">Toplam</td>
        <td style="background-color: #93d44f"><?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($hizmet + $kdv,2,',','.');
            ?></td>
    </tr>
    <tr>
        <td style="background-color: #ffffff;height: 50px;" colspan="24"></td>


    </tr>
    <tr>
        <td colspan="2" style="background-color: #93d44f; text-align: center" >Giderler</td>


        <td colspan="2" style="background-color: #a1cbef; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #bb8a35; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #ffba09; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #ff1d68; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #fff105; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #fab0ff; text-align: center"  >Giderler</td>

        <td colspan="2" style="background-color: #05faff; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #93d44f; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #93d44f; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #93d44f; text-align: center" >Giderler</td>

        <td colspan="2" style="background-color: #93d44f; text-align: center" >Giderler</td>


    </tr>
    <tr>
        <td style="background-color: #93d44f">OCAK MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),1)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>

        <td style="background-color: #a1cbef">ŞUBAT MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),2)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #bb8a35">MART MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #bb8a35"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            //  $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),3)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #ffba09">NİSAN MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #ffba09"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),4)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #ff1d68">MAYIS MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #ff1d68"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),5)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #fff105">HAZİRAN MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #fff105"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),6)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #fab0ff">TEMMUZ MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #fab0ff"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            //$kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),7)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #05faff">AĞUSTOS MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #05faff"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),8)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">EYLÜL MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),9)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">EKİM MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),10)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">KASIM MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            // $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),11)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">ARALIK MAAŞ PRİM GİDERİ</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            //  $kdv = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year),12)->sum('kdv_money');
            echo number_format($total,2,',','.');

            ?></td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">OCAK MAAŞ TOPLAMI</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>

        <td style="background-color: #a1cbef">ŞUBAT MAAŞ TOPLAMI</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #bb8a35">MART MAAŞ TOPLAMI</td>
        <td style="background-color: #bb8a35">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #ffba09">NİSAN MAAŞ TOPLAMI</td>
        <td style="background-color: #ffba09">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #ff1d68">MAYIS MAAŞ TOPLAMI</td>
        <td style="background-color: #ff1d68">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #fff105">HAZİRAN MAAŞ TOPLAMI</td>
        <td style="background-color: #fff105"> <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #fab0ff">TEMMUZ MAAŞ TOPLAMI</td>
        <td style="background-color: #fab0ff">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #05faff">AĞUSTOS MAAŞ TOPLAMI</td>
        <td style="background-color: #05faff">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');

            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">EYLÜL MAAŞ TOPLAMI</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">EKİM MAAŞ TOPLAMI</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">KASIM MAAŞ TOPLAMI</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">ARALIK MAAŞ TOPLAMI</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','Maaş')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">VERGİ GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>

        <td style="background-color: #a1cbef">VERGİ GİDERİ</td>
        <td style="background-color: #a1cbef"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #bb8a35">VERGİ GİDERİ</td>
        <td style="background-color: #bb8a35"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #ffba09">VERGİ GİDERİ</td>
        <td style="background-color: #ffba09"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #ff1d68">VERGİ GİDERİ</td>
        <td style="background-color: #ff1d68"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #fff105">VERGİ GİDERİ</td>
        <td style="background-color: #fff105"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #fab0ff">VERGİ GİDERİ</td>
        <td style="background-color: #fab0ff"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #05faff">VERGİ GİDERİ</td>
        <td style="background-color: #05faff"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">VERGİ GİDERİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">VERGİ GİDERİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">VERGİ GİDERİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">VERGİ GİDERİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">ELEKTRİK</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?>
        </td>

        <td style="background-color: #a1cbef">ELEKTRİK</td>
        <td style="background-color: #a1cbef"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #bb8a35">ELEKTRİK</td>
        <td style="background-color: #bb8a35"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #ffba09">ELEKTRİK</td>
        <td style="background-color: #ffba09"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #ff1d68">ELEKTRİK</td>
        <td style="background-color: #ff1d68"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #fff105">ELEKTRİK</td>
        <td style="background-color: #fff105"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #fab0ff">ELEKTRİK</td>
        <td style="background-color: #fab0ff"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #05faff">ELEKTRİK</td>
        <td style="background-color: #05faff"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">ELEKTRİK</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">ELEKTRİK</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">ELEKTRİK</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>
        <td style="background-color: #93d44f">ELEKTRİK</td>
        <td style="background-color: #93d44f"><?php
            $total = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','ELEKTRIK GIDE')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');

            ?></td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">İNTERNET</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>

        <td style="background-color: #a1cbef">İNTERNET</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #bb8a35">İNTERNET</td>
        <td style="background-color: #bb8a35">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ffba09">İNTERNET</td>
        <td style="background-color: #ffba09">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff1d68">İNTERNET</td>
        <td style="background-color: #ff1d68">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fff105">İNTERNET</td>
        <td style="background-color: #fff105">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fab0ff">İNTERNET</td>
        <td style="background-color: #fab0ff">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #05faff">İNTERNET</td>
        <td style="background-color: #05faff">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">İNTERNET</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">İNTERNET</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">İNTERNET</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">İNTERNET</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','INTERNET HZM. GIDERI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>

    </tr>
    <tr>
        <td style="background-color: #93d44f">SU GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>

        <td style="background-color: #a1cbef">SU GİDERİ</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #bb8a35">SU GİDERİ</td>
        <td style="background-color: #bb8a35">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ffba09">SU GİDERİ</td>
        <td style="background-color: #ffba09">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff1d68">SU GİDERİ</td>
        <td style="background-color: #ff1d68">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fff105">SU GİDERİ</td>
        <td style="background-color: #fff105">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fab0ff">SU GİDERİ</td>
        <td style="background-color: #fab0ff">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #05faff">SU GİDERİ</td>
        <td style="background-color: #05faff">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">SU GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">SU GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">SU GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">SU GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','BUSKI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>


        </td>

        <td style="background-color: #a1cbef">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #bb8a35">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #bb8a35">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ffba09">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #ffba09">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff1d68">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #ff1d68">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fff105">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #fff105">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #fab0ff">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #fab0ff">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #05faff">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #05faff">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">TELEFON GİDERİ (TURKCELL)</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('cari_name','TURKCELL ILETISIM HIZMETLERI A.S.')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">KİRA GİDERİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?></td>

        <td style="background-color: #a1cbef">KİRA GİDERİ</td>
        <td style="background-color: #a1cbef">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #bb8a35">KİRA GİDERİ</td>
        <td style="background-color: #bb8a35">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #ffba09">KİRA GİDERİ</td>
        <td style="background-color: #ffba09">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #ff1d68">KİRA GİDERİ</td>
        <td style="background-color: #ff1d68">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #fff105">KİRA GİDERİ</td>
        <td style="background-color: #fff105">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #fab0ff">KİRA GİDERİ</td>
        <td style="background-color: #fab0ff">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #05faff">KİRA GİDERİ</td>
        <td style="background-color: #05faff">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">KİRA GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">KİRA GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">KİRA GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
        <td style="background-color: #93d44f">KİRA GİDERİ</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','KİRA')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            echo number_format($total,2,',','.');

            ?>
        </td>
    </tr>
    <tr>

        <td style="background-color: #93d44f">YEMEK GIDERI</td>
        <td style="background-color: #93d44f">
            <?php
            $total = $data->where('stock_code','YEMEK GIDERI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_code','YEMEK GIDERI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>

        <td style="background-color: #a1cbef">YEMEK GIDERI</td>
        <td style="background-color: #a1cbef">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereNotIn('cari_name',['BENMAR GIDA INS. TEKS. SAN. VE TIC'])->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereNotIn('cari_name',['BENMAR GIDA INS. TEKS. SAN. VE TIC'])->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #bb8a35">YEMEK GIDERI</td>
        <td style="background-color: #bb8a35">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #ffba09">YEMEK GIDERI</td>
        <td style="background-color: #ffba09">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff1d68">YEMEK GIDERI</td>
        <td style="background-color: #ff1d68">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #fff105">YEMEK GIDERI</td>
        <td style="background-color: #fff105">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #fab0ff">YEMEK GIDERI</td>
        <td style="background-color: #fab0ff">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #05faff">YEMEK GIDERI</td>
        <td style="background-color: #05faff">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">YEMEK GIDERI</td>
        <td style="background-color: #93d44f">  <?php
           $total = $data->where('stock_name','YEMEK %1')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK %1')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">YEMEK GIDERI</td>
        <td style="background-color: #93d44f">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">YEMEK GIDERI</td>
        <td style="background-color: #93d44f">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">YEMEK GIDERI</td>
        <td style="background-color: #93d44f">  <?php
            $total = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv = $data->where('stock_name','YEMEK GIDERI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?></td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #93d44f">

            <?php
          $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total');

             $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?>


        </td>

        <td style="background-color: #a1cbef">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #a1cbef"> <?php
          $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #bb8a35">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #bb8a35"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #ffba09">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #ffba09"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #ff1d68">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #ff1d68"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #fff105">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #fff105"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #fab0ff">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #fab0ff"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #05faff">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #05faff"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK %1','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK %1','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>
        <td style="background-color: #93d44f">DİĞER GİDERLER(KARGO,ARAÇ KİRA,KIRTASİYE , SUNUCU, YEMEK KART BEDELİ</td>
        <td style="background-color: #93d44f"> <?php
            $total = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.','BANKA ÇEKİLEN','KREDİ KARTI'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.','TELEFON GIIDE'])
                ->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total');

            $kdv = $data->where('type',0)->whereNotIn('stock_name',['YEMEK GIDERI','TELEFON GIIDERI %0'])->whereNotIn('cari_name',['BUSKI','YASAR AKTAS AKTAS OFSET MATBA','GELEN ÖDEME','VERGİ','Maaş','MaaşPrim','KİRA','TURKCELL ILETISIM HIZMETLERI A.S.'])
                ->whereNotIn('stock_code',['ELEKTRIK GIDE','INTERNET HZM.'])
                ->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('kdv_money');

            echo number_format($total+$kdv,2,',','.');
            ?></td>

    </tr>
    <tr>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',1)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Kredi Kartı</td>
        <td><?php
            echo number_format($data->where('cari_name',['KREDİ KARTI'])->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
    </tr>
    <tr>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',1)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',2)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',4)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',5)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',6)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',7)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',8)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',9)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',10)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',11)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
        <td>Banka Çekilen+Banka Masraf</td>
        <td><?php
            echo number_format($data->where('cari_name',['BANKA ÇEKİLEN'])->whereMonth('period_date',12)->whereYear('period_date',$year)->sum('total'),2,',','.')
            ?></td>
    </tr>
    <tr>
        <td style="background-color: #b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">

            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>

        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->whereNotIn('stock_name',['GELEN ÖDEME'])->sum('total');
            $kdv = $data->where('type',0)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv = $data->where('type',0)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
        <td style="background-color:#b8ff49">
            GİDER TOPLAM
        </td>
        <td  style="background-color:#b8ff49">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');

            $kdv = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            echo number_format($total+$kdv,2,',','.');
            ?>
        </td>
    </tr>
    <tr>
        <td>GR:</td>
        <td>
        </td>

        <td>GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td>

        </td>
        <td >GR:</td>
        <td>

        </td>
        <td >GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td>

        </td>
        <td >GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td >

        </td>
        <td >GR:</td>
        <td>

        </td>
        <td >GR:</td>
        <td >

        </td>
    </tr>
    <tr>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>

        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
             $gelir =  $hizmet + $kdv1;
             $total = 0;
             $kdv2 = 0;
             $total = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
             $kdv2 = $data->where('type',0)->whereMonth('period_date',3)->whereYear('period_date',$year)->sum('kdv_money');
              $gider = $total + $kdv2;

               echo number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
           $gelir =  $hizmet + $kdv1;

            $total = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');

           $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
        <td style="background-color: #ff0006">TOPLAM KAR:</td>
        <td style="background-color: #ff0006">
            <?php
            $hizmet = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv1 = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            $gelir =  $hizmet + $kdv1;
            $total = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            $kdv2 = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
            $gider = $total + $kdv2;
            echo     number_format($gelir - $gider,2,',','.');
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #fffff"; height="50px;"></td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,1)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>

        <td style="background-color: #a1cbef">GELEN ÖDEME</td>
        <td style="background-color: #a1cbef">
            <?php
            echo number_format($data->whereMonth('period_date' ,2)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #bb8a35">GELEN ÖDEME</td>
        <td style="background-color: #bb8a35">
            <?php
            echo number_format($data->whereMonth('period_date' ,3)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #ffba09">GELEN ÖDEME</td>
        <td style="background-color: #ffba09">
            <?php
            echo number_format($data->whereMonth('period_date' ,4)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #ff1d68">GELEN ÖDEME</td>
        <td style="background-color: #ff1d68">
            <?php
            echo number_format($data->whereMonth('period_date' ,5)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #fff105">GELEN ÖDEME</td>
        <td style="background-color: #fff105">
            <?php
            echo number_format($data->whereMonth('period_date' ,6)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #fab0ff">GELEN ÖDEME</td>
        <td style="background-color: #fab0ff">
            <?php
            echo number_format($data->whereMonth('period_date' ,7)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,8)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,9)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,10)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,11)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
        <td style="background-color: #93d44f">GELEN ÖDEME</td>
        <td style="background-color: #93d44f">
            <?php
            echo number_format($data->whereMonth('period_date' ,12)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,1)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;

                echo  number_format(($geleOdeme*100)/$gelir,2,',','.');
            }
            ?>

        </td>

        <td style="background-color: #a1cbef">TAHSİLAT ORAN</td>
        <td style="background-color: #a1cbef">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,2)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
                 $gelir = $hizmet+$kdv;
                echo  number_format(($geleOdeme*100)/$gelir,2,',','.');

            }
            ?>
        </td>
        <td style="background-color: #bb8a35">TAHSİLAT ORAN</td>
        <td style="background-color: #bb8a35">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,3)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #ffba09">TAHSİLAT ORAN</td>
        <td style="background-color: #ffba09">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,4)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #ff1d68">TAHSİLAT ORAN</td>
        <td style="background-color: #ff1d68">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,5)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #fff105">TAHSİLAT ORAN</td>
        <td style="background-color: #fff105">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,6)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #fab0ff">TAHSİLAT ORAN</td>
        <td style="background-color: #fab0ff">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,7)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,8)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,9)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,10)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,11)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f">TAHSİLAT ORAN</td>
        <td style="background-color: #93d44f">
            <?php
            $geleOdeme =  $data->whereMonth('period_date' ,12)->whereYear('period_date',$year)->where('stock_name','GELEN ÖDEME')->sum('total');
            if ($geleOdeme > 0){
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet+$kdv;
                echo  number_format($geleOdeme/$gelir,2,',','.');
            }
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                 $gelir_toplam = $kvkk+$egitim+$tesvik;

                 $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?>

        </td>

        <td style="background-color: #a1cbef">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #a1cbef">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #bb8a35">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #bb8a35">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date',3 )->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');


                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$tesvik,2,',','.');

            }

            ?></td>
        <td style="background-color: #ffba09">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #ffba09">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #ff1d68">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #ff1d68">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #fff105">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #fff105">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #fab0ff">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #fab0ff">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date', 9)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
        <td style="background-color: #93d44f">PERSONEL MAAŞ ORAN</td>
        <td style="background-color: #93d44f">  <?php

            $kvkk = $data->where('stock_name','DANISMANLIK HIZMETI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            if ($kvkk > 0){
                $egitim =  $data->where('stock_name','EGITIM HIZMETI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                $tesvik =   $data->where('stock_name','TESVIK DANISMANLIGI')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                $maaşprim = $data->where('stock_code','MaaşPrim')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                $maaştoplam = $data->where('stock_code','Maaş')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                 $gelir_toplam = $kvkk+$egitim+$tesvik;
                $gider = $maaşprim+$maaştoplam;
                echo number_format(($gider*100)/$gelir_toplam,2,',','.');

            }

            ?></td>
    </tr>
    <tr>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"> <?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>

        <td style="background-color: #a1cbef"> VERGİ ORAN</td>
        <td style="background-color: #a1cbef">
            <?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>





        </td>
        <td style="background-color: #bb8a35"> VERGİ ORAN</td>
        <td style="background-color: #bb8a35">
            <?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>

        </td>
        <td style="background-color: #ffba09"> VERGİ ORAN</td>
        <td style="background-color: #ffba09"> <?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #ff1d68"> VERGİ ORAN</td>
        <td style="background-color: #ff1d68"> <?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #fff105"> VERGİ ORAN</td>
        <td style="background-color: #fff105"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #fab0ff"> VERGİ ORAN</td>
        <td style="background-color: #fab0ff"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
        <td style="background-color: #93d44f"> VERGİ ORAN</td>
        <td style="background-color: #93d44f"><?php

            $hizmet = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
            if ($hizmet > 0){
                $kdv = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
                $gelir = $hizmet + $kdv;
                $total = $data->where('stock_code','VERGİ')->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                echo number_format(($total*100)/$gelir,2,',','.');
            }
            ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;


                $hizmet = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,1)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>


        </td>

        <td style="background-color: #a1cbef">GELİR/GİDER ORAN</td>
        <td style="background-color: #a1cbef">
            <?php

           $total = $data->where('type',0)->whereNotIn('cari_name',['GELEN ÖDEME'])->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');

            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total + $kdv;
                $hizmet = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('total');
                $gelirkdv = $data->where('type',1)->whereMonth('period_date' ,2)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $gelirkdv;
                $gider = $gidertoplam;

               echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #bb8a35">GELİR/GİDER ORAN</td>
        <td style="background-color: #bb8a35">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;


                $hizmet = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,3)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #ffba09">GELİR/GİDER ORAN</td>
        <td style="background-color: #ffba09">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;


                $hizmet = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,4)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #ff1d68">GELİR/GİDER ORAN</td>
        <td style="background-color: #ff1d68">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,5)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #fff105">GELİR/GİDER ORAN</td>
        <td style="background-color: #fff105">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,6)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam ;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #fab0ff">GELİR/GİDER ORAN</td>
        <td style="background-color: #fab0ff">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,7)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,8)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,9)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam ;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,10)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam ;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,11)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
        <td style="background-color: #93d44f">GELİR/GİDER ORAN</td>
        <td style="background-color: #93d44f">
            <?php

            $total = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
            if ($total > 0){
                $kdv = $data->where('type',0)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
                $gidertoplam = $total+$kdv;

                $hizmet = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('total');
                $kdv = $data->where('type',1)->whereMonth('period_date' ,12)->whereYear('period_date',$year)->sum('kdv_money');
                $gelirtoplam = $hizmet + $kdv;

                $gider = $gidertoplam;

                echo number_format(($gider*100)/$gelirtoplam,2,',','.');
            }

            ?>
        </td>
    </tr>
    </tbody>
</table>
</div>
<br>
<br>
<div align="center">
    <table  class="table" border="1" style="font-weight: bold">
        <thead>
        <tr>
            <td style="background-color: #ff00bc" colspan="2">Genel Durum </td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #ff00bc">Kesilen Fatura</td>
            <td>
                <?php
                $total = $data->where('type',1)->sum('total');
                $kdv=$data->where('type',1)->sum('kdv_money');
                echo number_format($total+$kdv,2,',','.');
                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Gider Toplam</td>
            <td>
                <?php
                $total = $data->where('type',0)->whereNotIn('stock_name',['GELEN ÖDEME'])->sum('total');
                $kdv=$data->where('type',0)->whereNotIn('stock_name',['GELEN ÖDEME'])->sum('kdv_money');
                echo number_format($total+$kdv,2,',','.');
                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Yapılan Tahsilat</td>
            <td>
                <?php
                echo  number_format($data->where('stock_name','GELEN ÖDEME')->sum('total'),2,',','.');
                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Kar</td>
            <td>
                <?php
                $total = $data->where('type',1)->sum('total');
                $kdv = $data->where('type',1)->sum('kdv_money');
                 $toplamgelir = $total+$kdv;


                $gidertotal = $data->where('type',0)->whereNotIn('stock_name',['GELEN ÖDEME'])->sum('total');
                $giderkdv = $data->where('type',0)->whereNotIn('stock_name',['GELEN ÖDEME'])->sum('kdv_money');
                 $toplamgider = $gidertotal+$giderkdv;

                echo  number_format($toplamgelir-$toplamgider,2,',','.');

                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Tahsilat Oranı</td>
            <td>

                <?php

                    $gelenOdeme =  $data->where('stock_name','GELEN ÖDEME')->sum('total');

                if ($gelenOdeme > 0){
                    $hizmet = $data->where('type',1)->sum('total');
                    $kdv = $data->where('type',1)->sum('kdv_money');
                    $gelir = $hizmet+$kdv;
                     $a = ($gelenOdeme*100)/$gelir;
                     echo number_format($a,2,',','.');
                }
                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Personel Maaş Oranı</td>
            <td>
                <?php


                       $gelir = $data->where('type',1)->sum('total');
                    $maaşprim = $data->where('stock_code','MaaşPrim')->sum('total');
                    $maaştoplam = $data->where('stock_code','Maaş')->sum('total');

                    $gider = $maaşprim+$maaştoplam;
                      $oran = ($gider*100)/$gelir;

                      echo number_format($oran,2,',','.');



                ?>

            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Vergi Oranı</td>
            <td>
                <?php

                $hizmet = $data->where('type',1)->sum('total');
                if ($hizmet > 0){
                    $kdv = $data->where('type',1)->sum('kdv_money');
                    $gelir = $hizmet + $kdv;
                    $total = $data->where('stock_code','VERGİ')->sum('total');
                    $oran = ($total*100)/$gelir;

                 echo  number_format($oran,2,',','.');

                }
                ?>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ff00bc">Gelir/Gider oranı</td>
            <td>
                <?php

                $total = $data->where('type',0)->whereNotIn('cari_name',['GELEN ÖDEME'])->sum('total');
                if ($total > 0){
                    $kdv = $data->where('type',0)->sum('kdv_money');
                    $gidertoplam = $total+$kdv;

                    $hizmet = $data->where('type',1)->sum('total');
                    $kdv = $data->where('type',1)->sum('kdv_money');
                    $gelirtoplam = $hizmet + $kdv;

                  $oran =  ($gider*100)/$gelirtoplam;

                  echo number_format($oran,2,',','.');
                }

                ?>
            </td>
        </tr>
        </tbody>

    </table>

</div>


