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
            <legend>Bangun Datar</legend>
                <form action="" method="POST">
                    <table>

                        <tr>
                            <td>Masukan Bilangan 1</td>
                            <td>:</td>
                            <td><input type="number" name="angka1"></td>
                        </tr>

                        <tr>
                            <td>Masukan Bilangan 2</td>
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

    public function jajar_genjang(){
        $luas = $this->bil1 * $this->bil2;
        echo "<tr><td>Luas jajar genjang</td> <td>:</td>" . "<td>$luas</td>" ."</tr>";
    }

    public function belah_ketupat(){
        $luas = 0.5 * $this->bil1 * $this->bil2;;
        echo "<tr><td>Luas belah ketupat</td> <td>:</td>" . "<td>$luas</td>" ."</tr>";
    }

    public function layang_layang(){
        $luas = 0.5 * $this->bil1 * $this->bil2;
        echo "<tr><td>Luas layang-layang</td> <td>:</td>" . "<td>$luas</td>" ."</tr>";
    }

}
$hasil = new bangun_datar($angka1,$angka2);
$hasil->jajar_genjang();
$hasil->belah_ketupat();
$hasil->layang_layang();
}
?>
</body>
</html>
