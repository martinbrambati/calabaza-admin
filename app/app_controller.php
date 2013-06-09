<?php
class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');
	
    
    
    function beforeFilter() {
    	
        //Configure AuthComponent
        /*$this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'links', 'action' => 'index');
        
        $this->Auth->allowedActions =  array('display');*/
        
        Configure::write('Config.language', 'esp');
        
        
        
    }
}
?>