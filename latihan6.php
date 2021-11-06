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
        <table width=300px> 
            <form action="" method="POST">
                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td colspan=3 align=center>Program Memilih Bulan</td>
                </tr>

                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td>Pilih Bulan</td>
                    <td>:</td>
                    <td><select name = "bulan">
                            <option value = "Januari">Januari</option>
                            <option value = "Februari">Februari</option>
                            <option value = "Maret">Maret</option>
                            <option value = "April">April</option>
                            <option value = "Mei">Mei</option>
                            <option value = "Juni">Juni</option>
                            <option value = "Juli">Juli</option>
                            <option value = "Agustus">Agustus</option>
                            <option value = "September">September</option>
                            <option value = "Oktober">Oktober</option>
                            <option value = "November">November</option>
                            <option value = "Desember">Desember</option>
                            <option value = "Bulan Sabit🗿">Bulan Sabit🗿</option>
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
        $bulan = @$_POST['bulan'];
        class hasil{

            protected $bulan;

            public function tampung($bulan){
                $this->bulan = $bulan;
            }

            public function out(){
                switch ($this->bulan) {
                    case "Januari" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Februari" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Maret" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "April" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Mei" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Juni" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Juli" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Agustus" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "September" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Oktober" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "November" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    case "Desember" :
                        echo "Anda Memilih Bulan " . $this->bulan . "<br>";
                    break;

                    default :
                        echo "Bulan tidak ditemukan 🗿";
                }
            }
        }
        $output = new hasil();
        $output->tampung($bulan);
        $output->out();
    }
?>