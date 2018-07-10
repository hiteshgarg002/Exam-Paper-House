<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class branchController extends CI_Controller
{
function __construct()
{
parent::__construct();
$this->load->model('branchModel');
}
function branchView()
{
session_start();
 if(isset($_SESSION['SADMINID']))
 {
$data['msg']="";
$this->load->view('branchView',$data);
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

$values['bname']=$_POST['bname'];
$values['bicon']=$_FILES['bicon']['name'];
$values['totalsem']=$_POST['totalsem'];
$result=$this->branchModel->insert($values);
$data['msg']="";
if($result)
{
move_uploaded_file($_FILES['bicon']['tmp_name'],"images/branch/".$_FILES['bicon']['name']);
$data['msg']="Record Submitted....";
}
else
{
$data['msg']="Failed....";
}
$this->load->view('branchView',$data);
}
function displayAllBranch()
{
$result=$this->branchModel->displayAllBranch();
$data['result']=$result;
$data['msg']="";
$this->load->view('displayAllBranch',$data);
}
function displayByBid()
{
$bid=$_GET['bid'];
$result=$this->branchModel->displayByBid($bid);
$data['result']=$result;
$data['msg']="";
$this->load->view('displayByBid',$data);
}
function updateBranch()
{
$btn=$_POST['btn'];
$bid=$_POST['bid'];
if($btn=='Edit')
{
$bid=$_POST['bid'];
$values['bname']=$_POST['bname'];
$values['totalsem']=$_POST['totalsem'];
$result=$this->branchModel->updateBranch($bid,$values);
}
else
{
$result=$this->branchModel->deleteBranch($bid);
}
$this->displayAllBranch();

}
function updateBicon()
{
$bid=$_POST['bid'];
$values['bicon']=$_FILES['bicon']['name'];
$result=$this->branchModel->updateBicon($bid,$values);
$data['msg']='';
if($result)
{
move_uploaded_file($_FILES['bicon']['tmp_name'],"images/branch/".$_FILES['bicon']['name']);
$data['msg']="Icon updated......";
}
else
{
$data['msg']="Icon updated Failed......";
}
$this->displayAllBranch();
}
function displayByBidForSem()
{
$bid=$_GET['bid'];
$result=$this->branchModel->displayByBid($bid);
echo json_encode($result);
}
   }

?>