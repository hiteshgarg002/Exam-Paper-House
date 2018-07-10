<?php
defined('BASEPATH') or exit('NO direct script access allowed');
class adminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminModel');
    }
    public function adminLogin()
    {
        $data['msg'] = "";
        $this->load->view('adminLogIn', $data);
    }
    public function checkPassword()
    {
        $aid = $_GET['aid'];
        $pwd = $_GET['pwd'];
        $row = $this->adminModel->checkPassword($aid, $pwd);
        $data['msg'] = "";
        if ($row) {
            session_start();
            $_SESSION['SADMINID'] = $row['aid'];
            $_SESSION['SADMINNAME'] = $row['aname'];
            $this->load->view('adminHome', $data);
        } else {
            $data["msg"] = "Invalid Id Or Password";
            $this->load->view('adminLogIn', $data);
        }

    }
}
