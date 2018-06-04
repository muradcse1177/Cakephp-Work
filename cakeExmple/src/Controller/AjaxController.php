<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Http\Response;


class AjaxController extends Controller
{
    public function index()
    {
        $this->layout = 'default';
    }
    public function ajax()
    {
        if ($this->request->is('post')) {
            $assignment = TableRegistry::get('Users');
            $query = $assignment->find();
            $query->select(['count' => $query->func()->count('id')]);
            $query->where(['Users.email' => $this->request->data('email')]);
            $assignment = $query->toArray();
            $assignment_count = $assignment[0]->count;
            if ($assignment_count > 0) {
                return 'Sorry!Same registration exits.Try another.';
            } else {
                $usersTable = TableRegistry::get('Users');
                $users = $usersTable->newEntity();
                $users->name = $this->request->data('name');
                $users->mobile = $this->request->data('phone');
                $users->email = $this->request->data('email');
                $users->password = md5($this->request->data('password'));
                $users->terms = $this->request->data('terms');
                $usersTable->save($users);
                if ($usersTable->save($users)) {
                    echo 'Congrats!Registration is successfull.Please Login.';
                } else {
                    echo 'Registration is failed.';
                }
            }
        } else {
            echo 'Not Post';
        }

    }
}
