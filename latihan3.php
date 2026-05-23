
<?php
// perulangan dengan FOR

    for($a = 1; $a <=10; $a++){
        echo "MEISYA"."<br>";
    }

?>
<hr>
<?php
    $pasien=[
        [
            "norm" => "001",
            "namaPasien" => "meisya",
            "alamat" => "sukoharjo",
        ],
        [
            "norm" => "002",
            "namaPasien" => "putri",
            "alamat" => "polokarto",
        ]
    ]
?>

<table border='1' cellspacing='0' cellpadding='4'>
    <thead>
        <tr>
            <th>No</th>
            <th>No RM</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($pasien as $data){
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$data['norm']."</td>";
                echo "<td>".$data['namaPasien']."</td>";
                echo "<td>".$data['alamat']."</td>";

            $no++;
            }
        
        ?>
    </tbody>
</table>

