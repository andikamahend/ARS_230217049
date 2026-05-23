<table class="tabel" border='1' cellpadding='5' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>No RM</th>
            <th>Nama Pasien</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th colspan='2'>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            // Mengambil semua data dari tabel pasien
            $getData = mysqli_query($konek,"SELECT * FROM pasien"); 
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['no_rm'] ?></td>
                <td><?= $data['nama_pasien'] ?></td>
                <td><?= $data['Tempat_Lahir'] ?></td>
                <td><?= $data['Tgl_Lahir'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['jenkel'] ?></td>
                <td><?= $data['agama'] ?></td>
                <td>
                    <a href="pasien_edit.php?id=<?= $data['no_rm']; ?>"> Edit </a>
                </td>
                <td>
                    <a href="pasien_hapus.php?id=<?= $data['no_rm']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"> Hapus </a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>