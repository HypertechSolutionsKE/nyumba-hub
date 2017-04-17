<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $data['main_content'] = 'fe/home';
        $data['page_title'] ='Home';
        $data['cur'] = 'Home';
        $this->load->view('fe/includes/content',$data);
    }
    public function about_us() {
        $data['main_content'] = 'fe/about_us';
        $data['page_title'] ='About Us';
        $data['cur'] = 'About';
        $this->load->view('fe/includes/content',$data);
    }
    public function how_it_works() {
        $data['main_content'] = 'fe/how_it_works';
        $data['page_title'] ='How It Works';
        $data['cur'] = 'How';
        $this->load->view('fe/includes/content',$data);
    }
    public function contact() {
        $data['main_content'] = 'fe/contact_us';
        $data['page_title'] ='Contact Us';
        $data['cur'] = 'Contact';
        $this->load->view('fe/includes/content',$data);
    }

    // List Functions
    public function property_listing_grid() {
        $data['main_content'] = 'fe/property_listing_grid';
        $data['page_title'] ='Grid View';
        $data['cur'] = 'Grid';
        $this->load->view('fe/includes/content',$data);
    }
    public function property_listing_list() {
        $data['main_content'] = 'fe/property_listing_list';
        $data['page_title'] ='List View';
        $data['cur'] = 'List';
        $this->load->view('fe/includes/content',$data);
    }
    public function property_details() {
        $data['main_content'] = 'fe/property_details';
        $data['page_title'] =' Property Details';
        $data['cur'] = 'Detail';
        $this->load->view('fe/includes/content',$data);
    }
}
?>
