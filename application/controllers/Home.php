<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $data['main_content'] = 'fe/home';
        $data['page_title'] ='';
        $data['cur'] = 'Home';
        $this->load->view('fe/home',$data);
    }
}
?>
