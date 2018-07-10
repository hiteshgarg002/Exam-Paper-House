<?php
  class StateCityModel extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
  	$this->load->database();
   	}
   function getAllStates()
    { $query=$this->db->get('state');
       return $query->result();
    }
function getAllCities($state)
    { $query=$this->db->query("select * from cities where stateid=$state");
       return $query->result();
    }
}

 ?>
