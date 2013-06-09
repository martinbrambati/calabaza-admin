<?php
class PreciosController extends AppController {

	var $name = 'Precios';

	function index() {
		$this->Precio->recursive = 0;
		$this->set('precios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid precio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('precio', $this->Precio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Precio->create();
			if ($this->Precio->save($this->data)) {
				$this->Session->setFlash(__('The precio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The precio could not be saved. Please, try again.', true));
			}
		}
		$tipoprecios = $this->Precio->Tipoprecio->find('list');
		$this->set(compact('tipoprecios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid precio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Precio->save($this->data)) {
				$this->Session->setFlash(__('The precio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The precio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Precio->read(null, $id);
		}
		$tipoprecios = $this->Precio->Tipoprecio->find('list');
		$this->set(compact('tipoprecios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for precio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Precio->delete($id)) {
			$this->Session->setFlash(__('Precio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Precio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>