<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Session\DatabaseSession;


/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 */
class ClientesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        
        $query = $this->Clientes->find();
        $this->set('clientes', $query);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function possiveis() {
        $this->paginate = [
            'contain' => ['Estado', 'Anegocio'],
            'conditions' => ['estado_id LIKE 2']
        ];
        $this->set('clientes', $this->paginate($this->Clientes));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function clientessim() {
        $this->paginate = [
            'contain' => ['Estado', 'Anegocio'],
            'conditions' => ['estado_id LIKE 1']
        ];
        $this->set('clientes', $this->paginate($this->Clientes));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Estado', 'Anegocio']
        ]);
        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);

        // In a controller method.
        $this->loadModel('Projectos');
        $this->paginate = [
            'contain' => ['Clientes', 'Users'],
            'conditions' => ['clientes_id LIKE '.$id]
        ];
        $this->set('projectos', $this->paginate($this->Projectos));
        $this->set('_serialize', ['projectos']);

        $this->loadModel('Oportunidades');
        $this->paginate = [
            'contain' => ['Clientes', 'Tiposoportunidade', 'Origemvenda', 'Users', 'Opestado'],
            'conditions' => ['clientes_id LIKE '.$id]
        ];
        $this->set('oportunidades', $this->paginate($this->Oportunidades));
        $this->set('_serialize', ['oportunidades']);
        
        $session = $this->request->session();
        $session->write('idcli', $cliente->id); 
        
        if (!empty($this->request->data)) {
            $this->Upload->send($this->request->data['logo']);
        }
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $estado = $this->Clientes->Estado->find('list', ['limit' => 200]);
        $anegocio = $this->Clientes->Anegocio->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'estado', 'anegocio'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $estado = $this->Clientes->Estado->find('list', ['limit' => 200]);
        $anegocio = $this->Clientes->Anegocio->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'estado', 'anegocio'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
