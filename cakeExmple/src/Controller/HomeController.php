<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class HomeController extends AppController
{
    public function beforeRender(Event $event)
    {
        $this->layout = 'mainLayout';
        return parent::beforeRender($event); // TODO: Change the autogenerated stub
    }
    public function index()
    {
    }
    public function typography()
    {
    }
}