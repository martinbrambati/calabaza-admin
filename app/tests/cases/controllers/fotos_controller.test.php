<?php
/* Fotos Test cases generated on: 2011-04-07 23:04:16 : 1302210256*/
App::import('Controller', 'Fotos');

class TestFotosController extends FotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.foto');

	function startTest() {
		$this->Fotos =& new TestFotosController();
		$this->Fotos->constructClasses();
	}

	function endTest() {
		unset($this->Fotos);
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