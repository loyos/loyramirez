<?php
class IndexController extends AppController {
	
	public $components = array('Session');
	public $uses = array('Contacto'); // models
	
	public function index(){
		// debug($this->data);
		$hola = $this->Contacto->find('all');
		// debug($hola);
		if(!empty($this->data)){
			$saved = $this->Contacto->save($this->data);
			if($saved){
				echo $this->Session->setFlash('Thank you for contacting, you will receive a response within 24 hours.', 'success');
			}
		}
	
	}

}