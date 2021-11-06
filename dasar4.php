<?php
class Suhu {
    public $celcius;
    function __construct($celcius){
        $this->celcius=$celcius;
            echo "<h1>Konversi Suhu dari Celcius</h1>";
            echo "suhu dalam celcius = $celcius derajat<br>";
        }

        public function kelvin(){
            $kelvin=$this->celcius+273.15;
            echo "<br/><b>suhu dalam kelvin = $kelvin derajat</b><br/>";
        }
        
        public function fahrenheit(){
            $fahrenheit=$this->celcius*1.8+32;
            echo "<br/><b>suhu dalam fahrenheit = $fahrenheit derajat</b><br/>";
        }

        function __destruct(){
            echo "<br><i>Sekian konfersi suhu yang bisa dilakukan</i>";
        }
    }
    $suhu=New Suhu(56);
    $suhu->kelvin();
    $suhu->fahrenheit();

?>