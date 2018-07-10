<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 	public function index()
	{ 	$this->load->view('welcome_message');
	}

    public function myaction()
     {$data['msg']="We Are Learning CI..";

     $this->load->view('mypage',$data);
     }

     public function view_interest()
     {$data['msg']='';
      $data['rate']='8.5';
      $data['time']='1';
     $this->load->view('InterestView',$data);
     }
 public function calc_interest()
     {$amt=$_GET['amt'];
     $time=$_GET['time'];
     $rate=$_GET['rate'];
     $si=$amt*$time*$rate/100;
     $data['msg']=$si;
    //  $data['rate']='8.5';
    //  $data['time']='1';
     $this->load->view('InterestView',$data);
     }

public function view_sal()
{
$data['result']="";
$this->load->view('EmpView',$data);
}

public function calc_sal()
{
$eid=$_GET['eid'];
$ename=$_GET['ename'];
$basic=$_GET['basic'];
$grade=$_GET['grade'];
if($grade=="grade1")
{
$da=(40*$basic)/100;
$hra=(20*$basic)/100;
$pf=(12*$basic)/100;
$net=($basic+$da+$hra)-$pf;
}
else if($grade=="grade2")
{
$da=(30*$basic)/100;
$hra=(15*$basic)/100;
$pf=(10*$basic)/100;
$net=($basic+$da+$hra)-$pf;

}
else if($grade=="grade3")
{
$da=(25*$basic)/100;
$hra=(10*$basic)/100;
$pf=(5*$basic)/100;
$net=($basic+$da+$hra)-$pf;
}
$data['result']="<table border=1><tr><th>Employee ID</th><th>Employee Name</th><th>Basic</th><th>DA</th><th>HRA</th><th>PF</th><th>Net Salary</th></tr><tr><td>$eid</td><td>$ename</td><td>$basic</td><td>$da</td><td>$hra</td><td>$pf</td><td>$net</td>";
$this->load->view('EmpView',$data);

}
}
?>