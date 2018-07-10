<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniBranchController extends CI_Controller {

function __construct()
{parent::__construct();
 $this->load->model('UniBranchModel');
 $this->load->model('UniversityModel');
  $this->load->model('UniBranchModel');
}
function getAllUniversity()
 { $result=$this->UniBranchModel->getAllUniversity();
    echo json_encode($result);
    }

function getAllBranch()
    {$university=$_GET['University'];
    $result=$this->UniBranchModel->getAllBranch($university);
    echo json_encode($result);

    }


}