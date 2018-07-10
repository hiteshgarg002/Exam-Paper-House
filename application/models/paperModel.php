<?php
  class paperModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
    $this->load->database();

   	}

	function paperInsert($values)
	{
		$result=$this->db->insert('papers',$values);
		return $result;
		}

function getPaperBySemAndBranch($sid,$year)
{
$query=$this->db->query("select * from papers where sid=$sid and year='$year'");
return $query->result();
}
}
?>