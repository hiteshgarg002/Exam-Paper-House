<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class paperController extends CI_Controller
{
function __construct()
{
parent:: __construct();
$this->load->model('paperModel');
$this->load->model('UniversityModel');
$this->load->model('branchModel');
$this->load->model('subjectModel');
}
 function paperView()
 {
 session_start();
  if(isset($_SESSION['SADMINID']))
  {
$data['msg']="";
$this->load->view('paperView',$data);
}
else
{
$data['msg']="";
$this->load->view('adminLogin',$data);
}
}

 function paperInsert()
 {
 $values['sid']=$_POST['sid'];
 $values['year']=$_POST['year'];
 $values['unit']=$_POST['unit'];
 $values['qno']=$_POST['qno'];
 $values['q1']=$_POST['q1'];
  $values['q2']=$_POST['q2'];
 $result=$this->paperModel->paperInsert($values);
 $data['msg']="";
 if($result)
 {

 $data['msg']="Record Submitted....";
 }
 else
 {
 $data['msg']="Failed....";
 }
 $this->load->view('paperView',$data);
}
function getAllUniversity()
{
$result=$this->UniBranchModel->getAllUniversity();
 echo json_encode($result);
 }
 function getAllbranch()
{
$result=$this->UniBranchModel->getAllBranch();
 echo json_encode($result);
}
}
