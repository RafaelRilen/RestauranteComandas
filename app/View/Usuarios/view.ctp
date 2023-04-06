<?php
$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Usuario']['nome']);
$view .= $this->Html->tag('h2', 'Login');
$view .= $this->Html->para('', $this->request->data['Usuario']['login']);
$view .= $this->Html->tag('h2', 'Senha');
$view .= $this->Html->para('', $this->request->data['Usuario']['senha']);

$view .= $this->Js->link('Voltar', '/usuarios', array('type' => 'submit', 'class' => 'btn btn-secondary', 'update' => '#content'));

echo $this->Html->tag('h1', 'Visualizar Informações do Usuário');
echo $view;

if ($this->request->is('ajax')) {
	echo $this->Js->writeBuffer();
}
?>
