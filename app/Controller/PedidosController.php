<?php
APP::uses('AppController', 'Controller');

class PedidosController extends AppController {


	public $layout = 'bootstrap';
	public $helpers = array('Js' => array('Jquery'));
	public $components = array('RequestHandler');

	public $paginate = array (
		'fields' => array ('Pedido.id', 'Pedido.cliente', 'Pedido.pedido', 'Pedido.data', 'Pedido.observacao'),
		'conditions' => array(),
		'limit' => 10,
		'order' => array('Ator.nome' =>'asc')
	);


	public function index() {
		if ($this->request->is('post') && !empty($this->request->data['Pedido']['cliente'])) {
			$this->paginate['conditions']['Pedido.cliente LIKE'] = trim($this->request->data['Pedido']['cliente']) . '%';
		}
		$pedidos = $this->paginate();
		$this->set('pedidos', $pedidos);
	}

	public function add () {
		if(!empty($this->request->data)); {
		$this->Pedido->create();
		if ($this->Pedido->save($this->request->data)) {
			$this->Flash->set('Pedido registrado com sucesso!');
			$this->redirect('/pedidos');
			}
		}
	}

    public function edit($id = null) {
        if (!empty($this->request->data)) {
            if ($this->Pedido->save($this->request->data)) {
                $this->Flash->set('Pedido alterado com sucesso!');
                $this->redirect('/pedidos');
            }
        } else {
            $fields = array('Pedido.id','Pedido.cliente', 'Pedido.mesa', 'Pedido.observacao');
            $conditions = array('Pedido.id' => $id);
            $this->request->data = $this->Pedido->find('first', compact('fields', 'conditions'));
        }
    }

	public function view($id = null) {
		$fields = array('Pedido.id', 'Pedido.cliente', 'Pedido.pedido', 'Pedido.mesa', 'Pedido.data', 'Pedido.observacao');
		$conditions = array('Pedido.id' => $id);
		$this->request->data = $this->Pedido->find('first', compact('fields', 'conditions'));
    }

	// public function delete($id) {
    //     $this->Pedido->delete($id);
    //     $this->Flash->set('Pedido excluído com sucesso!');
    //     $this->redirect('/pedidos');
    // }


}
