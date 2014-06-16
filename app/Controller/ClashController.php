<?php
class ClashController extends AppController {
	
	public $components = array('Session', 'Email');
	public $uses = array('Contacto'); // models
	
	public function index(){
		 $this->layout = 'clash';
	}
	
}