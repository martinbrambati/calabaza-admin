<?php
/* Precios Test cases generated on: 2011-04-28 19:32:23 : 1304011943*/
App::import('Controller', 'Precios');

class TestPreciosController extends PreciosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PreciosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.precio', 'app.tipoprecio');

	function startTest() {
		$this->Precios =& new TestPreciosController();
		$this->Precios->constructClasses();
	}

	function endTest() {
		unset($this->Precios);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>