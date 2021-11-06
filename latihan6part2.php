<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body>
<center>
        <table> 
            <form action="" method="POST">
                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td colspan=3 align=center>Program Memilih Jurusan</td>
                </tr>

                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td>Pilih Jurusan</td>
                    <td>:</td>
                    <td><select name = "jurusan">
                            <option value = "==Pilih Jurusan==">==Pilih Jurusan==</option>
                            <option value = "Rpl">Rekayasa Perangkat Lunak</option>
                            <option value = "Tkj">Teknik Komputer dan Jaringan</option>
                            <option value = "Tbsm">Teknik Bisnis Sepeda Motor</option>
                            <option value = "Tkro">Teknik Kendaraan Ringan dan Otomotif</option>
                            <option value = "Tabog">Tata Boga</option>
                            <option value = "Tabus">Tata Busana</option>
                            <option value = "Akuntansi">Akuntansi</option>
                            <option value = "Farmasi">Farmasi</option>
                            <option value = "Animasi">Animasi</option>
                            <option value = "Multimedia">Multimedia</option>
                            <option value = "Pengangguran">Pengangguran</option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="pilih" value="Mulai"></td>
                </tr>

                <tr>
                    <td colspan=3><hr></td>
                </tr>

            </form>
        </table>
    </body>
</html>

<?php 
    if (isset($_POST['pilih'])){
        $jurusan = @$_POST['jurusan'];
        class hasil{

            protected $jurusan;

            public function tampung($jurusan){
                $this->jurusan = $jurusan;
            }

            public function out(){
                switch ($this->jurusan) {
                    case "Rpl" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Rekayasa Perangkat Lunak)<br>";
                    break;

                    case "Tkj" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Teknik Komputer dan Jaringan)<br>";
                    break;

                    case "Tbsm" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Teknik Bisnis Sepeda Motor)<br>";
                    break;

                    case "Tkro" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Teknik Kendaraan Ringan dan Otomotif)<br>";
                    break;

                    case "Tabog" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Tata Boga)<br>";
                    break;

                    case "Tabus" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . " (Tata Busana)<br>";
                    break;

                    case "Akuntansi" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . "<br>";
                    break;

                    case "Farmasi" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . "<br>";
                    break;

                    case "Animasi" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . "<br>";
                    break;

                    case "Multimedia" :
                        echo "Anda Memilih Jurusan " . $this->jurusan . "<br>";
                    break;

                    default :
                        echo "Jurusan tidak ditemukan 🗿";
                }
            }
        }
        $output = new hasil();
        $output->tampung($jurusan);
        $output->out();
    }
?>

</center>