<?php

namespace App\Controller;


use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Oportunidades Controller
 *
 * @property \App\Model\Table\OportunidadesTable $Oportunidades
 */
class OportunidadesController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Clientes', 'Tiposoportunidade', 'Origemvenda', 'Users', 'Opestado']
        ];
        $this->set('oportunidades', $this->paginate($this->Oportunidades));
        $this->set('_serialize', ['oportunidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Oportunidade id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->loadModel('Orcamentos');
        $this->paginate = [
            'contain' => ['Oportunidades', 'Produtos'],
            'conditions' => ['oportunidades_id LIKE ' . $id]
        ];
        $this->set('orcamentos', $this->paginate($this->Orcamentos));
        $this->set('_serialize', ['orcamentos']);

        $produtos = $this->Orcamentos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('orcamento', 'oportunidades', 'produtos'));

        $oportunidade = $this->Oportunidades->get($id, [
            'contain' => ['Clientes', 'Tiposoportunidade', 'Origemvenda', 'Users', 'Opestado']
        ]);
        $this->set('oportunidade', $oportunidade);
        $this->set('_serialize', ['oportunidade']);

        // Results in SELECT COUNT(*) count FROM ...
        $query = $this->loadModel('Orcamentos');
        $this->paginate = [
            'contain' => ['Oportunidades', 'Produtos'],
            'conditions' => ['oportunidades_id LIKE ' . $id]
        ];
        
        $sum = 0;
        
        foreach ($query as $orcamento):
            $sum2 = $this->Number->Format($orcamento->produto->valor);
            $sum += floatval(str_replace(',', '', $sum2));
        endforeach;
        
        $this->set('sum', $sum);
        $oportunidades = TableRegistry::get('Oportunidades');
        $query = $oportunidades->query();
        $query->update()
                ->set(['valor' => $sum])
                ->where(['id' => $id])
                ->execute();
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $oportunidade = $this->Oportunidades->newEntity();
        if ($this->request->is('post')) {
            $oportunidade = $this->Oportunidades->patchEntity($oportunidade, $this->request->data);
            if ($this->Oportunidades->save($oportunidade)) {
                $this->Flash->success(__('The oportunidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The oportunidade could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Oportunidades->Clientes->find('list', ['limit' => 200]);
        $tiposoportunidade = $this->Oportunidades->Tiposoportunidade->find('list', ['limit' => 200]);
        $origemvenda = $this->Oportunidades->Origemvenda->find('list', ['limit' => 200]);
        $users = $this->Oportunidades->Users->find('list', ['limit' => 200]);
        $opestado = $this->Oportunidades->Opestado->find('list', ['limit' => 200]);
        $this->set(compact('oportunidade', 'clientes', 'tiposoportunidade', 'origemvenda', 'users', 'opestado'));
        $this->set('_serialize', ['oportunidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Oportunidade id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $oportunidade = $this->Oportunidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oportunidade = $this->Oportunidades->patchEntity($oportunidade, $this->request->data);
            if ($this->Oportunidades->save($oportunidade)) {
                $this->Flash->success(__('The oportunidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The oportunidade could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Oportunidades->Clientes->find('list', ['limit' => 200]);
        $tiposoportunidade = $this->Oportunidades->Tiposoportunidade->find('list', ['limit' => 200]);
        $origemvenda = $this->Oportunidades->Origemvenda->find('list', ['limit' => 200]);
        $users = $this->Oportunidades->Users->find('list', ['limit' => 200]);
        $opestado = $this->Oportunidades->Opestado->find('list', ['limit' => 200]);
        $this->set(compact('oportunidade', 'clientes', 'tiposoportunidade', 'origemvenda', 'users', 'opestado'));
        $this->set('_serialize', ['oportunidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Oportunidade id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $oportunidade = $this->Oportunidades->get($id);
        if ($this->Oportunidades->delete($oportunidade)) {
            $this->Flash->success(__('The oportunidade has been deleted.'));
        } else {
            $this->Flash->error(__('The oportunidade could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
