<?php
class subjectModel extends CI_Model
{
function __construct()
{
parent::__construct();
$this->load->database();
}
function insert($values)
{
$result=$this->db->insert('subjects',$values);
return $result;
}
function displayAllSubject()
{
//$query=$this->db->get('subjects');
$q= "select
      s.uid,s.sid,(select u.uname from universities u where u.uid=s.uid) as suniversity,s.bid,(select x.bname from branch x where x.bid=s.bid) as sbranch,s.sname,s.sem,s.descr,s.status from subjects s";
      $query=$this->db->query($q);
 return $query->result();
}
function displayBySid($sid)
{
//$query=$this->db->get_where('subjects',array('sid'=>$sid));
$q= "select
      s.uid,s.sid,(select u.uname from universities u where u.uid=s.uid) as suniversity,s.bid,(select x.bname from branch x where x.bid=s.bid) as sbranch,s.sname,s.sem,s.descr,s.status from subjects s";
      $query=$this->db->query($q);
       return $query->row_array();
}
function updateSubject($sid,$values)
{
$this->db->where('subjects.sid',$sid);
$result=$this->db->update('subjects',$values);
return($result);
}
function deleteSubject($sid)
{
$this->db->where('subjects.sid',$sid);
$result=$this->db->delete('subjects');
return($result);
}

function getSubject($bid,$sem)
{
$query=$this->db->query("select sid, sname from subjects where bid=$bid and sem='$sem'");
return $query->result_array();

}
}

?>