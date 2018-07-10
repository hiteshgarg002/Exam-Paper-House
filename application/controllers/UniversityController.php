<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UniversityController extends CI_Controller
{
function __construct()
{
parent::__construct();
$this->load->model('UniversityModel');
}
function UniversityView()
{
session_start();
if(isset($_SESSION['SADMINID']))
{
$data['msg']="";
$this->load->view('universityview',$data);
}
else
{
$data['msg']="";
$this->load->view('adminLogIn',$data);
}
}
function insert()
{
$values['uname']=$_POST['uname'];
$values['email']=$_POST['email'];
$values['contact']=$_POST['contact'];
$values['mobile']=$_POST['mobile'];
$values['landline']=$_POST['landline'];
$values['addr']=$_POST['addr'];
$values['st']=$_POST['st'];
$values['city']=$_POST['city'];
$values['pin']=$_POST['pin'];
$values['desc']=$_POST['desc'];
$values['logo']=$_FILES['logo']['name'];
$result=$this->UniversityModel->insert($values);
$data['msg']="";
if($result)
{
move_uploaded_file($_FILES['logo']['tmp_name'],"images/university/".$_FILES['logo']['name']);
$data['msg']="Record Submitted...";
}
else
{
$data['msg']="Failed To Submit Record...";
}
$this->load->view('UniverSityView',$data);
}
function displayAll()
    {
     $result=$this->UniversityModel->displayAll();
     $data['result']=$result;
     $this->load->view('displayAllUniversity',$data);


     }
     function displayAllJSON()
	     {
	      $result=$this->UniversityModel->displayAll();
	     echo json_encode($result);

     }
function displayById()
    {
     $uid=$_GET['uid'];
     $result=$this->UniversityModel->displayById($uid);
     $data['result']=$result;
     $data['msg']="";
     $this->load->view('universityById',$data);
      }

  function update()
  {
  $btn=$_POST['btn'];
  $uid=$_POST['uid'];
  if($btn=='Edit')
  {
    $uid=$_POST['uid'];
  $values['uname']=$_POST['uname'];
  $values['email']=$_POST['email'];
  $values['contact']=$_POST['contact'];
  $values['mobile']=$_POST['mobile'];
  $values['landline']=$_POST['landline'];
  $values['addr']=$_POST['addr'];
       if($_POST['st']=="-States-" && $_POST['city']=="-City-")
     {
       $values['st']=$_POST['pstate'];
       $values['city']=$_POST['pcity'];
       }
       else
       {
  $values['st']=$_POST['st'];
  $values['city']=$_POST['city'];
  }
  $values['pin']=$_POST['pin'];
  $values['desc']=$_POST['desc'];
  $result=$this->UniversityModel->update($uid,$values);
  }
  else
  {
    $result=$this->UniversityModel->delete($uid);
  }
   $this->displayAll();
   }
  function updateImage()
  {
  	$uid=$_POST['uid'];
	$values['logo']=$_FILES['logo']['name'];
$result=$this->UniversityModel->updateImage($uid,$values);
$data['msg']='';
if($result)
{ move_uploaded_file($_FILES['logo']['tmp_name'],"images/university/".$_FILES['logo']['name']);
$data['msg']="Record Submitted...";
}
else
{
$data['msg']="Fail to Submit Record...";
}

 $this->displayAll();
}
}