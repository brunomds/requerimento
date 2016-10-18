<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cadastros Controller
 *
 * @property \App\Model\Table\CadastrosTable $Cadastros
 */
class CadastrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cadastros = $this->paginate($this->Cadastros);

        $this->set(compact('cadastros'));
        $this->set('_serialize', ['cadastros']);
    }

    /**
     * View method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadastro = $this->Cadastros->get($id, [
            'contain' => []
        ]);

        $this->set('cadastro', $cadastro);
        $this->set('_serialize', ['cadastro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadastro = $this->Cadastros->newEntity();
        if ($this->request->is('post')) {
            $cadastro = $this->Cadastros->patchEntity($cadastro, $this->request->data);
            if ($this->Cadastros->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cadastro'));
        $this->set('_serialize', ['cadastro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadastro = $this->Cadastros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastro = $this->Cadastros->patchEntity($cadastro, $this->request->data);
            if ($this->Cadastros->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cadastro'));
        $this->set('_serialize', ['cadastro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadastro = $this->Cadastros->get($id);
        if ($this->Cadastros->delete($cadastro)) {
            $this->Flash->success(__('The cadastro has been deleted.'));
        } else {
            $this->Flash->error(__('The cadastro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
