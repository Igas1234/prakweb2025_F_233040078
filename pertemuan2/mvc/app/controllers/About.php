<?php

class About extends controller{

    public function index($nama = 'fabregas' , $pekerjaan = 'programmer'){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
                $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function Page(){
        $data['judul'] = 'My Page';
        $this->view('about/page', $data);
        $this->view('templates/footer');
        $this->view('templates/header', $data);
    }
}