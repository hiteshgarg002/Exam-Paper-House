<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class subjectController extends CI_Controller
{
function __construct()
{
parent::__construct();
$this->load->model('subjectModel');
$this->load->model('UniversityModel');
 $this->load->model('branchModel');
}
function subjectView()
{
session_start();
 if(isset($_SESSION['SADMINID']))
 {
$data['msg']="";
$this->load->view('subjectView',$data);
}
else
{
$data['msg']="";
$this->load->view('adminLogin',$data);
}
}
function insert()
{
$values['uid']=$_POST['uid'];
$values['bid']=$_POST['bid'];
$values['sem']=$_POST['sem'];
$values['sname']=$_POST['sname'];
$values['descr']=$_POST['descr'];
$values['status']=$_POST['status'];
$result=$this->subjectModel->insert($values);
$data['msg']="";
if($result)
{

$data['msg']="Record Submitted....";
}
else
{
$data['msg']="Failed....";
}
$this->load->view('subjectView',$data);
}
function displayAllSubject()
{
$result=$this->subjectModel->displayAllSubject();
$data['result']=$result;
$data['msg']="";
$this->load->view('displayAllSubject',$data);
}
function displayBySid()
{
$sid=$_GET['sid'];
$result=$this->subjectModel->displayBySid($sid);
$data['result']=$result;
$data['msg']="";
$this->load->view('displayBySid',$data);
}
function updateSubject()
{
$btn=$_POST['btn'];
$sid=$_POST['sid'];
if($btn=='Edit')
{
$sid=$_POST['sid'];
$values['sname']=$_POST['sname'];
$values['sem']=$_POST['sem'];
$values['descr']=$_POST['descr'];
$values['status']=$_POST['status'];
$result=$this->subjectModel->updateSubject($sid,$values);
}
else
{
$result=$this->subjectModel->deleteSubject($sid);
}
$this->displayAllSubject();

}
function getSubject()
{
$sem=$_GET['sem'];
$bid=$_GET['bid'];
$result=$this->subjectModel->getSubject($bid,$sem);
echo json_encode($result);
}
}
 ?>