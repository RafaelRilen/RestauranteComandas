<?php
$novoButton = $this->Js->link('Novo Usuario', '/usuarios/add', array('class' => 'btn btn-success  float-right', 'update' => '#content'));

$filtro = $this->Form->create('Usuario', array('class' => 'form-inline'));
$filtro .= $this->Form->input('Usuario.nome', array(
	'required' => false,
	'label' => array('text' => 'Usuario', 'class' => 'sr-only'),
	'class' => 'form-control mb-2 mr-sm-2',
	'div' => false,
	'placeholder' => 'Nome do Usuario'
));
$filtro .= $this->Js->submit('Filtrar', array('type' => 'submit', 'class' => 'btn btn-primary mb-2', 'div' => false, 'update' => '#content'));
$filtro .= $this->Form->end();

$filtroBar = $this->Html->div('row',
	$this->Html->div('col-md-6', $filtro) .
	$this->Html->div('col-md-6', $novoButton)
);
$detalhe = array ();
foreach ($usuarios as $usuario) {
	$viewLink = $this->Js->link($usuario['Usuario']['nome'], '/usuarios/view/' . $usuario['Usuario']['id'], array('update' => '#content'));
	$editLink = $this->Js->link('Editar Usuario', '/usuarios/edit/'. $usuario['Usuario']['id'], array('update' => '#content', 'class' => 'btn btn-danger float-right'));
	$detalhe[] = array(
		$viewLink,
		$usuario['Usuario']['login'],
		'*********',
		'',
		$editLink
	);
}

$titulos = array('Nome', 'Login', 'Senha', '', '', '');
$header = $this->Html->tag('thead', $this->Html->tableHeaders($titulos), array('class' => 'thead-light'));
$body = $this->Html->tableCells($detalhe);

$this->Paginator->options(array('update' => '#content'));
$links = array(
	$this->Paginator->first('Primeira', array('class' => 'page-link')),
	$this->Paginator->prev('Anterior', array('class' => 'page-link')),
	$this->Paginator->next('Próxima', array('class' => 'page-link')),
	$this->Paginator->last('Última', array('class' => 'page-link'))
);
$paginate = $this->Html->nestedList($links, array('class' => 'pagination'), array('class' => 'page-item'));
$paginate = $this->Html->tag('nav', $paginate);
$paginateBar = $this->Html->div('row',
	$this->Html->div('col-md-8', $paginate)
);


echo $this->Html->tag('h1', 'Usuários');
echo $filtroBar;
echo $this->Html->tag('table', $header . $body, array('class' => 'table'));
echo $paginateBar;

if ($this->request->is('ajax')) {
	echo $this->Js->writeBuffer();
}
?>


