<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Banjir</title>
</head>
<body>
    <h2>Data Daftar Laporan Banjir</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Lokasi</th>
                <th>Tinggi Genangan</th>
                <th>Tanggal Kejadian</th>
            </tr>
        </thead>
        <tbody>
    @foreach($laporans as $index => $laporan)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $laporan->nama_pelapor }}</td>
        <td>{{ $laporan->lokasi }}</td>
        <td>{{ $laporan->tinggi_genangan }} cm</td>
        <td>{{ $laporan->tanggal_kejadian }}</td>
    </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>