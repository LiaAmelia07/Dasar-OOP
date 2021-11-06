<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
<fieldset>
    <legend>Menampilkan Data Kucing</legend>
        <form action ="" method="POST">
            <table>
            <tr>
                <td>Nama Kucing</td>
                <td>:</td> 
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Jumlah kaki</td>
                <td>:</td> 
                <td><input type="number" name="kaki" ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" value = "Simpan" name = "simpan"></td>
            </tr>
            <tr>
                <td colspan=3><hr></td>
            </tr>

            <?php
            if(isset($_POST['simpan'])){
                $nama = @$_POST['nama'];
                $kaki = @$_POST['kaki'];

                echo "<tr> <td>Nama Kucing</td> <td>:</td> " . "<td>$nama</td>" . "</tr>";
                echo "<tr> <td>Jumlah kaki</td> <td>:</td> <td>$kaki</td></tr>";
                echo "<tr><td colspan =3>";

                class kucing {
                    public $kaki;
                    public function berjalan ($kaki){
                        if ($kaki > 4){
                            $a = "Cingkled";
                            return 'Kucing kamu berjalan dengan ' . $kaki . ' Kaki, sepertinya : ' .$a;
                        }
                        elseif ($kaki == 4){
                            $b = "Normal";
                            return 'Kucing kamu berjalan dengan ' . $kaki . ' Kaki, sepertinya : ' .$b;
                        }
                        elseif ($kaki < 4){
                            $c = "Siluman";
                            return 'Kucing kamu berjalan dengan ' . $kaki . ' Kaki, sepertinya : ' .$c;
                        }
                    }
                }
                $kucingnormal= new kucing();
                echo $kucingnormal -> berjalan ($kaki);
                echo "</td> </tr>";
            }
            ?>
            </table>
        </form>
    </legend>
</fieldset>
</body>
</html>

