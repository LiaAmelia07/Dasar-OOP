<?php
class Motor {
    public function mulai(){
        echo "Mulai...";
    }

    public function __destruct(){
        echo "Selesai...";
    }
}

$motor1 = new Motor();
$motor1->mulai();

?>