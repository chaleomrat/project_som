<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class show extends CI_Controller {


	public function index()
	{
		$this->load->view('form');
    }
    
    public function show()
    {
        $data = array(
            'p_card' => $this->input->post('p_card'),
            'name' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('birthday'),
            'number' => $this->input->post('p_number'),
            'road' => $this->input->post('p_road'),
            'district' => $this->input->post('p_district'),
            'amphoe' => $this->input->post('p_amphoe'),
            'province' => $this->input->post('p_province'),
            'zipcode' => $this->input->post('p_zipcode'),
            'tel' => $this->input->post('p_tel')
        );


        }
        $data['show'] = $data;
        $this->load->view('show',$data);
    }
}
