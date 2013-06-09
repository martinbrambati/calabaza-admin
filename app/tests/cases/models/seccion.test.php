<?php
/* Seccion Test cases generated on: 2011-05-02 17:14:28 : 1304349268*/
App::import('Model', 'Seccion');

class SeccionTestCase extends CakeTestCase {
	var $fixtures = array('app.seccion', 'app.texto');

	function startTest() {
		$this->Seccion =& ClassRegistry::init('Seccion');
	}

	function endTest() {
		unset($this->Seccion);
		ClassRegistry::flush();
	}

}
?>