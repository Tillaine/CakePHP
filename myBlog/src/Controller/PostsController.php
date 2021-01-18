<?php 
namespace App\Controller;
use App\Controller\AppController;

class PostsController extends AppController {
    
        private $listings;

        public function initialize(): void
        {
            $this->loadComponent('Blog');
            $this->listings = $this->Blog->getListings();
        }

        public function index(){
            
            $this->set('listings', $this->listings);
            
        }
        public function view($id){
            
            $this->set('listings', $this->listings);
            $this->set('id', $id);
            // $this->set('listings', $this->listings);
            // $listing = $this->listings[array_search(5,$this->listings,true)]; 
            // $this->set('listing', $this->listing);
        }
        public function create(){
            $this->set('listings', $this->listings);

        }

        public function hello(){
            //die('hello '.$this->request['url']['name']);
            //print_r($this->request->params);
            /*
            if($this->request->is('post')){
                die('This is a POST');
            } elseif($this->request->is('get')){
                die('This is a GET');
            }
            */
            die($this->request->header('User-Agent'));
    
        }
}


