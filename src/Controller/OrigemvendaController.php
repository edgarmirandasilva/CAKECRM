<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Origemvenda Controller
 *
 * @property \App\Model\Table\OrigemvendaTable $Origemvenda
 */
class OrigemvendaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('origemvenda', $this->paginate($this->Origemvenda));
        $this->set('_serialize', ['origemvenda']);
    }

    /**
     * View method
     *
     * @param string|null $id Origemvenda id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $origemvenda = $this->Origemvenda->get($id, [
            'contain' => ['Oportunidades']
        ]);
        $this->set('origemvenda', $origemvenda);
        $this->set('_serialize', ['origemvenda']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $origemvenda = $this->Origemvenda->newEntity();
        if ($this->request->is('post')) {
            $origemvenda = $this->Origemvenda->patchEntity($origemvenda, $this->request->data);
            if ($this->Origemvenda->save($origemvenda)) {
                $this->Flash->success(__('The origemvenda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The origemvenda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('origemvenda'));
        $this->set('_serialize', ['origemvenda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Origemvenda id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $origemvenda = $this->Origemvenda->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $origemvenda = $this->Origemvenda->patchEntity($origemvenda, $this->request->data);
            if ($this->Origemvenda->save($origemvenda)) {
                $this->Flash->success(__('The origemvenda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The origemvenda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('origemvenda'));
        $this->set('_serialize', ['origemvenda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Origemvenda id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $origemvenda = $this->Origemvenda->get($id);
        if ($this->Origemvenda->delete($origemvenda)) {
            $this->Flash->success(__('The origemvenda has been deleted.'));
        } else {
            $this->Flash->error(__('The origemvenda could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
