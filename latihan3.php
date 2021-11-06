<?php
//Menghitung Luas jajarGenjang
echo "Menghitung Luas jajarGenjang<br>";
echo "<br>";
class jajargenjang {
    public $alas;
    public $tinggi;
    function __construct($tinggi,$alas) {
        $this->tinggi=$tinggi;
        $this->alas=$alas;
    }
    function Luas(){
    $Luas=$this->tinggi*$this->alas;
    echo "Tinggi Jajargenjang = ".$this->tinggi."<br/>";
    echo "Alas Jajargenjang = ".$this->alas."<br/>";
    echo "Luas Jajargenjang = $Luas</br>";
    echo "<br>";

    }
}
$jajargenjang=New jajargenjang(200,500);
$jajargenjang->Luas();


//Menghitung Luas Belah Ketupat
echo"Menghitung Luas Belah Ketupat<br>";
echo "<br>";
class Belah_Ketupat {
    public $D1;
    public $D2;
    function __construct($D1,$D2) {
        $this->D1=$D1;
        $this->D2=$D2;
    }
    function Luas(){
    $Luas=$this->D1*$this->D2/2;
    echo "D1 Belah Ketupat = ".$this->D1."<br/>";
    echo "D2 Belah Ketupat = ".$this->D2."<br/>";
    echo "Luas Belah Ketupat = $Luas <br/>";
    echo "<br>";
    }
}
$Belah_Ketupat=New Belah_Ketupat(50,40);
$Belah_Ketupat->Luas();


//Menghitung Luas Layang-Layang
echo"Menghitung Luas Layang-Layang<br>";
echo "<br>";
class Layang_layang {
    public $D1;
    public $D2;
    function __construct($D1,$D2) {
        $this->D1=$D1;
        $this->D2=$D2;
    }
    function Luas(){
    $Luas=$this->D1*$this->D2/2;
    echo "D1 Layang-Layang = ".$this->D1."<br/>";
    echo "D2 Layang-Layang = ".$this->D2."<br/>";
    echo "Luas Layang-Layang = $Luas</br>";
    echo "<br>";
    }
}
$Layang_Layang=New Belah_Ketupat(50,40);
$Layang_Layang->Luas();

?>