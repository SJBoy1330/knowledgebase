<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function index()
    {
        // GLOBAL VARIABEL
        $this->data['title'] = 'Product Overflow';
        // DB VARIABEL
        $mydata['result'] = $this->action_m->get_all('product');
        // LOAD VIEW
        $this->data['content'] = $this->load->view('index', $mydata, TRUE);
        $this->display();
    }

    public function bantuan()
    {
        // GLOBAL VARIABEL
        $this->data['title'] = 'Pusat Bantuan';
        $mydata = [];
        // LOAD VIEW
        $this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
        $this->display();
    }
}
