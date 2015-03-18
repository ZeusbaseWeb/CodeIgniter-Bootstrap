<?php if (!defined('BASEPATH')) die();

class Boesk extends Main_Controller {

   public function index()
	{

      $this->load->view('layouts/jumbotron');

	}
 
	public function location(){

      $this->load->view('layouts/offcanvas');

	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
