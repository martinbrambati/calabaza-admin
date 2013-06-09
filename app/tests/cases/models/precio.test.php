<?php
/* Precio Test cases generated on: 2011-04-07 21:45:12 : 1302205512*/
App::import('Model', 'Precio');

class PrecioTestCase extends CakeTestCase {
	var $fixtures = array('app.precio', 'app.tipoprecio');

	function startTest() {
		$this->Precio =& ClassRegistry::init('Precio');
	}

	function endTest() {
		unset($this->Precio);
		ClassRegistry::flush();
	}

}
?>