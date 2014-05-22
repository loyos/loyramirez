<?php
class IndexController extends AppController {
	
	public $components = array('Session', 'Email');
	public $uses = array('Contacto'); // models
	
	public function index(){
		// debug($this->data);
		$hola = $this->Contacto->find('all');
		// debug($hola);
		if(!empty($this->data)){
			$saved = $this->Contacto->save($this->data);
			if($saved){
				$this->Email->from    = 'alguien@ejemplo.com';
				$this->Email->to      = 'loyenrique1@gmail.com';
				$this->Email->subject = 'LoyRamirez.com';
				$this->Email->template = 'default';
				$this->Email->sendAs = 'both';
				$this->set('data', $this->data);
				$this->Email->send();
				echo $this->Session->setFlash('Thank you for contacting, you will receive a response within 24 hours.', 'success');
			}
		}
	
	}

}