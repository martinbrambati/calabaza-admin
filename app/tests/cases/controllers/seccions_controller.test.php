<?php
/* Seccions Test cases generated on: 2011-05-02 17:14:28 : 1304349268*/
App::import('Controller', 'Seccions');

class TestSeccionsController extends SeccionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SeccionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.seccion', 'app.texto');

	function startTest() {
		$this->Seccions =& new TestSeccionsController();
		$this->Seccions->constructClasses();
	}

	function endTest() {
		unset($this->Seccions);
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