<h3>New Listings</h3>
    <ul class="list-group">
        <?php foreach($listings as $listing): ?>
            <li class="list-group-item">
                <?= $this->Html->link($listing['body'], '/posts' . '/'  . $listing['id']) ?>
            </li>
          <?php endforeach ?>
    </ul>
