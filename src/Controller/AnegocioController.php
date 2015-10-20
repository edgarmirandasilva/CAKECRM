<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Anegocio Controller
 *
 * @property \App\Model\Table\AnegocioTable $Anegocio
 */
class AnegocioController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('anegocio', $this->paginate($this->Anegocio));
        $this->set('_serialize', ['anegocio']);
    }

    /**
     * View method
     *
     * @param string|null $id Anegocio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anegocio = $this->Anegocio->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('anegocio', $anegocio);
        $this->set('_serialize', ['anegocio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anegocio = $this->Anegocio->newEntity();
        if ($this->request->is('post')) {
            $anegocio = $this->Anegocio->patchEntity($anegocio, $this->request->data);
            if ($this->Anegocio->save($anegocio)) {
                $this->Flash->success(__('The anegocio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The anegocio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('anegocio'));
        $this->set('_serialize', ['anegocio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Anegocio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anegocio = $this->Anegocio->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anegocio = $this->Anegocio->patchEntity($anegocio, $this->request->data);
            if ($this->Anegocio->save($anegocio)) {
                $this->Flash->success(__('The anegocio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The anegocio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('anegocio'));
        $this->set('_serialize', ['anegocio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Anegocio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anegocio = $this->Anegocio->get($id);
        if ($this->Anegocio->delete($anegocio)) {
            $this->Flash->success(__('The anegocio has been deleted.'));
        } else {
            $this->Flash->error(__('The anegocio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
