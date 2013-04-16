<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LigerUI extends CI_Controller {
 public function index(){
  $this->load->helper('url');
  //$this->getData();
  
  echo "HELLEO";
  die;
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