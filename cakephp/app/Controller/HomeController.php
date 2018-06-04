<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

    public function index(){
        $this->layout = 'mainLayout';
    }
}
