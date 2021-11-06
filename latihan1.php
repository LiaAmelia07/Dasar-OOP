<?php
class kucing {
    public $kaki;
    //public $ekor = 1;
    //public $warna = 'putih';
    //public $mulut = 1;

    public function berjalan ($kaki){
        return 'Kucing berjalan dengan ' .$kaki. ' kaki';
    }
}
$kucingnormal= new kucing();
echo $kucingnormal -> berjalan (4);

?>