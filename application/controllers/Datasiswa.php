<?php
class Datasiswa extends CI_Controller
{
    public function index()
    {
        // echo "Admin dapat menginput Data Siswa";
        $this->load->view('view-data-siswa');
    }

    public function cetak()
    {
        if ($this->form_validation->run( )!= true ){
            $this->load->view('view-data-siswa');
        } 
        else {
        // $this->load->model('Model_datasiswa');
        

        $data['nama siswa'] = $ns;
        $data['nis'] = $n;
        $data['kelas'] = $k;
        $data['tanggal lahir'] = $tl;
        $data['tempat lahir'] = $tl;
        $data['alamat'] = $a;
        $data['jenis kelamin'] = $jk;
        $data['agama'] = $ag;

        // $this->load->view('view-data-siswa', $data);
        }
        
    }
}