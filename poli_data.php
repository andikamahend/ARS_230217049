
<table class="tabel" border='1'>
    <thead>
            <tr>
                
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th colspan='2'>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $getData = mysqli_query($konek,"SELECT * FROM klinik"); //sesuaikan dgn tbl di DB Mu
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_klinik'] ?></td>
                    <td>
                        <a href="poli_edit.php?id=<?= $data['id_klinik']; ?>"> Edit </a>
                    </td>
                     <td>
                        <a href="poli_hapus.php?id=<?= $data['id_klinik']; ?>"> Hapus </a>
                    </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>