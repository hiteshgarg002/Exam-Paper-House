<?php
class adminModel extends CI_Model
{
function __construct()
{
parent::__construct();
$this->load->database();
}
function checkPassword($aid,$pwd)
{
$query=$this->db->query("select * from admin where aid=$aid and pwd=$pwd");
$result=$query->row_array();
return $result;

}

}

?>