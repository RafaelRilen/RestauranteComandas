<?php
$view = $this->Html->tag('h2', 'Número do Pedido');
$view .= $this->Html->para('', $this->request->data['Pedido']['id']);
$view .= $this->Html->tag('h2', 'Cliente');
$view .= $this->Html->para('', $this->request->data['Pedido']['cliente']);
$view .= $this->Html->tag('h2', 'Pedido');
$view .= $this->Html->para('', $this->request->data['Pedido']['pedido']);
$view .= $this->Html->tag('h2', 'Mesa');
$view .= $this->Html->para('', $this->request->data['Pedido']['mesa']);
$view .= $this->Html->tag('h2', 'Data do Pedido');
$view .= $this->Html->para('', $this->request->data['Pedido']['data']);
$view .= $this->Html->tag('h2', 'Observacao');
$view .= $this->Html->para('', $this->request->data['Pedido']['observacao']);

$view .= $this->Js->link('Voltar', '/pedidos', array('type' => 'submit', 'class' => 'btn btn-secondary', 'update' => '#content'));

$view .= $this->Js->link('Imprimir', '/pedidos', array('type' => 'submit', 'class' => 'btn btn-danger', 'update' => '#content'));

echo $this->Html->tag('h1', 'Visualizar Informações do Pedido');
echo $view;

if ($this->request->is('ajax')) {
	echo $this->Js->writeBuffer();
}
?>
