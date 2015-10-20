<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opestado Controller
 *
 * @property \App\Model\Table\OpestadoTable $Opestado
 */
class OpestadoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('opestado', $this->paginate($this->Opestado));
        $this->set('_serialize', ['opestado']);
    }

    /**
     * View method
     *
     * @param string|null $id Opestado id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opestado = $this->Opestado->get($id, [
            'contain' => ['Oportunidades']
        ]);
        $this->set('opestado', $opestado);
        $this->set('_serialize', ['opestado']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opestado = $this->Opestado->newEntity();
        if ($this->request->is('post')) {
            $opestado = $this->Opestado->patchEntity($opestado, $this->request->data);
            if ($this->Opestado->save($opestado)) {
                $this->Flash->success(__('The opestado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opestado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opestado'));
        $this->set('_serialize', ['opestado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opestado id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opestado = $this->Opestado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opestado = $this->Opestado->patchEntity($opestado, $this->request->data);
            if ($this->Opestado->save($opestado)) {
                $this->Flash->success(__('The opestado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The opestado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('opestado'));
        $this->set('_serialize', ['opestado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opestado id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opestado = $this->Opestado->get($id);
        if ($this->Opestado->delete($opestado)) {
            $this->Flash->success(__('The opestado has been deleted.'));
        } else {
            $this->Flash->error(__('The opestado could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
