<?php
class Model_datasiswa extends CI_Model
{
    //membuat variabel untuk menampilkan data
    public $nilai1, $nilai2, $hasil;
    //method penjumlahan
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}