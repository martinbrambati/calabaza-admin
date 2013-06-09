<?php
class FotosController extends AppController {

	var $name = 'Fotos';
	var $components = array('Attachment');// => array( 'files_dir' => 'fotos', 'images_size' => array( 'avatar' => array(75, 75, 'resizeCrop') ) ));

	function index() {
		
		$this->Foto->recursive = 0;
		$this->set('fotos', $this->paginate());
	}
	


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid foto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('foto', $this->Foto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Foto->create();
			
			//if($this->data['Foto']['foto']['type'] != "image/jpeg"){
				//$this->Session->setFlash(__('Only JPEG files allowed.', true));
			/*}else*/ if($this->Attachment->upload($this->data['Foto']) && $this->Foto->save($this->data)){
				$this->Session->setFlash(__('The foto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto could not be saved. Please, try again.', true));
			}
		}
	}



	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for foto', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$foto = $this->Foto->read(null, $id);
		
		if ($this->Attachment->delete_files($foto['Foto']['foto_file_path']) && $this->Foto->delete($id)) {
			$this->Session->setFlash(__('Foto deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Foto was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>