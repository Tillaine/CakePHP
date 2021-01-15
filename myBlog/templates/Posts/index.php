
          <h1>Listings</h1>
          <?php foreach($listings as $listing): ?>
                <div class="well">
                    <h3><?= $this->Html->link($listing['body'], '/posts' . '/' .$listing['id']) ?></h3>
                    <h4><?= $listing['address'] ?></h4>
                    <h4 class="btn btn-warning"><?= $this->Html->link('Learn More', '/posts' . '/' .$listing['id']) ?></h3>
                </div>
                <hr>
            <?php endforeach ?>
