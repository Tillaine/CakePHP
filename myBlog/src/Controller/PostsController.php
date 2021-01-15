<?php 
namespace App\Controller;
use App\Controller\AppController;

class PostsController extends AppController {
    
        private $listings = [
            ['id' => 1, 'address' => '123 Grove St', 'price' => '$700,000', 'body' => 'Cozy cottage in the city'],
            ['id' => 2, 'address' => '124 Grove St', 'price' => '$350,000','body' => 'Modern villa in the country'],
            ['id' => 3, 'address' => '125 Grove St', 'price' => '$400,000', 'body' => 'Condo with a view']
        ];    

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
            die('Creating Post');
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


