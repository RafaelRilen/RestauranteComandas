<?php
$form = $this->Form->create('Usuario');
$form .= $this->Form->input('Usuario.nome', array('required' => false, 'class' => 'form-control mb-2 mr-sm-2'));
$form .= $this->Html->div('form-row' ,
	$this->Form->input('Usuario.login', array(
		'required' => false,
		'type' => 'text',
		'div' => array('class' => 'form-group col-md-8'),
		'class' => 'form-control'
	)) .
	$this->Form->input('Usuario.senha', array(
		'div' => array('class' => 'form-group col-md-4'),
		'class' => 'form-control',
		'type' => 'password',
	))
	);



$form .= $this->Js->submit('Gravar', array('type' => 'submit', 'class' => 'btn btn-success', 'div' => false, 'update' => '#content'));
$form .= $this->Js->link('Voltar', '/usuarios', array('type' => 'submit', 'class' => 'btn btn-secondary ml-3' , 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Novo Usuario');
echo $form;

if ($this->request->is('ajax')) {
	echo $this->Js->writeBuffer();
}
?>
