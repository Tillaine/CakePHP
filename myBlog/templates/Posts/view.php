<
<?php 
$foundListing = function ($key, $arr){
    foreach($arr as $item) {
        if($item['id'] == $key) {
            return $item;
        }
    }
};
$imageURL = 'https://stylebyemilyhenderson.com/wp-content/uploads/2019/08/Emily-Henderson-Moutain-House-Living-Room-LoRes1.jpg';

$listing = $foundListing($id, $listings);
?>    

<!-- <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><?= $listing['body']?></h3>
  </div>
  <div class="panel-body">
   
  </div>
</div> -->

<div class="card">
  <div class="card-header"><?= $listing['body']?></div>
  <div class="card-body">
    <img src=<?= $imageURL ?> class="rounded float-left img-fluid img-thumbnail" alt="...">
    <h4> <?= $listing['address']?> </h4>
    <h4> <?= $listing['price']?> </h4>
  </div>
  <div class="card-footer">Contact Bit for more info</div>
</div>

