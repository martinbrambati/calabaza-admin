<?php
/* Group Test cases generated on: 2011-04-11 22:14:23 : 1302552863*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
?>