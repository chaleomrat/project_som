<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class show extends CI_Controller {

	
    public function shows()
	{
        $data = array(
            
            'p_snumber' =>$this->input->post('p_number'),
            'p_road' => $this->input->post('p_road'),
            'p_district' => $this->input->post('p_district'),
            'p_amphoe' => $this->input->post('p_amphoe'),
            'p_province' => $this->input->post('p_province'),
            'p_zipcode' => $this->input->post('p_zipcode'),
            'p_tel' => $this->input->post('p_tel'),
            'facebook' => $this->input->post('facebook'),
            'email' => $this->input->post('email')
) ;
            
        
$data['show']= $data;
$this->load->view('show',$data);
    }
}
