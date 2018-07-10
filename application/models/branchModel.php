<?php
class branchModel extends CI_Model
{
function __construct()
{
parent::__construct();
$this->load->database();
}
function insert($values)
{
$result=$this->db->insert('branch',$values);
return $result;
}
function displayAllBranch()
{
//$query=$this->db->get('branch');
$q= "select
      b.bid,b.uid,(select u.uname from universities u where u.uid=b.uid) as buniversity,b.bname,b.bicon,b.totalsem from branch b ";
  $query=$this->db->query($q);
 return $query->result();
}
function displayByBid($bid)
{
//$query=$this->db->get_where('branch',array('bid'=>$bid));
$q= "select
      b.bid,b.uid,(select u.uname from universities u where u.uid=b.uid) as buniversity,b.bname,b.bicon,b.totalsem from branch b ";
  $query=$this->db->query($q);
  return $query->row_array();
}
function updateBranch($bid,$values)
{
$this->db->where('branch.bid',$bid);
$result=$this->db->update('branch',$values);
return($result);
}
function deleteBranch($bid)
{
$this->db->where('branch.bid',$bid);
$result=$this->db->delete('branch');
return($result);
}
function updateBicon($bid,$values)
{
$this->db->where('branch.bid',$bid);
$result=$this->db->update('branch',$values);
return($result);
}
function displayAllBranchesByUniversityId($uid)
{
$q="select bid, bname, bicon, totalsem from branch where uid=$uid";
$query=$this->db->query($q);
return $query->result();


}
}

?>