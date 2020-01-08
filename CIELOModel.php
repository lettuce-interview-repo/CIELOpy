<?php
class CIELOModel extends CI_Model {
	function saverecords($name,$dob,$email, $favcolor) {
		$query="INSERT into test_data values('$name', '$dob', '$email','$favcolor')";
		$this->db->query($query);
	}
}
