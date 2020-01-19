<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  
  public function index()
  {
    redirect('admin/konfigurasi/aplikasi');
  }

  public function pendaftaran()
  {
    $data = konfigurasi('Konfigurasi Pendaftaran');
    $data['daftar'] = [
      'Buka'=>'Buka',
      'Tutup'=>'Tutup'
    ];
    $data['pengumuman'] = [
      'Buka'=>'Buka',
      'Tutup'=>'Tutup'
    ];
    $this->form_validation->set_rules('setdaftar', 'Pengaturan Pendaftaran', 'trim|required');
    $this->form_validation->set_rules('setpengumuman', 'Pengaturan Pengumuman', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('admin/template/template', 'admin/konfigurasi/pendaftaran', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      $data = [
        'setdaftar'=>$post['setdaftar'],
        'setpengumuman'=>$post['setpengumuman']
      ];
      if($this->Konfigurasi_model->update($data)) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.success("Berhasil update.")
          </script>
        ');
        redirect('admin/konfigurasi/pendaftaran');
      } else {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("GAGAL! Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/konfigurasi/pendaftaran');
      }
    }
  }

  public function aplikasi()
  {
    $data = konfigurasi('Konfigurasi Aplikasi');

    $this->form_validation->set_rules('nama_website', 'Nama Aplikasi', 'trim|required');
    $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
    $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'trim|required');
    $this->form_validation->set_rules('telepon_sekolah', 'Telepon Sekolah', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->template->load('admin/template/template', 'admin/konfigurasi/aplikasi', $data);
    } else {
      $post = $this->input->post(NULL, TRUE);
      $data = [
        'nama_website'=>$post['nama_website'],
        'nama_sekolah'=>$post['nama_sekolah'],
        'alamat_sekolah'=>$post['alamat_sekolah'],
        'telepon_sekolah'=>$post['telepon_sekolah'],
        'keterangan'=>$post['keterangan']
      ];

      if($this->Konfigurasi_model->update($data)) {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.success("Berhasil update.")
          </script>
        ');
        redirect('admin/konfigurasi/aplikasi');
      } else {
        $this->session->set_flashdata('notif', '
          <script>
            toastr.error("GAGAL! Silahkan coba lagi nanti.")
          </script>
        ');
        redirect('admin/konfigurasi/aplikasi');
      }
    }
  }

}

/* End of file Konfigurasi.php */
