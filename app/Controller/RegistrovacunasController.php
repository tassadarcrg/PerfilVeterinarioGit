<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RegistrovacunasController extends AppController {
    public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    
    $this->Auth->allow('index');
    
}
    public function index() {}
    
    public function add(){
        if ($this->request->is('post')) {
            $this->Registrovacuna->create();
            if ($this->Registrovacuna->save($this->request->data)) {
                $this->Session->setFlash(__('Se ha añadido una vacuna'));
                return $this->redirect(array('controller'=>'duenos', 'action' => 'profile'));
            }
            $this->Session->setFlash(
                __('No se creo la mascota, trate de nuevo')
            );
        }
    }
	
}