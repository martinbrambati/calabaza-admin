<?php
/* Texto Test cases generated on: 2011-05-02 16:32:22 : 1304346742*/
App::import('Model', 'Texto');

class TextoTestCase extends CakeTestCase {
	var $fixtures = array('app.texto');

	function startTest() {
		$this->Texto =& ClassRegistry::init('Texto');
	}

	function endTest() {
		unset($this->Texto);
		ClassRegistry::flush();
	}

}
?>