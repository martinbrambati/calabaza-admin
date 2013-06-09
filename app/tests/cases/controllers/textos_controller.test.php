<?php
/* Textos Test cases generated on: 2011-05-02 17:18:49 : 1304349529*/
App::import('Controller', 'Textos');

class TestTextosController extends TextosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TextosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.texto', 'app.seccion');

	function startTest() {
		$this->Textos =& new TestTextosController();
		$this->Textos->constructClasses();
	}

	function endTest() {
		unset($this->Textos);
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