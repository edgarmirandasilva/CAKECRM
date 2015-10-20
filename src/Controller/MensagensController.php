<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mensagens Controller
 *
 * @property \App\Model\Table\MensagensTable $Mensagens
 */
class MensagensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Projectos']
        ];
        $this->set('mensagens', $this->paginate($this->Mensagens));
        $this->set('_serialize', ['mensagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Mensagen id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => ['Users', 'Projectos']
        ]);
        $this->set('mensagen', $mensagen);
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mensagen = $this->Mensagens->newEntity();
        if ($this->request->is('post')) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->data);
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('The mensagen has been saved.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('The mensagen could not be saved. Please, try again.'));
            }
        }
        $users = $this->Mensagens->Users->find('list', ['limit' => 200]);
        $projectos = $this->Mensagens->Projectos->find('list', ['limit' => 200]);
        $this->set(compact('mensagen', 'users', 'projectos'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mensagen id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->data);
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('The mensagen has been saved.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('The mensagen could not be saved. Please, try again.'));
            }
        }
        $users = $this->Mensagens->Users->find('list', ['limit' => 200]);
        $projectos = $this->Mensagens->Projectos->find('list', ['limit' => 200]);
        $this->set(compact('mensagen', 'users', 'projectos'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mensagen id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mensagen = $this->Mensagens->get($id);
        if ($this->Mensagens->delete($mensagen)) {
            $this->Flash->success(__('The mensagen has been deleted.'));
        } else {
            $this->Flash->error(__('The mensagen could not be deleted. Please, try again.'));
        }
        return $this->redirect($this->referer());
    }
}
