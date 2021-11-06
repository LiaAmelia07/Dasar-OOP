<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Waroeng's</title>
</head>
<body>
<fieldset>
    <table align=center>
            
            <tr>
                <td colspan=3><hr></td>
            </tr>

            <tr>
                <td colspan=3 align=center><h3><i>Waroeng's Murah Serba Ada</i></h3></td>
            </tr>

            <tr>
                <td colspan=3><hr></td>
            </tr>

            <tr>
                <td>Sedia</td>
                <td>:</td>
                <td></td>
            </tr>

            <tr>
                <td>1. Beras Putih</td>
                <td>:</td>
                <td>Rp9.000 / kg</td>
            </tr>

            <tr>
                <td>2. Gula Pasir Putih</td>
                <td>:</td>
                <td>Rp12.000 / kg</td>
            </tr>

            <tr>
                <td>3. Telur Ayam</td>
                <td>:</td>
                <td>Rp17.000 / kg</td>
            </tr>

            <tr>
                <td>4. Minyak Goreng</td>
                <td>:</td>
                <td>Rp20.000 / kg</td>
            </tr>

            <tr>
                <td>5. Tepung Terigu</td>
                <td>:</td>
                <td>Rp5.000 / kg</td>
            </tr>

            <tr>
                <td colspan=3><hr></td>
            </tr>

            <tr>
                <td colspan=3 align=center>↓ Beli Disini ↓</td>
            </tr>

            <tr>
                <td colspan=3><hr></td>
            </tr>

            <form action="" method="POST">

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                    <tr>
                        <td colspan=3 align=center><h3><i>Pemesanan</i></h3></td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                    <tr>
                        <td>Jumlah Belanjaan Beras</td>
                        <td>:</td>
                        <td><input type = "number" name="beras"> Kg</td>
                    </tr>

                    <tr>
                        <td>Jumlah Belanjaan Gula</td>
                        <td>:</td>
                        <td><input type = "number" name="gula"> Kg</td>
                    </tr>

                    <tr>
                        <td>Jumlah Belanjaan Telur</td>
                        <td>:</td>
                        <td><input type = "number" name="telur"> Kg</td>
                    </tr>

                    <tr>
                        <td>Jumlah Belanjaan Minyak</td>
                        <td>:</td>
                        <td><input type = "number" name="minyak"> Kg</td>
                    </tr>

                    <tr>
                        <td>Jumlah Belanjaan Tepung</td>
                        <td>:</td>
                        <td><input type = "number" name="tepung"> Kg</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type = "submit" name="hitung" value="Hitung Belanjaan"></td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                    <tr>
                        <td colspan=3 align=center>↓ Bayar Disini ↓</td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

                    <tr>
                        <td colspan=3 align=center><h3><i>Pembayaran</i></h3></td>
                    </tr>

                    <tr>
                        <td colspan=3><hr></td>
                    </tr>

            </form>

            <?php 
                if(isset($_POST['hitung'])){
                    $beras  = @$_POST['beras'];
                    $gula   = @$_POST['gula'];
                    $telur  = @$_POST['telur'];
                    $minyak = @$_POST['minyak'];
                    $tepung = @$_POST['tepung'];

                    class hasil{
                        public function __construct($beras,$gula,$telur,$minyak,$tepung){
                            $this->brg1=$beras;
                            $this->brg2=$gula;
                            $this->brg3=$telur;
                            $this->brg4=$minyak;
                            $this->brg5=$tepung;
                        }
                        public function cetak_hasil(){
                            $totalbrg1 = $this->brg1 * 9000;
                            $totalbrg2 = $this->brg2 * 12000;
                            $totalbrg3 = $this->brg3 * 17000;
                            $totalbrg4 = $this->brg4 * 20000;
                            $totalbrg5 = $this->brg5 * 5000;
                            $totalbelanja = $totalbrg1 + $totalbrg2 + $totalbrg3 + $totalbrg4 + $totalbrg5;
                            echo "
                                <tr>
                                    <td>Nama Barang</td>
                                    <td>Jumlah Beli</td>
                                    <td>&nbsp Harga</td>
                                </tr>";

                            echo "
                                <tr>
                                    <td>1. Beras</td>
                                    <td>". $this->brg1 . " kg</td>
                                    <td>&nbsp $totalbrg1</td>
                                </tr>";

                            echo "
                                <tr>
                                    <td>2. Gula Pasir</td>
                                    <td>". $this->brg2 . " kg</td>
                                    <td>&nbsp $totalbrg2</td>
                                </tr>";
                            
                            echo "
                                <tr>
                                    <td>3. Telur</td>
                                    <td>". $this->brg3 . " kg</td>
                                    <td>&nbsp $totalbrg3</td>
                                </tr>";

                            echo "
                                <tr>
                                    <td>4. Minyak Goreng</td>
                                    <td>". $this->brg4 . " kg</td>
                                    <td>&nbsp $totalbrg4</td>
                                </tr>";

                            echo "
                                <tr>
                                    <td>5. Tepung Terigu</td>
                                    <td>". $this->brg5 . " kg</td>
                                    <td>&nbsp $totalbrg5</td>
                                </tr>";

                            echo "<tr>
                                <td colspan=3><hr></td>
                            </tr>";

                            echo "
                                <tr>
                                    <td>Total Belanja</td>
                                    <td></td>
                                    <td>&nbsp Rp. $totalbelanja-,</td>
                                </tr>";
                            if ($totalbelanja > 100000){
                                $diskon = $totalbelanja * 30 / 100;
                                $totalakhir = $totalbelanja - $diskon;
                                echo "
                                    <tr>
                                        <td>Diskon</td>
                                        <td></td>
                                        <td>&nbsp Rp. $diskon-,</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Total Akhir</td>
                                        <td></td>
                                        <td>&nbsp Rp. $totalakhir-,</td>
                                    </tr>";
                            }
                            else{
                                echo "
                                    <tr>
                                        <td>Diskon</td>
                                        <td></td>
                                        <td>&nbsp 0</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Total Akhir</td>
                                        <td></td>
                                        <td>&nbsp Rp. $totalbelanja-,</td>
                                    </tr>";
                            }
                        }
                        public function __destruct(){
                            echo "<center><h3><i>Terimakasih Sudah Berbelanja</i></h3></center>";
                        }
                    }
                    $output = new hasil($beras,$gula,$telur,$minyak,$tepung);
                    $output->cetak_hasil();

                ?>
                        <form action="" method="POST">
                            <tr>
                                <td>Bayar</td>
                                <td></td>
                                <td>&nbsp <input type='number' name='uang'></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>&nbsp <input type='submit' name='bayar' value='Bayar'></td>
                            </tr>
                        </form>
                <?php
                }
                if(isset($_POST['bayar'])){
                    $uang  = @$_POST['uang'];
                        if(84000 < $uang) {
                        $total = 84000;
                        $kembali = $uang - 84000;
                            echo "
                                <tr>
                                    <td>Total Belanja</td>
                                    <td></td>
                                    <td>&nbsp Rp. $total-,</td>
                                </tr>";
                            echo "
                                <tr>
                                    <td>Uang Anda</td>
                                    <td></td>
                                    <td>&nbsp Rp. $uang-,</td>
                                </tr>";
                            echo "
                                <tr>
                                    <td>Kembalian Anda</td>
                                    <td></td>
                                    <td>&nbsp Rp. $kembali-,</td>
                                </tr>";
                        }  
                        elseif($total == $uang) {
                            $total = 80000;
                                echo "
                                    <tr>
                                        <td>Total Belanja</td>
                                        <td></td>
                                        <td>&nbsp Rp. $total-,</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Uang Anda</td>
                                        <td></td>
                                        <td>&nbsp Rp. $uang-,</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Uang Anda Pas!</td>
                                    </tr>";
                            }   
                        elseif($total > $uang) {
                            $total = 120000;
                            $total1 = 84000;
                            $kurang = 84000 - $uang;
                                echo "
                                    <tr>
                                        <td>Total Belanja</td>
                                        <td></td>
                                        <td>&nbsp Rp. $total1-,</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Uang Anda</td>
                                        <td></td>
                                        <td>&nbsp Rp. $uang-,</td>
                                    </tr>";
                                echo "
                                    <tr>
                                        <td>Uang Anda Kurang Sebesar Rp. $kurang-,</td>
                                    </tr>";
                            }           
                        }
                    ?>
                </table>
        </fieldset>
    </body>
</html>