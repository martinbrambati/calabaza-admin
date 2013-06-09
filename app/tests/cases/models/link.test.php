<?php
/* Link Test cases generated on: 2011-04-12 17:39:31 : 1302622771*/
App::import('Model', 'Link');

class LinkTestCase extends CakeTestCase {
	var $fixtures = array('app.link');

	function startTest() {
		$this->Link =& ClassRegistry::init('Link');
	}

	function endTest() {
		unset($this->Link);
		ClassRegistry::flush();
	}

}
?>