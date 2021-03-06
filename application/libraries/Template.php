<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{
	protected $_ci;
	public function __construct()
	{
		$this->_ci = &get_instance();
	}
	function lihat($template = NULL,$data = NULL)
	{
		if ($template != NULL) 
			// $data['_body']		= $this->_ci->load->view($template,$data,TRUE);
			$data['_header']	= $this->_ci->load->view('header',$data,TRUE);
			$data['_artikel']	= $this->_ci->load->view('artikel',$data,TRUE);
			$data['_sidebar']	= $this->_ci->load->view('sidebar',$data,TRUE);
			$data['_footer']	= $this->_ci->load->view('footer',$data,TRUE);
			echo $data['_template']	= $this->_ci->load->view('template',$data,TRUE);
	}
}

/* End of file template.php */
/* Location: ./application/controllers/template.php */