<?php
namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController {
    public function initialize(): void
    {
        $this->loadComponent('Blog');
        $this->loadComponent('Devs');
        $this->listings = $this->Blog->getListings();
    }

    
    public function index(){
        $this->set('listings', $this->listings);
        $this->set('password', $this->Devs->generatePassword());
    }
}

?>