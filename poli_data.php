<table class="tabel-data">
    <thead>
        <tr>
            <th width="10%">No</th>
            <th width="60%">Nama Poli</th>
            <th colspan='2' width="30%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $getData = mysqli_query($konek,"SELECT * FROM klinik");
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_klinik'] ?></td>
                <td style="border-right: 1px solid #e0e0e0; padding: 10px 15px;">
                    <a href="poli_edit.php?id=<?= $data['id_klinik']; ?>" class="btn-edit">Edit</a>
                </td>
                <td style="padding: 10px 15px;">
                    <a href="poli_hapus.php?id=<?= $data['id_klinik']; ?>" class="btn-hapus" onclick="return confirm('Hapus poli ini?')">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>