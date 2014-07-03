<?php

class Contacto extends AppModel {
    var $name = 'Contacto';


	var $validate = array(
       
		'name' => array(
			'rule' => 'notEmpty',
			'message' => "This field cannot be empty."
		),
		'email' => 'email',
		'subject' => array(
			'rule' => 'notEmpty',
			'message' => 'This field cannot be empty.'
		),
		'message' => array(
			'rule' => 'notEmpty',
			'message' => 'This field cannot be empty.'
		)
    );

	
}

?>