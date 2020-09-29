<?php
defined('BASEPATH') or exit('No direct script access allowed');

class manage extends CI_Controller
{


    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('view', 'Alumni');
    // }

    public function reg()
    {
        $data = array(
            'mr' => $this->input->post("mr"),
            'fname' => $this->input->post("fname"),
            'mre' => $this->input->post("mre"),
            'ename' => $this->input->post("ename"),
            'id' => $this->input->post("id"),
            'date' => $this->input->post("date"),
            'job' => $this->input->post("job"),
            'nation' => $this->input->post("nation"),
            'nation2' => $this->input->post("nation2"),
            'religion' => $this->input->post("re"),
            'blood' => $this->input->post("blood"),
            'email' => $this->input->post("email"),
            'tel' => $this->input->post("tel"),
            'facebook' => $this->input->post("face"),
            'line' => $this->input->post("line")

        );
      
        $data['show'] = $data;
      $this->load->view('view_data',$data);
    }


}
