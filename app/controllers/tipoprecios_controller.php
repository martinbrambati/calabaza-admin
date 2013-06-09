<?php
class TipopreciosController extends AppController {

	var $name = 'Tipoprecios';

	function index() {
		$this->Tipoprecio->recursive = 0;
		$this->set('tipoprecios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipoprecio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoprecio', $this->Tipoprecio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipoprecio->create();
			if ($this->Tipoprecio->save($this->data)) {
				$this->Session->setFlash(__('The tipoprecio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoprecio could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipoprecio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipoprecio->save($this->data)) {
				$this->Session->setFlash(__('The tipoprecio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoprecio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipoprecio->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipoprecio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipoprecio->delete($id)) {
			$this->Session->setFlash(__('Tipoprecio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipoprecio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>