<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>penjualan-Tambah Pegawai</title>
</head>

<body>
    <div class="row">
        <h3>Tambah Pegawai</h3>
        <table border="0" width="80%">

        </table>
        <form action="">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" placeholder="Alamat Pegawai" required></textarea>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="number" class="form-control" id="telepon" placeholder="Telepon Pegawai" required>
            </div>
            <div class="form-group">
                <label for="status">Status User</label>
                <select class="form-control" name="" id="status">
                    <option class="form-control" value="">Aktif</option>
                    <option class="form-control" value="">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username untuk pegawai</label>
                <input type="text" class="form-control" id="username" placeholder="Username untuk Pegawai" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success form-control" value="Simpan">
            </div>
        </form>
    </div>
</body>

</html>