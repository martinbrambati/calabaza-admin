<?php
/* Tipoprecios Test cases generated on: 2011-04-11 22:09:51 : 1302552591*/
App::import('Controller', 'Tipoprecios');

class TestTipopreciosController extends TipopreciosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipopreciosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipoprecio', 'app.precio');

	function startTest() {
		$this->Tipoprecios =& new TestTipopreciosController();
		$this->Tipoprecios->constructClasses();
	}

	function endTest() {
		unset($this->Tipoprecios);
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