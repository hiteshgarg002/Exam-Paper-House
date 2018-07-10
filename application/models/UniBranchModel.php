<?php
  class UniBranchModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   function getAllUniversity()
    { $query=$this->db->get('universities');
       return $query->result();
    }
function getAllBranch($university)
    { $query=$this->db->query("select * from branch where uid=$university");
       return $query->result();
    }
}

 ?>
