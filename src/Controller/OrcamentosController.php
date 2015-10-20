<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orcamentos Controller
 *
 * @property \App\Model\Table\OrcamentosTable $Orcamentos
 */
class OrcamentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Oportunidades', 'Produtos']
        ];
        $this->set('orcamentos', $this->paginate($this->Orcamentos));
        $this->set('_serialize', ['orcamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Orcamento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orcamento = $this->Orcamentos->get($id, [
            'contain' => ['Oportunidades', 'Produtos']
        ]);
        $this->set('orcamento', $orcamento);
        $this->set('_serialize', ['orcamento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orcamento = $this->Orcamentos->newEntity();
        if ($this->request->is('post')) {
            $orcamento = $this->Orcamentos->patchEntity($orcamento, $this->request->data);
            if ($this->Orcamentos->save($orcamento)) {
                $this->Flash->success(__('The orcamento has been saved.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('The orcamento could not be saved. Please, try again.'));
            }
        }
        $oportunidades = $this->Orcamentos->Oportunidades->find('list', ['limit' => 200]);
        $produtos = $this->Orcamentos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('orcamento', 'oportunidades', 'produtos'));
        $this->set('_serialize', ['orcamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orcamento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orcamento = $this->Orcamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orcamento = $this->Orcamentos->patchEntity($orcamento, $this->request->data);
            if ($this->Orcamentos->save($orcamento)) {
                $this->Flash->success(__('The orcamento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orcamento could not be saved. Please, try again.'));
            }
        }
        $oportunidades = $this->Orcamentos->Oportunidades->find('list', ['limit' => 200]);
        $produtos = $this->Orcamentos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('orcamento', 'oportunidades', 'produtos'));
        $this->set('_serialize', ['orcamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orcamento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orcamento = $this->Orcamentos->get($id);
        if ($this->Orcamentos->delete($orcamento)) {
            $this->Flash->success(__('The orcamento has been deleted.'));
        } else {
            $this->Flash->error(__('The orcamento could not be deleted. Please, try again.'));
        }
        return $this->redirect($this->referer());
    }
}
