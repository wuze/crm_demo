<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		  $this->load->helper('url');
		  //$this->getData();
  		  $this->load->view('ligerUI');
	}
	
	
	public function getData(){
	  $this->load->database();
	  $this->db->from('group');
	  $query = $this->db->get();
	  
	  for($i=0;$i<$query->num_rows();$i++ ){
	             $mydata[] = $query->row_array($i);
	   }
	        $total=$query->num_rows(); 
	        $json_string = json_encode($mydata);
	        $data['total']=$total;
	        $data['jsonstr']=$json_string;
	   $data = '{Rows:'.$json_string.',Total:'.$total.'}';
	   echo $data;
	 }
 
 public function getSubData($pid = ''){
	  //echo '$PID = '.$pid;
	  $this->load->database();
	  $this->db->from('admin');
	  $this->db->where('group', $pid);
	  $query = $this->db->get();
	        for($i=0;$i<$query->num_rows();$i++ ){
	             $mydata[] = $query->row_array($i);
	        }
	        $total=$query->num_rows(); 
	        $json_string = json_encode($mydata);
	        $data['total']=$total;
	        $data['jsonstr']=$json_string;
	        $data = '{Rows:'.$json_string.',Total:'.$total.'}';
	        echo $data;
	  
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */