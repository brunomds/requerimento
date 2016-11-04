<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logins Controller
 *
 * @property \App\Model\Table\LoginsTable $Logins
 */
class LoginsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $logins = $this->paginate($this->Logins);

        $this->set(compact('logins'));
        $this->set('_serialize', ['logins']);
    }

    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $login = $this->Logins->get($id, [
            'contain' => []
        ]);

        $this->set('login', $login);
        $this->set('_serialize', ['login']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $login = $this->Logins->newEntity();
        if ($this->request->is('post')) {
            $login = $this->Logins->patchEntity($login, $this->request->data);
            if ($this->Logins->save($login)) {
                $this->Flash->success(__('The login has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The login could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $login = $this->Logins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $login = $this->Logins->patchEntity($login, $this->request->data);
            if ($this->Logins->save($login)) {
                $this->Flash->success(__('The login has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The login could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Login id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $login = $this->Logins->get($id);
        if ($this->Logins->delete($login)) {
            $this->Flash->success(__('The login has been deleted.'));
        } else {
            $this->Flash->error(__('The login could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
