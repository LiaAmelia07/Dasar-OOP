<?php
 //Cara penulisan class dan property OOP PHP - www.malasngoding.com
class kucing{
    // property oop
    var $kaki = 4;
    var $mulut= 1;
    var $ekor = 1;
    public $warna = 'Putih';

    // Method Desclaration 
    public function berjalan($kaki) {
        return 'Kucing berjalan dengan '. $kaki . ' Kaki';
    }
}
$kucing = new kucing ();
echo $kucing -> berjalan (4);
echo '<br>';
echo $kucing -> berjalan (3);
?>