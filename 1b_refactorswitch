<?php

interface SegiEnam{
    public function hitung($sisi);
}

    
class luas implements persegi{
    public function hitung($sisi){
        $hasil =*$sisi*$sisi;
        Echo "Luas persegi adalah : ". $hasil;
    }
}
   


class keliling implements persegi{
    public function hitung($sisi){  
        $hasil =4*$sisi;
        Echo "Keliling persegi adalah : ". $hasil;
    }
    
}

    class hitung
    {
        public static function pilihan($pilihan){
        switch ($pilihan) {
            case 'luas':
                return new luas;
                break;
            case 'keliling':
                return new keliling;
                break;
            default:
                return FALSE;
        }
    }
}

$sisi=20;
hitung::pilihan('luas')->hitung($sisi);
echo '<br>';
hitung::pilihan('keliling')->hitung($sisi);

?>
