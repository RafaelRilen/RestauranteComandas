<?php
$form = $this->Form->create('Pedido');
$form .= $this->Form->hidden('Pedido.id');
$form .= $this->Html->div('form-row' ,
	$this->Form->input('Pedido.cliente', array(
		'required' => false,
		'div' => array('class' => 'form-group col-md-8'),
		'class' => 'form-control'
	)) .
	$this->Form->input('Pedido.mesa', array(
		'div' => array('class' => 'form-group col-md-4'),
		'class' => 'form-control',
		'type' => 'text'
	))
);
$form .= $this->Form->input('Pedido.observacao', array('required' => false, 'class' => 'form-control mb-2 mr-sm-2'));

$form .= $this->Js->submit('Gravar', array('type' => 'submit', 'class' => 'btn btn-success', 'div' => false, 'update' => '#content'));
$form .= $this->Js->link('Voltar', '/pedidos', array('type' => 'submit', 'class' => 'btn btn-secondary ml-3', 'update' => '#content'));

$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Editar Pedido');
echo $form;

if ($this->request->is('ajax')) {
	echo $this->Js->writeBuffer();
}
?>

