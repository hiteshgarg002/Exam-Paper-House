<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateCityController extends CI_Controller {

function __construct()
{parent::__construct();
 $this->load->model('StateCityModel');
}
function getAllStates()
 { $result=$this->StateCityModel->getAllStates();
    echo json_encode($result);
    }

function getAllCities()
    {$state=$_GET['state'];
    $result=$this->StateCityModel->getAllCities($state);
    echo json_encode($result);

    }


}