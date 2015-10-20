<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Credencias Controller
 *
 * @property \App\Model\Table\CredenciasTable $Credencias
 */
class CredenciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $this->set('credencias', $this->paginate($this->Credencias));
        $this->set('_serialize', ['credencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Credencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $credencia = $this->Credencias->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('credencia', $credencia);
        $this->set('_serialize', ['credencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $credencia = $this->Credencias->newEntity();
        if ($this->request->is('post')) {
            $credencia = $this->Credencias->patchEntity($credencia, $this->request->data);
            if ($this->Credencias->save($credencia)) {
                $this->Flash->success(__('The credencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The credencia could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Credencias->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('credencia', 'clientes'));
        $this->set('_serialize', ['credencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Credencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $credencia = $this->Credencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $credencia = $this->Credencias->patchEntity($credencia, $this->request->data);
            if ($this->Credencias->save($credencia)) {
                $this->Flash->success(__('The credencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The credencia could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Credencias->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('credencia', 'clientes'));
        $this->set('_serialize', ['credencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Credencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $credencia = $this->Credencias->get($id);
        if ($this->Credencias->delete($credencia)) {
            $this->Flash->success(__('The credencia has been deleted.'));
        } else {
            $this->Flash->error(__('The credencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
