<?php
class ClientModel extends CI_Model {

        public function __construct()
        {
      	     // Call the CI_Model constructor
               parent::__construct();
               $this->load->database();
        }
		public function insert($values)
		{
			$result=$this->db->insert('clients',$values);
		 	//echo"$result";
			return $result;
		}

	function displayAll()
	{
		//$query=$this->db->get('clients');
	//	echo"$query";
	$q="select c.clientid,c.firstname,c.lastname,c.email,c.mobileno,c.dob,c.gender,c.address,(select s.statename from state s where s.stateid=c.state)as ustate,(select c.cityname from cities c where c.cityid=c.city)as ucity,c.password from clients c";

	$query=$this->db->query($q);
	return $query->result();
	}

	   public function checkPassword($clientid,$password)
		{
				$query=$this->db->query("select * from clients where email='$clientid' and password='$password'");
				$result =$query->row_array();
				return $result;
			}


	function displayById($clientid)
	{
		//$query=$this->db->get_where('clients',array('clientid'=>$clientid));

		$q="select c.clientid,c.firstname,c.lastname,c.email,c.mobileno,c.dob,c.gender,c.address,c.state,(select s.statename from states s where s.stateid=c.state)as ustate,c.city,(select c.cityname from cities c where c.cityid=c.city)as ucity,c.password from clients c where c.clientid=$clientid";

		$query=$this->db->query($q);
		return $query->row_array();
		//echo"$q";

	}
	function UpdateProfile($clientid,$values)
	{
		$this->db->where('clients.clientid',$clientid);
		$result=$this->db->update('clients',$values);

		return($result);


	}
/*	function showpic($agencyid,$ulogo)
	{
	//$q="update agency set logo='$ulogo' where agencyid='$agencyid'";

		//$this->db->where('agency.agencyid',$agencyid);
		//$result=$this->db->update('agency',$values);

	$query=$this->db->query($q);
		return($result);
	}*/

	function delete($clientid)
	{
		$this->db->where('clients.clientid',$clientid);
		$result=$this->db->delete('clients');
		return($result);
	}
}

?>