<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<nav>
    <ul class="navbar navbar-light bg-light">
        <a class="nav-link navbar-brand" href="#"><?= $this->fetch('title') ?></a>

      <a class="nav-link" rel="noopener" href="/myBlog">Home</a>
      <a class="nav-link" target="_blank" rel="noopener" href="https://i2.wp.com/metro.co.uk/wp-content/uploads/2018/08/gettyimages-6369412861.jpg?quality=90&strip=all&zoom=1&resize=540%2C360&ssl=1">Peace</a>
    </ul>
</nav>
    <main class="main">
        <div>
            <?= $this->Flash->render() ?>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-4">
                    <?= $this -> element('latest'); ?>
                </div>
                <div class="col-md-8 col-lg-9 col-sm-8">
                    <?= $this->fetch('content') ?>
                </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
