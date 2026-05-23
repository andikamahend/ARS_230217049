<table class="tabel-data">
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
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
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
                
                <td style="border-right: 1px solid #e0e0e0; padding: 10px 15px; width: 80px;">
                    <a href="pasien_edit.php?id=<?= $data['no_rm']; ?>" class="btn-edit">Edit</a>
                </td>
                
                <td style="padding: 10px 15px; width: 80px;">
                    <a href="pasien_hapus.php?id=<?= $data['no_rm']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>