<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Penjualan Sepatu BLUEES</title>
</head>
<body onload="window.print()">
<table align="center">
        <tr>
            <th>Sepatu BLUEES</th>
        </tr>
        <tr>
            <th>Struk Penjualan Sepatu Bluees</th>
        </tr>
        <tr align="right">
            <td>Tanggal : <?php echo date('Y/m/d');?></td>
        </tr>
        <tr align="center"><th><hr></th></tr>
        <tr>
            <td colspan="3">Kasir :{{$penjualan->user->nama_kasir}}</td>
        </tr>
        <tr>
            <td colspan="3">Pembeli : {{$penjualan->member->nama_member}}</td>
        </tr>
        <tr>
            <td colspan="3">Nama Sepatu : {{$penjualan->sepatu->nama_sepatu}}</td>
        </tr>
        <tr>
            <td colspan="3">Tanggal Transaksi : {{$penjualan->tgl_bayar}}</td>
        </tr>
        <tr>
            <td colspan="3">Jumlah Bayar : Rp.{{number_format($penjualan->jumlah_bayar),2,','.','}}</td>
        </tr>
        <br>
        <tr align="center"><th><hr></th></tr>

        <tr>
            <th align="center">----TERIMAKASIH----</th>
        </tr>
        
</table>
</body>
</html>