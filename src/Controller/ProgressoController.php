<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Progresso Controller
 *
 * @property \App\Model\Table\ProgressoTable $Progresso
 */
class ProgressoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('progresso', $this->paginate($this->Progresso));
        $this->set('_serialize', ['progresso']);
    }

    /**
     * View method
     *
     * @param string|null $id Progresso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $progresso = $this->Progresso->get($id, [
            'contain' => ['Tarefas']
        ]);
        $this->set('progresso', $progresso);
        $this->set('_serialize', ['progresso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $progresso = $this->Progresso->newEntity();
        if ($this->request->is('post')) {
            $progresso = $this->Progresso->patchEntity($progresso, $this->request->data);
            if ($this->Progresso->save($progresso)) {
                $this->Flash->success(__('The progresso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The progresso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('progresso'));
        $this->set('_serialize', ['progresso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Progresso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $progresso = $this->Progresso->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $progresso = $this->Progresso->patchEntity($progresso, $this->request->data);
            if ($this->Progresso->save($progresso)) {
                $this->Flash->success(__('The progresso has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The progresso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('progresso'));
        $this->set('_serialize', ['progresso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Progresso id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $progresso = $this->Progresso->get($id);
        if ($this->Progresso->delete($progresso)) {
            $this->Flash->success(__('The progresso has been deleted.'));
        } else {
            $this->Flash->error(__('The progresso could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
