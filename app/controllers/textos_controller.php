<?php
class TextosController extends AppController {

	var $name = 'Textos';

	function index() {
		$this->Texto->recursive = 0;
		$this->set('textos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid texto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('texto', $this->Texto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Texto->create();
			if ($this->Texto->save($this->data)) {
				$this->Session->setFlash(__('The texto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The texto could not be saved. Please, try again.', true));
			}
		}
		$seccions = $this->Texto->Seccion->find('list');
		$this->set(compact('seccions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid texto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Texto->save($this->data)) {
				$this->Session->setFlash(__('The texto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The texto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Texto->read(null, $id);
		}
		$seccions = $this->Texto->Seccion->find('list');
		$this->set(compact('seccions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for texto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Texto->delete($id)) {
			$this->Session->setFlash(__('Texto deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Texto was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>