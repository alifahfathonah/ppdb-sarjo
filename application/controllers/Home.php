<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }
  
  public function index()
  {
    $data = konfigurasi('Home');
    $this->template->load('templates/template', 'home', $data);
  }

}

/* End of file Home.php */
