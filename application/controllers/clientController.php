<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
 		$this->load->Model('ClientModel');
    }
    	public function clientLogin()
		{
			$data['msg']='';
			$this->load->view('clientLogin',$data);
		}

		public function checkPassword()
		{

			$clientid=$_GET['clientid'];
			$password=$_GET['password'];

			$row= $this->ClientModel->checkPassword($clientid,$password);

			$data['msg']="";
			if($row)
			{


					session_start();
				$_SESSION['SCLIENTID']=$row['clientid'];

				$_SESSION['SFIRESTNAME']=$row['firstname'];

				$this->load->view('clientHome',$data);
			}
			else
			{
				$data['msg']="Invalid Admin/Password";
				$this->load->view('clientLogin',$data);
			}

		}


	public function clientView()
	{
		$data['msg']='';
		$this->load->view('clientView',$data);
	}

	public function insert()
	{
		$values['firstname']=$_POST['cfn'];
		$values['lastname']=$_POST['cln'];
		$values['email']=$_POST['cemail'];
		$values['mobileno']=$_POST['cpn'];
		$values['dob']=$_POST['cdob'];
		$values['gender']=$_POST['gender'];
		$values['address']=$_POST['cadd'];
		$values['state']=$_POST['us'];
		$values['city']=$_POST['uc'];
		$values['password']=$_POST['password'];


		$result= $this->ClientModel->insert($values);

		$data['msg']='';
		if($result)
		{
			$data['msg']='Record Submitted...';
		}
		else
		{
			$data['msg']='Fail to Submit Record';
		}

		$this->load->view('clientView',$data);
	}

	function displayAll()
	{
		$result=$this->ClientModel->displayAll();
		$data['result']=$result;
		$this->load->view('displayAllclient',$data);
	}

	function displayById()
	{
		$clientid=$_GET['clientid'];
		$result=$this->ClientModel->displayById($clientid);
		$data['result']=$result;
		$data['msg']="";

		$this->load->view('client/displayclientById',$data);
	}
	function UpdateProfile()
	{
		$btn=$_POST['btn'];
		$clientid=$_POST['clientid'];

		if($btn=='Edit')
		{
		$values['firstname']=$_POST['cfn'];
		$values['lastname']=$_POST['cln'];
		$values['email']=$_POST['cemail'];
		$values['mobileno']=$_POST['cpn'];
		$values['dob']=$_POST['cdob'];
		$values['gender']=$_POST['gender'];
		$values['address']=$_POST['cadd'];
		$values['password']=$_POST['password'];



		if($_POST['us']=="-select-" && $_POST['uc']=="-City-")
		{
		$values['state']=$_POST['pstate'];
		$values['city']=$_POST['pcity'];
		}
		else
		{
		$values['state']=$_POST['us'];
		$values['city']=$_POST['uc'];

		}

		$result=$this->ClientModel->UpdateProfile($clientid,$values);
		}
		else
		{
		$result=$this->ClientModel->delete($clientid);
		}

		$this->displayAll();
	}

	/*function showpic()
	{
		$btn=$_POST['btn1'];
		$clientid=$_POST['clientid'];
		echo"$clientid";
		$values['logo']=$_FILES['ulogo']['name'];

		$result=$this->ClientModel->showpic($clientid,$logo);
		//echo"$result";

		move_uploaded_file($_FILES['ulogo']['tmp_name'],'images/client/'.$values['logo']);
		$this->displayAll();

	}*/

}
?>