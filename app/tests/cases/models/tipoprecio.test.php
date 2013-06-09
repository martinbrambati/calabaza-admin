<?php
/* Tipoprecio Test cases generated on: 2011-04-07 21:45:06 : 1302205506*/
App::import('Model', 'Tipoprecio');

class TipoprecioTestCase extends CakeTestCase {
	var $fixtures = array('app.tipoprecio', 'app.precio');

	function startTest() {
		$this->Tipoprecio =& ClassRegistry::init('Tipoprecio');
	}

	function endTest() {
		unset($this->Tipoprecio);
		ClassRegistry::flush();
	}

}
?>