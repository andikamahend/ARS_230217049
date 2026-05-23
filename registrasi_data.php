<table class="tabel-data">
    <thead>
        <tr>
            <th>No</th>
            <th>No RM</th>
            <th>Nama Pasien</th>
            <th>Poliklinik</th>
            <th>Dokter</th>
            <th>Tgl Pendaftaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            // Join 4 tabel untuk mendapatkan nama-nama asli
            $query = "SELECT p.no_reg, p.no_rm, ps.nama_pasien, k.nama_klinik, d.nama_dokter, p.tgl_pendaftaran 
                      FROM pendaftaran p 
                      LEFT JOIN pasien ps ON p.no_rm = ps.no_rm 
                      LEFT JOIN klinik k ON p.id_poli = k.id_klinik 
                      LEFT JOIN dokter d ON p.id_dokter = d.id_dokter 
                      ORDER BY p.tgl_pendaftaran DESC";
            
            $getData = mysqli_query($konek, $query);
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['no_rm'] ?></td>
                <td><?= $data['nama_pasien'] ?></td>
                <td><?= $data['nama_klinik'] ?></td>
                <td><?= $data['nama_dokter'] ?></td>
                <td><?= $data['tgl_pendaftaran'] ?></td>
                <td>
                    <a href="registrasi_edit.php?id=<?= $data['no_reg']; ?>" class="btn-edit">Edit</a>
                    <a href="registrasi_hapus.php?id=<?= $data['no_reg']; ?>" class="btn-hapus" onclick="return confirm('Hapus pendaftaran ini?')">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>