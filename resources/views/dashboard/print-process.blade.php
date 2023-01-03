<!DOCTYPE html>
<html>

<head>
    <title>RATU MAKMUR PLASTIK INDO</title>
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <center>
        <h1>LAPORAN DATA BARANG</h1>
    </center>
    <table border="1" style="width: 100%" class="table text-center table-dark">
        <tr>
            <th scope="col">KODE BARANG</th>
            <th scope="col">NAMA BARANG</th>
            <th scope="col">KUANTITAS (KARUNG)</th>
            <th scope="col">SIZE BARANG</th>
            <th scope="col">HARGA BARANG</th>
            <th scope="col">TANGGAL MASUK</th>
        </tr>
        @foreach($data as $datas)
        <tr>
            <th scope="row">{{ $datas->Kd_Barang }}</th>
            <td>{{ $datas->Nm_Barang }}</td>
            <td>{{ $datas->Kuantitas }}</td>
            <td>{{ $datas->Sz_Barang }}</td>
            <td>{{ $datas->Hg_Barang }}</td>
            <td>{{ $datas->Tgl_Masuk }}</td>
        </tr>
        @endforeach
    </table>
    <h5>JUMLAH BARANG: {{ $count }}</h5>

    <style>
        @media print {
            @page {
                size: landscape
            }
        }
    </style>
    <script>
        window.print();
    </script>
</body>

</html>