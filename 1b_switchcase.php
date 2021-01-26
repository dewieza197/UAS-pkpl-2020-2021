<?php
class persegi{
    
   public function luaspersegi($sisi){
        Echo "Luas persegi adalah : ". $this->$sisi*$sisi;
    }

    public function kelilingpersegi($sisi){
        Echo "Keliling persegi adalah : ". 4*$sisi;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function hitung($pilihan, $sisi)
    {
        switch ($pilihan) {
            case 'luas':
                $this->luaspersegi($sisi);
                break;
            case 'keliling':
                $this->kelilingpersegi($sisi);
                break;
            default:
            $this->noChoice($sisi);
        }
    }
}

$sisi=20;
$pilihan = new persegi;
$pilihan->hitung('keliling',$sisi);

?>
