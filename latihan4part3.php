<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
            <legend>Belah Ketupat</legend>
                <form action="" method="POST">
                    <table>

                        <tr>
                            <td>Masukan D1</td>
                            <td>:</td>
                            <td><input type="number" name="angka1"></td>
                        </tr>

                        <tr>
                            <td>Masukan D2</td>
                            <td>:</td>
                            <td><input type="number" name="angka2"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="simpan"></td>
                         </tr>
                    <?php 
                    if(isset($_POST['simpan'])){

                        $angka1 = @$_POST['angka1'];
                        $angka2 = @$_POST['angka2'];
                        class bangun_datar{

                        public function __construct($angka1,$angka2){
                            $this->bil1=$angka1;
                            $this->bil2=$angka2;
                        }
                        
                        public function belah_ketupat(){
                            $luas = $this->bil1 * $this->bil2/2;
                            echo "<tr><td>Rumus Belah Ketupat</td> <td>:</td>" . "<td>(Diagonal 1 x Diagonal 2) / 2</td>" ."</tr>";
                            echo "<tr><td>D1 Belah ketupat</td> <td>:</td>" . "<td>$this->bil1</td>" ."</tr>";
                            echo "<tr><td>D2 Belah Ketupat</td> <td>:</td>" . "<td>$this->bil2</td>" ."</tr>";
                            echo "<tr><td>Luas Belah Ketupat</td> <td>:</td>" . "<td>$luas</td>" ."</tr>";
                        }

                    }
                    $hasil = new bangun_datar($angka1,$angka2);
                    $hasil->belah_ketupat();
                    }
                    ?>
            </table>
        </form> 
    </fieldset>
</body>
</html>
