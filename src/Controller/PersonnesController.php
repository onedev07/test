<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Personnes Controller
 *
 * @property \App\Model\Table\PersonnesTable $Personnes
 * @method \App\Model\Entity\Personne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonnesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $personnes = $this->paginate($this->Personnes);

        $this->set(compact('personnes'));
    }

    /**
     * View method
     *
     * @param string|null $id Personne id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personne = $this->Personnes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('personne'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personne = $this->Personnes->newEmptyEntity();
        if ($this->request->is('post')) {
            $personne = $this->Personnes->patchEntity($personne, $this->request->getData());
            if ($this->Personnes->save($personne)) {
                $this->Flash->success(__('The personne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personne could not be saved. Please, try again.'));
        }
        $this->set(compact('personne'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personne id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personne = $this->Personnes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personne = $this->Personnes->patchEntity($personne, $this->request->getData());
            if ($this->Personnes->save($personne)) {
                $this->Flash->success(__('The personne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personne could not be saved. Please, try again.'));
        }
        $this->set(compact('personne'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personne id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personne = $this->Personnes->get($id);
        if ($this->Personnes->delete($personne)) {
            $this->Flash->success(__('The personne has been deleted.'));
        } else {
            $this->Flash->error(__('The personne could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
