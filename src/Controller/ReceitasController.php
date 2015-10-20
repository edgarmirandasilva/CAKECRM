<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Receitas Controller
 *
 * @property \App\Model\Table\ReceitasTable $Receitas
 */
class ReceitasController extends AppController
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
        $this->set('receitas', $this->paginate($this->Receitas));
        $this->set('_serialize', ['receitas']);
    }

    /**
     * View method
     *
     * @param string|null $id Receita id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receita = $this->Receitas->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('receita', $receita);
        $this->set('_serialize', ['receita']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receita = $this->Receitas->newEntity();
        if ($this->request->is('post')) {
            $receita = $this->Receitas->patchEntity($receita, $this->request->data);
            if ($this->Receitas->save($receita)) {
                $this->Flash->success(__('The receita has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receita could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Receitas->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('receita', 'clientes'));
        $this->set('_serialize', ['receita']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Receita id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receita = $this->Receitas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receita = $this->Receitas->patchEntity($receita, $this->request->data);
            if ($this->Receitas->save($receita)) {
                $this->Flash->success(__('The receita has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receita could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Receitas->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('receita', 'clientes'));
        $this->set('_serialize', ['receita']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Receita id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receita = $this->Receitas->get($id);
        if ($this->Receitas->delete($receita)) {
            $this->Flash->success(__('The receita has been deleted.'));
        } else {
            $this->Flash->error(__('The receita could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
