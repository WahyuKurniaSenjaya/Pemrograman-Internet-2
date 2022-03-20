<?php
class laptop
{
    public $merk, $spesifikasi, $warna, $harga;

    public function __construct($merk, $spesifikasi, $warna, $harga)
    {
        $this->merk = $merk;
        $this->spesifikasi = $spesifikasi;
        $this->jenis = $warna;
        $this->harga = $harga;
    }
    public function getlabel()
    {
        return "$this->warna, $this->spesifikasi";
    }
    public function gettipe()
    {
        $str = "Rp. {$this->merk} , {$this->getlabel()} , {$this->harga} ";
        return $str;
    }
}

class mesincuci
{
    public $merk, $warna, $tipe, $harga;

    public function __construct($merk, $warna, $tipe, $harga)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }
    public function getlabel()
    {
        return "$this->warna, $this->tipe";
    }
    public function gettipe()
    {
        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class laptopgaming extends laptop
{
    public function getInfolaptop()
    {
        $str = "laptop = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class netboook extends laptop
{
    public function getInfolaptop()
    {
        $str = "laptop = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class mesin_penggiling extends mesincuci
{
    public function getInfomesincuci()
    {
        $str = "mesincuci = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class mesin_pengering extends mesincuci
{
    public function getInfomesincuci()
    {
        $str = "mesincuci = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class CetakInfolaptop
{
    public function cetak(laptop $laptop)
    {
        $str = "{$laptop->merk} {$laptop->getlabel()} (Rp. {$laptop->harga})";
        return $str;
    }
}

class CetakInfomesincuci
{
    public function cetak(mesincuci $mesincuci)
    {
        $str = "{$mesincuci->merk} {$mesincuci->getlabel()} (Rp. {$mesincuci->harga})";
        return $str;
    }
}

$laptop1 = new laptopgaming
    ("Asus rog", "intel core i9", "silver", 80500000);
$laptop2 = new laptopgaming
    ("Lenovo idepad gaming", "intel core i5-10300H", "hitam", 9500000 );
$laptop3 = new notebook
    ("Axioo mybook 11 G", "intel celeron N3350", "biru", 2500000 );
$laptop4 = new notebook
    ("Axioo Mybook GO", "intel celeron dualcore N4020", "hitam", 3900000);

$mesincuci1 = new mesin_penggiling
    ("Sharp", "putih", "2 tabung", 1900000 );
$mesincuci2 = new mesin_penggiling
    ("Panasonic", "silver", "2 tabung", 1750000 );
$mesincuci3 = new mesin_pengering
    ("Samsung", "silver", "1 tabung", 4600000 );
$mesincuci4 = new mesin_pengering
    ("Polytron", "Putih", "1 tabung", 2100000 );

echo $laptop1->getInfolaptop();
echo "<br>";
echo $laptop2->getInfolaptop();
echo "<br>";
echo $laptop3->getInfolaptop();
echo "<br>";
echo $laptop4->getInfolaptop();
echo "<hr>";

echo $mesincuci1->getInfomesincuci();
echo "<br>";
echo $mesincuci2->getInfomesincuci();
echo "<br>";
echo $mesincuci3->getInfomesincuci();
echo "<br>";
echo $mesincuci4->getInfomesincuci();
echo "<br>";

?>
