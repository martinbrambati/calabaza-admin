<?php
/* Foto Test cases generated on: 2011-04-07 22:29:58 : 1302208198*/
App::import('Model', 'Foto');

class FotoTestCase extends CakeTestCase {
	var $fixtures = array('app.foto');

	function startTest() {
		$this->Foto =& ClassRegistry::init('Foto');
	}

	function endTest() {
		unset($this->Foto);
		ClassRegistry::flush();
	}

}
?>