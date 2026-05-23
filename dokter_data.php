<table class="tabel-data">
    <thead>
        <tr>
            <th width="10%">No</th>
            <th width="35%">Nama Dokter</th>
            <th width="30%">Spesialis</th>
            <th colspan='2' width="25%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $getData = mysqli_query($konek,"SELECT * FROM dokter");
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_dokter'] ?></td>
                <td><?= $data['spesialis'] ?></td>
                <td style="border-right: 1px solid #e0e0e0; padding: 10px 15px;">
                    <a href="dokter_edit.php?id=<?= $data['id_dokter']; ?>" class="btn-edit">Edit</a>
                </td>
                <td style="padding: 10px 15px;">
                    <a href="dokter_hapus.php?id=<?= $data['id_dokter']; ?>" class="btn-hapus" onclick="return confirm('Hapus dokter ini?')">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>