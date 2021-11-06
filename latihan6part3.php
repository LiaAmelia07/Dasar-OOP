<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 6 </title>
</head>
<body>
    <center>
        <table width=300px> 
            <form action="" method="POST">
                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td colspan=3 align=center>Program Memasukan Biodata</td>
                </tr>

                <tr>
                    <td colspan=3><hr></td>
                </tr>

                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type = "text" name="nama"></td>
                </tr>

                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type = "text" name="umur"></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                    <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name = "agama" value= "agama">
                    <option value = "">==Pilih Agama==</option>
                    <option value = "Islam">Islam</option>
                    <option value = "Kristen">Kristen</option>
                    <option value = "Budha">Budha</option>
                    <option value = "Hindu">Hindu</option>
                    <option value = "Konghucu">Khonghucu</option>
                    </select> </td>
                </tr>

                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><input type = "radio" name = "warga" value = "WNA">WNA
                    <input type = "radio" name = "warga" value = "WNI">WNI</td>
                </tr>

                <tr>
                    <td>Tempat Tinggal</td>
                    <td>:</td>
                    <td><input type = "text" name="tinggal"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name = "alamat"></textarea></td>
                </tr>


                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="pilih" value="Mulai">
                        <input type="reset" value="reset"></td>
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
        $nama = @$_POST['nama'];
        $umur = @$_POST['umur'];
        $jk = @$_POST['jk'];
        $agama = @$_POST['agama'];
        $warga = @$_POST['warga'];
        $tinggal = @$_POST['tinggal'];
        $alamat = @$_POST['alamat'];
        class hasil{

            public function __construct($nama,$umur,$jk,$agama,$warga,$tinggal,$alamat){
                $this->nama=$nama;
                $this->umur=$umur;
                $this->jk=$jk;
                $this->agama=$agama;
                $this->warga=$warga;
                $this->tinggal=$tinggal;
                $this->alamat=$alamat;

            }
            public function cetak_hasil(){
                $nama = $this->nama;
                $umur = $this->umur;
                $jk = $this->jk;
                $agama = $this->agama;
                $warga = $this->warga;
                $tinggal = $this->tinggal;
                $alamat = $this->alamat;

                echo "
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>". $this->nama . "</td>
                    </tr>";

                echo "
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td>". $this->umur ." Tahun</td>
                    </tr>";
                
                echo "
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>". $this->jk . "</td>
                    </tr>";

                echo "
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>". $this->agama . "</td>
                    </tr>";

                echo "
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>". $this->warga . "</td>
                    </tr>";

                echo "
                    <tr>
                        <td>Tempat Tinggal</td>
                        <td>:</td>
                        <td>". $this->tinggal . "</td>
                    </tr>";

                echo "
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>". $this->alamat . "</td>
                    </tr>";
            
                }
            }
            $output = new hasil($nama,$umur,$jk,$agama,$warga,$tinggal,$alamat);
            $output->cetak_hasil();  
        }
?>

</center>