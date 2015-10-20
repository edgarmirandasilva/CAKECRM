<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Projectos Controller
 *
 * @property \App\Model\Table\ProjectosTable $Projectos
 */
class ProjectosController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Clientes', 'Users']
        ];
        $this->set('projectos', $this->paginate($this->Projectos));
        $this->set('_serialize', ['projectos']);
    }

    /**
     * View method
     *
     * @param string|null $id Projecto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {

        $uid = $this->Auth->user('id');
        $this->set('uid', $uid);

        $projecto = $this->Projectos->get($id, [
            'contain' => ['Clientes', 'Users']
        ]);
        $this->set('projecto', $projecto);
        $this->set('_serialize', ['projecto']);

        // Tarefas
        $this->loadModel('Tarefas');
        $this->paginate = [
            'contain' => ['Projectos', 'Users', 'Progresso'],
            'conditions' => ['projectos_id LIKE ' . $id]
        ];

        $this->set('tarefas', $this->paginate($this->Tarefas));
        $this->set('_serialize', ['tarefas']);

        //Percentagem de conclusão do projecto
        // Total terminado
        $query = $this->Tarefas->find('all', [
            'conditions' => ['projectos_id LIKE ' . $id . ' and progresso_id LIKE 3']
        ]);
        
        // Total no projecto
        $query2 = $this->Tarefas->find('all', [
            'conditions' => ['projectos_id LIKE ' . $id]
        ]);
        
        $number = $query->count();
        
        $number2 = $query2->count();

        if ($number != '0') {
            $percent = (( 100 / $number2) * $number2 );
            $percent2 =($percent / $number2 );
            
            $querysave = $this->Projectos->query();
            $querysave->update()
                    ->set(['estado' => $percent2])
                    ->where(['id' => $id])
                    ->execute();
        } else {
            $percent2 = 0;
            $querysave = $this->Projectos->query();
            $querysave->update()
                    ->set(['estado' => $percent2])
                    ->where(['id' => $id])
                    ->execute();
        }
        
        $this->set('percent', $percent2);
        
        //Adicionar nova tarefa no projecto
        
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->data);
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('A sua foi salva.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
            }
        }

        // Mensagens
        $this->loadModel('Mensagens');
        $this->paginate = [
            'contain' => ['Users', 'Projectos']
        ];
        $this->set('mensagens', $this->paginate($this->Mensagens));
        $this->set('_serialize', ['mensagens']);

        $mensagen = $this->Mensagens->newEntity();
        if ($this->request->is('post')) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->data);
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('The mensagen has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mensagen could not be saved. Please, try again.'));
            }
        }
      
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $projecto = $this->Projectos->newEntity();
        if ($this->request->is('post')) {
            $projecto = $this->Projectos->patchEntity($projecto, $this->request->data);
            if ($this->Projectos->save($projecto)) {
                $this->Flash->success(__('The projecto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projecto could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Projectos->Clientes->find('list', ['limit' => 200]);
        $users = $this->Projectos->Users->find('list', ['limit' => 200]);
        $this->set(compact('projecto', 'clientes', 'users'));
        $this->set('_serialize', ['projecto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Projecto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $projecto = $this->Projectos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projecto = $this->Projectos->patchEntity($projecto, $this->request->data);
            if ($this->Projectos->save($projecto)) {
                $this->Flash->success(__('The projecto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projecto could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Projectos->Clientes->find('list', ['limit' => 200]);
        $users = $this->Projectos->Users->find('list', ['limit' => 200]);
        $this->set(compact('projecto', 'clientes', 'users'));
        $this->set('_serialize', ['projecto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Projecto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $projecto = $this->Projectos->get($id);
            if ($this->Projectos->delete($projecto)) {
                $this->Flash->success(__('The projecto has been deleted.'));
            } else {
                $this->Flash->error(__('The projecto could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        } catch (Exception $e) {
            $error = 'The item you are trying to delete is associated with other records';
            $this->set('error', $error);
            $e->getMessage();
        }
    }

}
