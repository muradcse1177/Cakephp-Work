<?php
App::uses('AppController', 'Controller');
/**
 * Tutorials Controller
 *
 * @property Tutorial $Tutorial
 * @property PaginatorComponent $Paginator
 */
class TutorialsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tutorial->recursive = 0;
		$this->set('tutorials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tutorial->exists($id)) {
			throw new NotFoundException(__('Invalid tutorial'));
		}
		$options = array('conditions' => array('Tutorial.' . $this->Tutorial->primaryKey => $id));
		$this->set('tutorial', $this->Tutorial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tutorial->create();
			if ($this->Tutorial->save($this->request->data)) {
				$this->Flash->success(__('The tutorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tutorial could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tutorial->exists($id)) {
			throw new NotFoundException(__('Invalid tutorial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tutorial->save($this->request->data)) {
				$this->Flash->success(__('The tutorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tutorial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tutorial.' . $this->Tutorial->primaryKey => $id));
			$this->request->data = $this->Tutorial->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tutorial->id = $id;
		if (!$this->Tutorial->exists()) {
			throw new NotFoundException(__('Invalid tutorial'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tutorial->delete()) {
			$this->Flash->success(__('The tutorial has been deleted.'));
		} else {
			$this->Flash->error(__('The tutorial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
