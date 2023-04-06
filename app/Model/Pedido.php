<?php
APP::uses('AppModel', 'Model');

class Pedido extends AppModel {

	public $validate = array(
        'cliente' => array('rule' => 'notBlank', 'message' => 'Informe o nome do cliente, por favor!'),
		'pedido' => array('rule' => 'notBlank', 'message' => 'Informe o pedido, por favor!')
    );
}
?>
