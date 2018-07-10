<?php
  class test_model extends CI_Model {
 function __construct()
  	{
  	parent::__construct();
   	}
  function addValue($f,$s)
  { return($f+$s);
  }

  function subtractValue($f,$s)
   { return($f-$s);
   }
}

 ?>
