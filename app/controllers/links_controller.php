<?php
class LinksController extends AppController {

	var $name = 'Links';

	function index() {
		$this->Link->recursive = 0;
		$this->set('links', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid link', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('link', $this->Link->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Link->create();
			if ($this->Link->save($this->data)) {
				$this->Session->setFlash(__('The link has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid link', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Link->save($this->data)) {
				$this->Session->setFlash(__('The link has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Link->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for link', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Link->delete($id)) {
			$this->Session->setFlash(__('Link deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Link was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>