<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    $data = konfigurasi('Daftar');

    $data['jenis_kelamin'] = [
      'Laki - laki'=>'Laki - laki',
      'Perempuan'=>'Perempuan'
    ];
    $data['agama_siswa'] = [
      'Islam'=>'Islam',
      'Kristen Protetan'=>'Kristen Protetan',
      'Katholik'=>'Katholik',
      'Hindu'=>'Hindu',
      'Budha'=>'Budha',
      'Khonghucu'=>'Khonghucu',
      'Kepercayaan Kepada Tuhan YME'=>'Kepercayaan Kepada Tuhan YME',
      'Lainnya'=>'Lainnya'
    ];
    $data['kebutuhan_khusus'] = [
      'Tidak'=>'Tidak',
      'Netra (A)'=>'Netra (A)',
      'Rungu (B)'=>'Rungu (B)',
      'Grahita Ringan (C)'=>'Grahita Ringan (C)',
      'Grahita Sedang (C1)'=>'Grahita Sedang (C1)',
      'Daksa Ringan (D)'=>'Daksa Ringan (D)',
      'Daksa Sedang (D1)'=>'Daksa Sedang (D1)',
      'Laras (E)'=>'Laras (E)',
      'Wicara (F)'=>'Wicara (F)',
      'Tuna Ganda (G)'=>'Tuna Ganda (G)',
      'Hiper Aktif (H)'=>'Hiper Aktif (H)',
      'Cerdas Istimewa (I)'=>'Cerdas Istimewa (I)',
      'Bakat Istimewa (J)'=>'Bakat Istimewa (J)',
      'Kesulitan Belajar (K)'=>'Kesulitan Belajar (K)',
      'Narkoba (N)'=>'Narkoba (N)',
      'Indigo (O)'=>'Indigo (O)',
      'Down Sindrome (P)'=>'Down Sindrome (P)',
      'Autis (Q)'=>'Autis (Q)'
    ];

    $this->form_validation->set_rules('nama_siswa', 'Nama Lengkap', 'trim|required');
    // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    // $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');
    // $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
    // $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
    // $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    // $this->form_validation->set_rules('agama_siswa', 'Agama & Kepercayaan', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('templates/template', 'daftar', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      var_dump($post);
    }
    
    
  }

}

/* End of file Daftar.php */
