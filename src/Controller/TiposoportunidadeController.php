<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposoportunidade Controller
 *
 * @property \App\Model\Table\TiposoportunidadeTable $Tiposoportunidade
 */
class TiposoportunidadeController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tiposoportunidade', $this->paginate($this->Tiposoportunidade));
        $this->set('_serialize', ['tiposoportunidade']);
    }

    /**
     * View method
     *
     * @param string|null $id Tiposoportunidade id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposoportunidade = $this->Tiposoportunidade->get($id, [
            'contain' => ['Oportunidades']
        ]);
        $this->set('tiposoportunidade', $tiposoportunidade);
        $this->set('_serialize', ['tiposoportunidade']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposoportunidade = $this->Tiposoportunidade->newEntity();
        if ($this->request->is('post')) {
            $tiposoportunidade = $this->Tiposoportunidade->patchEntity($tiposoportunidade, $this->request->data);
            if ($this->Tiposoportunidade->save($tiposoportunidade)) {
                $this->Flash->success(__('The tiposoportunidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiposoportunidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposoportunidade'));
        $this->set('_serialize', ['tiposoportunidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposoportunidade id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposoportunidade = $this->Tiposoportunidade->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposoportunidade = $this->Tiposoportunidade->patchEntity($tiposoportunidade, $this->request->data);
            if ($this->Tiposoportunidade->save($tiposoportunidade)) {
                $this->Flash->success(__('The tiposoportunidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiposoportunidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposoportunidade'));
        $this->set('_serialize', ['tiposoportunidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposoportunidade id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposoportunidade = $this->Tiposoportunidade->get($id);
        if ($this->Tiposoportunidade->delete($tiposoportunidade)) {
            $this->Flash->success(__('The tiposoportunidade has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposoportunidade could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
