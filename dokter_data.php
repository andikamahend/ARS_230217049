
<table class="tabel" border='1'>
    <thead>
            <tr>
                
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th colspan='2'>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $getData = mysqli_query($konek,"SELECT * FROM dokter"); //sesuaikan dgn tbl di DB Mu
            $no = 1;
            while($data = mysqli_fetch_array($getData)){
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_dokter'] ?></td>
                <td><?= $data['spesialis'] ?></td>
                    <td>
                        <a href="dokter_edit.php?id=<?= $data['id_dokter']; ?>"> Edit </a>
                    </td>
                     <td>
                        <a href="dokter_hapus.php?id=<?= $data['id_dokter']; ?>"> Hapus </a>
                    </td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </tbody>
</table>