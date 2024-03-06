<html>
<body>
    <p><a href="halamansiswa.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
    <h3>Tambah Data Siswa</h3>
    <form action="tambah_proses.php" method="post">
        <table cellpadding="3" cellspacing="0">
            <tr>
                <td>nis</td>
                <td>:</td>
                <td><input type="text" name="nis" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempa<html>

<body>
    <p><a href="halamansiswa.php">Data Siswa</a> / <a href="tambah.php">Tambah Data</a></p>
    <h3>Tambah Data Siswa</h3>
    <form action="tambah_proses.php" method="post">
        <table cellpadding="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                //required artinya harus diisi dan jika belum diisi tidak akan bisa dikirim/submit
                <td><input type="text" name="NIS" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30" required></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir" size="30" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" size="30" required></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="30" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <<td>:</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="RPL">RPL</option>
                            <option value="TEI">TEI</option>
                            <option value="KA">KA</option>
                            <option value="PBS">PBS</option>
                        </select>
            <tr>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>t_lahir" size="30" required></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir" size="30" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" size="30" required></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="30" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" size="30" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>