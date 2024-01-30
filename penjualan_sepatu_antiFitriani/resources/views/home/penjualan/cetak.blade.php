<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <h2><center>Laporan Penjualan Sepatu Bluees</center></h2>
    <br>
</head>
<body onload="print.window()">
<center>
<table border='1'>
            <thead>
                <tr>
                    <th scope="col">Id penjualan</th>
                    <th scope="col">Id Kasir</th>
                    <th scope="col">Id Member</th>
                    <th scope="col">Id Sepatu</th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Jumlah Bayar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $p)
                    <tr class="">
                    <td scope="row">{{$p->id}}</td>
                    <td>{{$p->id_kasir}}- {{$p->user->nama_kasir}}</td>
                    <td>{{$p->id_member}}- {{$p->member->nama_member}}</td>
                    <td>{{$p->id_sepatu}}- {{$p->sepatu->nama_sepatu}}</td>
                    <td>{{$p->tgl_bayar}}</td>
                    <td>Rp.{{number_format($p->jumlah_bayar),2,','.','}}</td>
                @endforeach
                    </tr>
              </tbody>
</table>
<br>
<br>                                
    
</center>
<div class="kotak" style="margin-left:940px">
    <tr>
        <td><b>Bandung,............</b></td>
        <br>
        <br>
        <br>
        <br>
        <td><b>Sepatu Bluees</b></td>
    </tr>
</div>

</body>
</html>