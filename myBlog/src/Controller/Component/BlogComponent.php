<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class BlogComponent extends Component
{
    public function getListings(){
        $listings = [
            ['id' => 1, 'address' => '123 Grove St', 'price' => '$700,000', 'body' => 'Cozy cottage in the city'],
            ['id' => 2, 'address' => '124 Grove St', 'price' => '$350,000','body' => 'Modern villa in the country'],
            ['id' => 3, 'address' => '125 Grove St', 'price' => '$400,000', 'body' => 'Condo with a view']
        ];    
        return $listings;

    }

}