<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tarefas Controller
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 */
class TarefasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projectos', 'Users', 'Progresso']
        ];
        $this->set('tarefas', $this->paginate($this->Tarefas));
        $this->set('_serialize', ['tarefas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tarefa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => ['Projectos', 'Users', 'Progresso']
        ]);
        $this->set('tarefa', $tarefa);
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->data);
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('The tarefa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
            }
        }
        $projectos = $this->Tarefas->Projectos->find('list', ['limit' => 200]);
        $users = $this->Tarefas->Users->find('list', ['limit' => 200]);
        $progresso = $this->Tarefas->Progresso->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'projectos', 'users', 'progresso'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarefa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->data);
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('The tarefa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
            }
        }
        $projectos = $this->Tarefas->Projectos->find('list', ['limit' => 200]);
        $users = $this->Tarefas->Users->find('list', ['limit' => 200]);
        $progresso = $this->Tarefas->Progresso->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'projectos', 'users', 'progresso'));
        $this->set('_serialize', ['tarefa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarefa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $this->Flash->success(__('The tarefa has been deleted.'));
        } else {
            $this->Flash->error(__('The tarefa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
