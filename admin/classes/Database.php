<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "id18925424_root", "*eyqW4hW<<G6$#li", "id18925424_ecommerceapp");
		return $this->con;
	}
}

?>