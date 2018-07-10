<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserViewController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('UniversityModel');
			$this->load->model('branchModel');
			$this->load->model('subjectModel');
			$this->load->model('paperModel');

	}


	function UserView()
	{
		$data['msg']="";
		$this->load->view('UserView',$data);
	}

		function displayAllUniversitiesByName()
		  	{
		  	$pat=$_GET['pat'];
		  	  $result=$this->UniversityModel->displayAllUniversitiesByName($pat);
		  	  echo json_encode($result);

  	}

function displayAllBranchesByUniversityId()
{
session_start();
$uid=$_GET['uid'];
$_SESSION['uname']=$_GET['uname'];
$_SESSION['ustate']=$_GET['ustate'];
$_SESSION['ucity']=$_GET['ucity'];
$_SESSION['logo']=$_GET['logo'];
$result=$this->branchModel->displayAllBranchesByUniversityId($uid);
$data['result']=$result;
$this->load->view("userBranchesView",$data);

}
function userPaperView()
{
session_start();
$_SESSION['bid']=$_GET['bid'];
$_SESSION['bname']=$_GET['bname'];
$_SESSION['totalsem']=$_GET['semester'];
$this->load->view("userPaperView");

}
function getpaperBySemAndBranch()
{
$sid=$_GET['sname'];
$year=$_GET['year'];
$result=$this->paperModel->getPaperBySemAndBranch($sid,$year);
echo json_encode($result);


}
	}
?>