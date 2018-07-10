<?php
class UniversityModel extends CI_Model
{
function __construct()
{
parent::__construct();
$this->load->database();
}
function insert($values)
{
$result= $this->db->insert('universities',$values);
return $result;
}
function displayAll()
{
//$query=$this->db->get('universities');
$q= "select
      u.uid,u.uname,u.email,u.contact,u.mobile,u.landline,u.addr,u.st,(select s.statename from state s where s.stateid=u.st) as ustate,u.city,( select c.cityname from cities  c where c.cityid=u.city) as ucity,u.pin,u.desc,u.logo from universities u ";
  $query=$this->db->query($q);
  return $query->result();
}
function displayById($uid)
   {
   // $query=$this->db->get_where('universities',array('uid'=>$uid));
     $q= "select
	       u.uid,u.uname,u.email,u.contact,u.mobile,u.landline,u.addr,u.st,(select s.statename from state s where s.stateid=u.st) as ustate,u.city,( select c.cityname from cities  c where c.cityid=u.city) as ucity,u.pin,u.desc,u.logo from universities u where u.uid=$uid";
  $query=$this->db->query($q);
    return $query->row_array();
    }
    function update($uid,$values)
    {
   $this->db->where('universities.uid',$uid);
  $result= $this->db->update('universities',$values);
  return($result);
    }
    function delete($uid)
    {
    $this->db->where('universities.uid',$uid);
	  $result= $this->db->delete('universities');
  return($result);
   }
   function updateImage($uid,$values)
   {
    $this->db->where('universities.uid',$uid);
    $result= $this->db->update('universities',$values);
     return($result);
     }
function displayAllUniversitiesByName($pat)
   {
   // $query=$this->db->get_where('universities',array('uid'=>$uid));
     $q= "select
	       u.uid,u.uname,u.email,u.contact,u.mobile,u.landline,u.addr,u.st,(select s.statename from state s where s.stateid=u.st) as ustate,u.city,( select c.cityname from cities  c where c.cityid=u.city) as ucity,u.pin,u.desc,u.logo from universities u where u.uname like '%$pat%'";
  $query=$this->db->query($q);
      return $query->result();
    }

}
?>
