<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
</head>
<body>
    <h2>Formulir Laporan Banjir</h2>

    <!-- Form mengarah ke route simpan laporan dengan metode POST -->
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf <!-- Wajib ada di Laravel untuk keamanan form -->

        <label>Nama Pelapor:</label><br>
        <input type="text" name="nama_pelapor" required><br><br>

        <label>Lokasi (Kecamatan):</label><br>
        <input type="text" name="lokasi" required><br><br>

        <label>Tinggi Genangan (cm):</label><br>
        <input type="number" name="tinggi_genangan" required><br><br>

        <label>Tanggal Kejadian:</label><br>
        <input type="date" name="tanggal_kejadian" required><br><br>

        <button type="submit">Kirim Laporan</button>
    </form>
</body>
</html>